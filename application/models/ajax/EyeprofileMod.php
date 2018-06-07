<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyeprofileMod extends CI_Model
{
    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
    }
    function __clubhome(){
        $query = ['page'=> $this->input->post('page'),'limit'=> 10, 'competition'=> 'Liga Usia Muda','league'=>'SSB / Akademi Sepakbola'];
        $data['club'] = $this->excurl->remoteCall($this->__xurl().'profile-club',$this->__xkey(),$query);
        $html = $this->load->view($this->__theme().'eyeprofile/ajax/clubhome',$data,true);
        $data = ['xClass'=> 'reqclub','xHtml'=> $html];
        $this->tools->__flashMessage($data);
    }
    function __playerhome()
    {
        $query =['page' => $this->input->post('page'),'limit' => 10,'competition'=> 'Liga Usia Muda','league'=>'SSB / Akademi Sepakbola'];
        $data['profile'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/playerhome', $data, true);

        $data = array('xClass' => 'reqprofile', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __klublist()
    {
        $competition = urldecode($this->input->post('slug'));
        $league =($this->input->post('league') == 'SSB ' ? 'SSB / Akademi Sepakbola' : $this->input->post('league')) ;

        if ($competition == 'Non Liga') {
            $competition = 'SSB / Akademi Sepakbola';
        }

        $page = ($this->session->userdata('pageklub')) ? $this->session->userdata('pageklub') : 1;
        
        if ($this->input->post('paging') == 'next') {
            if ($this->session->userdata('pagetotalklub') > $this->session->userdata('pageklub')) {
                $page += 1;
            }
        } else {
           if($this->input->post('paging') == 'back' && $this->session->userdata('pageklub') >= 2){
                $page -= 1;
            }
        }

        $this->session->set_userdata(array('pageklub' => $page));

        $query = array('page' => $this->session->userdata('pageklub'), 'limit' => 24, 'league' => $league, 'competition' => $competition);
       
        $data['slug'] = $competition;
        $data['league'] = $league;
        $data['klublist'] = $this->excurl->remoteCall($this->__xurl() . 'profile-club', $this->__xkey(), $query);
        $data['klubcount'] = $this->excurl->remoteCall($this->__xurl() . 'profile-club', $this->__xkey(), array_merge($query, ['count' => true]));

        $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/klublist', $data, true);

        $data = array('xClass' => 'reqklublist', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __clubcount()
    {
        $competition = urldecode($this->input->post('slug'));
        $data['submenu'] = urldecode($this->input->post('submenu'));

        if ($competition == 'Non Liga') {
            $competition = 'SSB / Akademi Sepakbola';
        }

        $query = array('page' => 1, 'limit' => 9, 'league' => '', 'competition' => $competition, 'count' => true);
        $data['klublist'] = $this->excurl->remoteCall($this->__xurl() . 'profile-club', $this->__xkey(), $query);
		$data['playercount'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), array_merge($query, ['playercount' => true]));

        $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/clubcount', $data, true);

        $data = array('xClass' => 'reqclubcount', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __competition()
    {
        if($this->input->post('slug')){

            $slug_competition = $this->input->post('slug');
            $slug_league = $this->input->post('league');
            $submenu = $this->input->post('submenu');//req ['klub,pemain,official'];
            // $data['slug'] = $this->input->post('slug');
            // $data['submenu'] = $this->input->post('submenu');

            $query = array('page' => 1, 'limit' => 8);
            $res[0] = $this->excurl->remoteCall($this->__xurl() . 'competition', $this->__xkey(), $query);
            $res[1] = $this->excurl->remoteCall($this->__xurl() . 'league', $this->__xkey(), $query);
            $res[0] = json_decode($res[0]);
            $res[1] = json_decode($res[1]);
            //p($res);
           
            if($res[1]->status == 'Success' AND $res[1]->status == 'Success'){
            
                $comlist = $res[0]->data;
                $leaguelist = $res[1]->data;
                //urutkan list competition
                //r = competition
                // $r = [];
                // $r[0] = $comlist[4];

                // for($i = 1;$i < 6;$i++ ){
                //    $r[$i] = $comlist[$i];
                //    if($i == 4){
                //     $r[$i] = $comlist[$i+1];
                //    }
                //    if($i == 5){
                //     $r[$i] = $comlist[0];
                //    }
                // }
                // //end
                // //urutkan list league
                // $s = [];
                // #$s[0] = $leaguelist[];
                // for($i = 0;$i < count($leaguelist)-1;$i++){
                //     if($i == 0 ){ 
                //         $s[$i] = $leaguelist[count($leaguelist)-1];
                //     }
                //     else{
                //     $s[$i] = $leaguelist[$i];
                //     }
                // }

                $competition = $comlist;
                $league = $leaguelist;
            }
             // $competition = $r;
             //    $league = $s;
           
            $data = [
                'competition' => $competition,
                'league'=> $league,
                'slug'=> $slug_competition,
                'slug_league'=> $slug_league,
                'submenu'=> $submenu];
            
            $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/competitionlist', $data, true);

            $data = array('xClass' => 'reqcompetition', 'xHtml' => $html);
            $this->tools->__flashMessage($data);

        }
        
    }

    function __matchlist()
    {
        $competition = $this->input->post('slug');
        $date = date('Y-m-d');
        $newdate = strtotime('-5 month', strtotime($date));
        $startdate = date("Y-m-d",strtotime("-1 day"));
        $lastdate = date("Y-m-d",strtotime("-6 day"));

        $event = 'LIGA 1 GOJEK 2018';
        // if ($competition == 'Liga Indonesia 1')
        // {
        //     $event = 'LIGA 1 GOJEK TRAVELOKA 2018';
        // }
        // else if ($competition == 'Liga Indonesia 2')
        // {
        //     $event = 'Liga 2 Go-Jek Traveloka - Play Off';
        // }
        // else if ($competition == 'Liga Indonesia 3')
        // {
        //     $event = 'Liga Indonesia 3 Wilayah Jawa Barat';
        // }

            $query = array('page' => 1, 'limit' => 2, 'sortby' => 'newest', 'event' => $event, 'startdate' => $lastdate, 'enddate' => $startdate);
            $data['matchlist'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

            $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/matchlist', $data, true);

            $data = array('xClass' => 'reqmatchlist', 'xHtml' => $html);
            $this->tools->__flashMessage($data);

            $_SESSION['klublistpage'] = 1;
        
    }

    function __desc_league()
    {
        if($this->input->post('slug')){
            $competition = urldecode($this->input->post('slug'));
            $league =($this->input->post('league') == 'SSB ' ? 'SSB / Akademi Sepakbola' : $this->input->post('league')) ;
            $data['submenu'] = urldecode($this->input->post('submenu'));

            if ($competition == 'Non Liga') {
                $competition = 'SSB / Akademi Sepakbola';
            }

            $query = array('page' => 1, 'limit' => 9, 'league' => $league, 'competition' => $competition, 'count' => true);
            $data['klublist'] = $this->excurl->remoteCall($this->__xurl() . 'profile-club', $this->__xkey(), $query);
            $data['playercount'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), array_merge($query, ['playercount' => true]));

            $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/desc_league', $data, true);

            $data = array('xClass' => 'reqdescleague', 'xHtml' => $html);
            $this->tools->__flashMessage($data);

        }
        
    }

    function __officiallist()
    {
    	$competition = urldecode($this->input->post('slug'));
        $league =($this->input->post('league') == 'SSB ' ? 'SSB / Akademi Sepakbola' : $this->input->post('league')) ;

		if($competition == 'Non Liga'){
			$competition = 'SSB / Akademi Sepakbola';
		}

		$page = ($this->session->userdata('pageoffc')) ? $this->session->userdata('pageoffc') : 1;
      
		if($this->input->post('paging') == 'next')
		{
			if($this->session->userdata('pagetotaloffc') > $this->session->userdata('pageoffc'))
			{
				$page += 1;
			}
		}
		else
		{
			if($this->input->post('paging') == 'back' && $this->session->userdata('pageoffc') >= 2)
			{
				$page -= 1;
			}
		}

		$this->session->set_userdata(array('pageoffc' => $page));

        $query = array('page'  => $this->session->userdata('pageoffc'), 'limit' => 10,
					   'league' => $league, 'competition' => $competition);

		$data['slug'] = $competition;
        $data['league'] = $league;
		$data['offclist'] = $this->excurl->remoteCall($this->__xurl().'profile-official', $this->__xkey(), $query);
		$data['offccount'] = $this->excurl->remoteCall($this->__xurl().'profile-official', $this->__xkey(),
							 array_merge($query, ['count' => true]));

		$html = $this->load->view($this->__theme().'eyeprofile/ajax/officiallist', $data, true);

		$data =array('xClass'=>'reqoffclist','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
	
	function __detailclub(){
        $slug = $this->input->post('slug');
        $query = array();
        $data['detailclub'] = $this->excurl->remoteCall($this->__xurl().'profile-club/'.$slug, $this->__xkey(), $query);
        
        $html = $this->load->view($this->__theme().'eyeprofile/ajax/detailclub', $data, true);
    
        $data =array('xClass'=>'reqdetailclub','xHtml'=> $html);
        $this->tools->__flashMessage($data);
    }

    function __detailofficial()
    {
        $slug = urldecode($this->input->post('slug'));

        $query = array();
        $data['model'] = $this->excurl->remoteCall($this->__xurl().'profile-official/'.$slug, $this->__xkey(), $query);
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/detailofficial', $data, true);
	
		$data =array('xClass'=>'reqoffcdetail','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
	
	function __detailplayer(){
		$slug = $this->input->post('slug');
        $query = array();
		$data['detailplayer'] = $this->excurl->remoteCall($this->__xurl().'profile/'.$slug, $this->__xkey(), $query);
		
		$html = $this->load->view($this->__theme().'eyeprofile/ajax/detailplayer', $data, true);
	
		$data =array('xClass'=>'reqdetailplayer','xHtml'=> $html);
		$this->tools->__flashMessage($data);
    }
	
	function __playerlist()
    {
        $competition = urldecode($this->input->post('slug'));
         $league =($this->input->post('league') == 'SSB ' ? 'SSB / Akademi Sepakbola' : $this->input->post('league')) ;

        if ($competition == 'Non Liga') {
            $competition = 'SSB / Akademi Sepakbola';
        }

        $page = ($this->session->userdata('pagepemain')) ? $this->session->userdata('pagepemain') : 1;
        if ($this->input->post('paging') == 'next') {
            if ($this->session->userdata('pagetotalpemain') > $this->session->userdata('pagepemain')) {
                $page += 1;
            }
        } else {
           if($this->input->post('paging') == 'back' && $this->session->userdata('pagepemain') >= 2){
                $page -= 1;
            }
        }

        $this->session->set_userdata(array('pagepemain' => $page));

        $query = array('page' => $this->session->userdata('pagepemain'), 'limit' => 10, 'league' => $league, 'competition' => $competition, 'playercount' => false);

        $data['slug'] = $competition;
        $data['league'] = $league;
        $data['playerlist'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), $query);
        $data['playercount'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), array_merge($query, ['playercount' => true]));

        $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/playerlist', $data, true);

        $data = array('xClass' => 'reqplayerlist', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
	
	function __playermostsee()
    {
        $query =['page' => $this->input->post('page'),'limit' => 10,'competition'=> 'Liga Usia Muda','league'=> 'SSB / Akademi Sepakbola'];
        $data['profile'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'eyeprofile/ajax/playerhome', $data, true);

        $data = array('xClass' => 'reqprofilemostsee', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
}
