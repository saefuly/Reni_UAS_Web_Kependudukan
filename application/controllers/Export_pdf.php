<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export_pdf extends CI_Controller {


	   function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('user_model');
       // $this->load->model('web_app_model');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function cetakpdf()
	{

		$pdfFilePath = FCPATH."tests.pdf";

	//	echo  $pdfFilePath;
		ini_set('memory_limit','32M'); 
			
		//$data['user'] = $this->m_account->list_user()->result();
      /*	 $data['user'] = $this->m_account->list_user()->result();
        $html = $this->load->view('account/v_dashboard', $data);
		$pdf = $this->pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, 'I'); */
		//$this->load->view('welcome_message');
		$data['user'] = $this->user_model->list_user_login()->result();
        $sumber = $this->load->view('list_user_pdf.php', $data,TRUE);
        $html = $sumber;
 
 	
        $pdfFilePath = "hasilreport.pdf";
     

        $pdf = $this->pdf->load();
        $pdf->AddPage('L');
        $pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "I");
        exit();

	}


	public function cetakpdf_penduduk()
	{

		$pdfFilePath = FCPATH."tests.pdf";

	//	echo  $pdfFilePath;
		ini_set('memory_limit','32M'); 
			
		//$data['user'] = $this->m_account->list_user()->result();
      /*	 $data['user'] = $this->m_account->list_user()->result();
        $html = $this->load->view('account/v_dashboard', $data);
		$pdf = $this->pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, 'I'); */
		//$this->load->view('welcome_message');
		$data['user'] = $this->user_model->list_user()->result();
        $sumber = $this->load->view('list_penduduk_pdf.php', $data,TRUE);
        $html = $sumber;
 
 	
        $pdfFilePath = "hasilreport.pdf";
     

        $pdf = $this->pdf->load();
        $pdf->AddPage('L');
        $pdf->WriteHTML($stylesheet, 1);
        $pdf->WriteHTML($html);
        $pdf->Output($pdfFilePath, "I");
        exit();

	}
}



