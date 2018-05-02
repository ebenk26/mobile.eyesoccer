<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMod extends CI_Model
{
    private function __xurl() { return $this->config->item('xurl'); }
    private function __xkey() { return $this->config->item('xkey'); }
    private function __theme() { return $this->config->item('themes'); }

    function __construct()
    {
        parent::__construct();
    }

    function __trending()
    {
        $query = array('page' => 1, 'limit' => 4, 'sortby' => 'mostview');
        $data['news'] = $this->excurl->remoteCall($this->__xurl() . 'news', $this->__xkey(), $query);
        $data['video'] = $this->excurl->remoteCall($this->__xurl() . 'video', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'home/ajax/trending', $data, true);

        $data = array('xClass' => 'reqtrend', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __match_schedule()
    {
        $data["kemarin"] = get_date("-1");
        $data["hari_ini"] = get_date("+0");
        $data["besok"] = get_date("+1");

        // ===== kemarin
        $query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["kemarin"]["tanggalnya"], 'enddate' => $data["kemarin"]["tanggalnya"]);
        $data['match_yest'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

        // ===== hari ini
        $query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["hari_ini"]["tanggalnya"], 'enddate' => $data["hari_ini"]["tanggalnya"]);
        $data['match_today'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

        // ===== besok
        $query = array('page' => 1, 'limit' => 5, 'sortby' => 'mostview', 'startdate' => $data["besok"]["tanggalnya"], 'enddate' => $data["besok"]["tanggalnya"]);
        $data['match_tomorrow'] = $this->excurl->remoteCall($this->__xurl() . 'event-match', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'home/ajax/match_schedule', $data, true);

        $data = array('xClass' => 'reqmatch', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __klasemen()
    {
        $html = $this->load->view($this->__theme() . 'home/ajax/klasemen', '', true);

        $data = array('xClass' => 'reqklasemen', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }

    function __list_event()
    {
        $data['oke'] = 'oke';

        $html = $this->load->view($this->__theme() . 'home/ajax/klasemen', $data, true);

        $data = array('xClass' => 'reqklasemen', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
	
	public function cek_ip_view($kanal,$id,$ip,$tipe)
	{
	    $query = $this->db->query(" SELECT
	                                    *
	                                FROM
	                                    tbl_view
	                                WHERE
	                                    type_visit  = '$tipe'
	                                    AND
	                                    place_visit = '$kanal'
	                                    AND
	                                    place_id    = '$id'
	                                    AND
	                                    session_ip  = '$ip'
	                                LIMIT
	                                    1
	                                    ")->num_rows();
	    return $query;
	}

	public function set_news_emot($tbl,$kanal,$id,$field)
	{

	    $object = array(
	    			$field => $field + 1,
	    );

	    $query = $this->db->update($tbl, $object, array($kanal.'_id' => $id));

	    return $query;
	}
	function get_id($select_id, $table, $id_md)
    {
        $query = $this->db->query(" SELECT
                                        $select_id
                                    FROM
                                        $table
                                    WHERE
                                        md5($select_id) = '$id_md'
                                        ")->row()->$select_id;
        return $query;
    }
	
	public function set_tbl_view($object)
	{
		$this->db->insert('tbl_view', $object);

        return $this->db->insert_id();
	}
	
	public function get_jumlah_emot($tbl,$id,$field,$kanal)
	{
		$query = $this->db->get_where($tbl, array($kanal.'_id' => $id))->row();
	    return $query;
	}
	
	function __search()
    {
        $query = array('search' => $this->input->post('query'));
        $data['eyenews'] = $this->excurl->remoteCall($this->__xurl() . 'news', $this->__xkey(), $query);
        $data['eyetube'] = $this->excurl->remoteCall($this->__xurl() . 'video', $this->__xkey(), $query);
        $data['player'] = $this->excurl->remoteCall($this->__xurl() . 'profile', $this->__xkey(), $query);
        $data['club'] = $this->excurl->remoteCall($this->__xurl() . 'profile-club', $this->__xkey(), $query);

        $html = $this->load->view($this->__theme() . 'home/ajax/search', $data, true);

        $data = array('xClass' => 'reqsearch', 'xHtml' => $html);
        $this->tools->__flashMessage($data);
    }
	
	function __set_emot()
	{
		$query = array('channel' => $this->input->post('channel'), 'type' => $this->input->post('type'), 'id' => $this->input->post('id'));
        $data['emoticon'] = $this->excurl->remoteCall($this->__xurl() . 'emoticon', $this->__xkey(), $query);
        $data['type'] = $this->input->post('type');
		$data['channel'] = $this->input->post('channel');
		$data['catemo'] = substr($this->input->post('channel'),3);

        $html = $this->load->view($this->__theme() . 'home/ajax/emoticon', $data, true);

        $data = array('xClass' => 'reqemot'.$this->input->post('type'), 'xHtml' => $html);
        $this->tools->__flashMessage($data);
	}
}
