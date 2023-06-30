<?php

class Keterampilan extends CI_Controller
{
    public function index()
	{
		# code...
        // passing data from controller to view
        $data['keterampilan1'] = "HTML";
        $data['keterampilan2'] = "CSS";
        $data['keterampilan3'] = "JavaScript";
        $data['keterampilan4'] = "PHP";
        $data['keterampilan5'] = "React JS";
        $data['keterampilan6'] = "Git & Github";
                
		$this->load->view('keterampilan', $data);
	}
}