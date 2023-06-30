<?php

class Riwayat extends CI_Controller
{
    public function index()
	{
		# code...
        // passing data from controller to view
        $data['sma'] = "SMA Katolik Untung Suropati Sidoarjo";
        $data['tahun_sma'] = '2017 - 2020';
        $data['kuliah'] = 'S1 Informatika UPN Veteran Jawa Timur';
        $data['tahun_kuliah'] = '2020 - 2024';

        $data['organisasi1'] = 'Divisi Bahasa UKM Oni-Giri 2020-2021 UPNVJT';
        $data['organisasi2'] = 'Divisi Edu ILC UPNVJT';
        $data['organisasi3'] = 'Wakil Ketua Umum UKM Oni-Giri 2021-2022 UPNVJT';
        $data['thn_organisasi1'] = 'Februari 2021';
        $data['thn_organisasi2'] = 'Mei 2021';
        $data['thn_organisasi3'] = 'Januari 2022';
                
		$this->load->view('riwayat', $data);
	}
}
