<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EyeventMod extends CI_Model {

    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
	parent::__construct();
    }

    function __match_schedule()
    {
        $page = ($this->input->post('page') != NULL) ? $this->input->post('page') : "";
        $slug = ($this->input->post('slug') != NULL) ? $this->input->post('slug') : "";
        $data['all_liga'] = $this->get_all_liga();

        $liga = "";
        if ($slug != "")
        {
            $query = array('page' => 1, 'limit' => 6, 'related' => 'true');
            $data['liga'] = $this->excurl->remoteCall($this->__xurl().'event/'.$slug, $this->__xkey(), $query);
            $liga = json_decode($data['liga'])->data;
            $liga = $liga->title;
        }
        

        $data["kemarin_lusa"] = get_date("-2");
    	$data["kemarin"] = get_date("-1");
    	$data["hari_ini"] = get_date("+0");
        $data["besok"] = get_date("+1");
    	$data["lusa"] = get_date("+2");

        // ===== kemarin lusa
        $query = array('page' => 1, 'limit' => 100, 'sortby' => 'mostview', 'startdate' => $data["kemarin_lusa"]["tanggalnya"], 'enddate' => $data["kemarin_lusa"]["tanggalnya"], 'event' => $liga);
        $data['match_2yest'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	// ===== kemarin
    	$query = array('page' => 1, 'limit' => 100, 'sortby' => 'mostview', 'startdate' => $data["kemarin"]["tanggalnya"], 'enddate' => $data["kemarin"]["tanggalnya"], 'event' => $liga);
    	$data['match_yest'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	// ===== hari ini
    	$query = array('page' => 1, 'limit' => 100, 'sortby' => 'mostview', 'startdate' => $data["hari_ini"]["tanggalnya"], 'enddate' => $data["hari_ini"]["tanggalnya"], 'event' => $liga);
    	$data['match_today'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

    	// ===== besok
        $query = array('page' => 1, 'limit' => 100, 'sortby' => 'mostview', 'startdate' => $data["besok"]["tanggalnya"], 'enddate' => $data["besok"]["tanggalnya"], 'event' => $liga);
        $data['match_tomorrow'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

        // ===== lusa
    	$query = array('page' => 1, 'limit' => 100, 'sortby' => 'mostview', 'startdate' => $data["lusa"]["tanggalnya"], 'enddate' => $data["lusa"]["tanggalnya"], 'event' => $liga);
    	$data['match_lusa'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);

        if ($page == "eyevent-result") 
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/result', $data, true);
        }
        else
        if ($page == "eyevent-schedule") 
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/schedule', $data, true);
        }
        else
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/match_schedule', $data, true);
        }
    	
    	
    	$data = array('xClass' => 'reqmatch', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __klasemen()
    {
    	$html = $this->load->view($this->__theme().'eyevent/ajax/klasemen', '', true);
    	
    	$data = array('xClass' => 'reqklasemen', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __event_list()
    {
        $page = $this->input->post('page');
        $limit = $this->input->post('limit');

    	$query = array('page' => 1, 'limit' => $limit, 'sortby' => 'mostview', 'category' => '');
    	$data['event_list'] = $this->excurl->remoteCall($this->__xurl().'event', $this->__xkey(), $query);

        if ($page == 'home')
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/home_event_list', $data, true);            
        }
        else
        {
            $html = $this->load->view($this->__theme().'eyevent/ajax/event_list', $data, true);
        }

    	
    	$data = array('xClass' => 'reqevent', 'xHtml' => $html);
    	$this->tools->__flashMessage($data);
    }

    function __event_detail()
    {
        $data['slug'] = $this->input->post("slug");
        
        $query = array('page' => 1, 'limit' => 6, 'related' => 'true');
        $data['detail'] = $this->excurl->remoteCall($this->__xurl().'event/'.$data['slug'], $this->__xkey(), $query);
        
        $html = $this->load->view($this->__theme().'eyevent/ajax/detail_vent', $data, true);
        
        $data = array('xClass' => 'reqdetail', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    public function get_all_jadwal($tanggalnya,$liganya)
    {
        $this->db->select(' a.score_a,
                            a.score_b,
                            a.jadwal_pertandingan,
                            a.lokasi_pertandingan,
                            a.live_pertandingan,
                            c.club_id as club_id_a,
                            d.club_id as club_id_b,
                            c.logo as logo_a,
                            d.logo as logo_b,
                            c.name as club_a,
                            d.name as club_b,
                            c.url as url_a,
                            d.url as url_b,
                            b.title as kompetisi
                            ');

        $this->db->from('tbl_jadwal_event AS a');

        $this->db->join('tbl_event AS b', 'b.id_event=a.id_event', 'LEFT');
        $this->db->join('tbl_club AS c', 'c.club_id=a.tim_a', 'INNER');
        $this->db->join('tbl_club AS d', 'd.club_id=a.tim_b', 'INNER');

        $this->db->where('a.jadwal_pertandingan >=', $tanggalnya.' 00:00:01');
        $this->db->where('a.jadwal_pertandingan <=', $tanggalnya.' 23:59:59');
        
        if ($liganya != null)
        {
            $this->db->where('a.id_event', $liganya);
        }

        $this->db->order_by('a.jadwal_pertandingan', 'desc');

        $query = $this->db->get()->result_array();

        return $query;
    }

    function __pick_match()
    {
        $tgl = $this->input->post('date');
        $data['txt_tgl'] = $this->input->post('txtdate');

        // $data['jdwl'] = $this->get_all_jadwal($tgl,null);

        $query = array('page' => 1, 'limit' => 10, 'sortby' => 'mostview', 'startdate' => $tgl, 'enddate' => $tgl);
        $data['jdwl'] = $this->excurl->remoteCall($this->__xurl().'event-match', $this->__xkey(), $query);
        
        $jdwl = json_decode($data['jdwl']);

        if ($jdwl->data)
        {
            if ($this->input->post('page') == "hasil")
            {
                $body = $this->load->view($this->__theme().'eyevent/ajax/body-result', $data,TRUE); 
            }
            else
            {
                $body = $this->load->view($this->__theme().'eyevent/ajax/body-schedule', $data,TRUE); 
            }
                    
        }
        else
        {
            if ($this->input->post('page') == "hasil")
            {
                $body = "<table class='jadwalhasil'>
                            <thead>
                               <tr>
                                   <th colspan='3'>".
                                       $data["txt_tgl"]."
                                   </th>
                               </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 align='center'>Tidak ada pertandingan pada tanggal ini</h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        ";
            }
            else
            {
                $body = "<div class='container bg-g'>
                            <div class='t-tab'>
                                <div id='ajax-tgl-jadwal'>
                                    ".$data["txt_tgl"]."
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 align='center'>Tidak ada pertandingan pada tanggal ini</h2>
                        </div>
                        ";
            }
            
        }

        $data = array('xData' => true, 'xClass' => 'body-jp', 'xHtml' => $body);
        $this->tools->__flashMessage($data);
    }

    public function get_all_liga()
    {
        $this->db->select('id_event,title');
        $this->db->from('tbl_event');
        $this->db->where('id_event', '6');
        $this->db->or_where('id_event', '16');
        $this->db->or_where('id_event', '18');
        $this->db->or_where('id_event', '19');
        $this->db->or_where('id_event', '20');
        $this->db->or_where('id_event', '34');
        $this->db->or_where('id_event', '57');
        $this->db->or_where('id_event', '58');
        $this->db->or_where('id_event', '74');
        $this->db->or_where('id_event', '75');
        $this->db->or_where('id_event', '89');
        $this->db->or_where('id_event', '92');

        $query = $this->db->get()->result_array();

        return $query;
    }

}
