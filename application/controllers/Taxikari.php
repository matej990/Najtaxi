<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taxikari extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Template');
		$this->load->model('Model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('typography');

	}

	public function index()
        {
            $data['query'] = $this->Model->select_all_data('taxikari');
            $this->load->view('Template/head')  ;
			$this->load->view('Template/nav')  ;
			$this->load->view('Taxikari/Taxikari_view', $data) ;
			$this->load->view('Template/foot')  ;
        }

        public function add() {
               $this->load->model('Model',NULL,TRUE);
			
			   $this->load->view('Taxikari/add_taxikari');
		
        
    }

       public function adding_taxikar() {
               $this->load->library('form_validation');
			$this->form_validation->set_rules('meno','Meno: ','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('priezvisko','Priezvisko: ','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('auto','Auto: ','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('tel','Telefónne číslo: ','trim|required|htmlspecialchars');

        
        if ($this->form_validation->run())
        {
              
            
		$data = array(
			'meno' => $_POST['meno'],
			'priezvisko' => $_POST['priezvisko'],
			'auto' => $_POST['auto'],
			'tel' => $_POST['tel']);
		
		$this->Model->insert_data('taxikari', $data);
		redirect('Taxikari');
}
               else
               {
                  $this->load->helper('form');
            

                  $this->load->view('Taxikari/add_taxikari');
               }
               
               
    }

	public function edit_taxikari() {
        $id = $this->input->post('idTaxikari');
        $data['id'] = $id;

         $data['query'] = $this->Model->get_taxikari($id);
		if(count($data['query']) == 0) die('taxikari nenajdeny');

	    $this->load->view('Taxikari/edit_taxikari', $data);

    }
    
     public function editing_taxikar () 
    { 
		$this->load->model('Model','gen',TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('Meno','Meno: ','trim|required|htmlspecialchars');
		$this->form_validation->set_rules('Priezvisko','Priezvisko: ','trim|required|htmlspecialchars');
		$this->form_validation->set_rules('auto','Auto: ','trim|required|htmlspecialchars');
		$this->form_validation->set_rules('tel','Telefónne číslo: ','trim|required|numeric|htmlspecialchars');
        
        if ($this->form_validation->run())
        {
            $data = array(
              
			'Meno' => $this->input->post('Meno'),
			'Priezvisko' => $this->input->post('Priezvisko'),
			'auto' => $this->input->post('auto'),
			'tel' => $this->input->post('tel'),
            );
            $id = $this->input->post('idTaxikari');
            $this->gen->update_data('idTaxikari',$id,'taxikari',$data);
          redirect('Taxikari');
        }
        else
        {
            $data['idTaxikari'] = $this->input->post('idTaxikari');
           
			$in['Meno'] = $this->input->post('Meno');
			
			$in['Priezvisko'] = $this->input->post('Priezvisko');
			
			$in['auto'] = $this->input->post('auto');
			
			$in['tel'] = $this->input->post('tel');
			
			$data['query'] = $in;
            $this->load->helper('form');
            $this->load->view('Taxikari/edit_taxikari',$data);
        }
        
    }

 public function delete_taxikari() {
        $data['idTaxikari'] = $this->input->post('idTaxikari');
        $this->load->view('Taxikari/delete_taxikari',$data);
    }
    
    public function deleting_taxikari() {
		$id = $this->input->post('idTaxikari');
        $this->Model->delete_data('idTaxikari',$id,'taxikari');
        redirect('Taxikari');
    }
    
}