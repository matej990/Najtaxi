<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Smena extends CI_Controller {

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
		
		$data['query'] = $this->db->select('*, CONCAT(taxikari.Meno , \' \', taxikari.Priezvisko) as taxikarMeno')

			->join('taxikari', 'taxikari.idTaxikari = smena.idSmena')
			->get('smena');
		$this->load->view('Template/head')  ;
		$this->load->view('Template/nav')  ;
		$this->load->view('Smena/Smena_view', $data) ;
		$this->load->view('Template/foot')  ;
        }

	public function add_smena() {
			$data['taxi'] = $this->Model->get_taxikari_dropdown();
            $this->load->view('smena/add_smena',$data);
    }

    public function adding_smena() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('zaciatok','Začiatok smeny:','trim|required|htmlspecialchars');
		$this->form_validation->set_rules('koniec','Koniec smeny:','trim|required|htmlspecialchars');
		$this->form_validation->set_rules('Taxikari_idTaxikari','Taxikár:','trim|required|htmlspecialchars');

        
        if ($this->form_validation->run())
        {
              
            
		$data = array(
		'zaciatok' => $_POST['zaciatok'],
		'koniec' => $_POST['koniec'],
		'Taxikari_idTaxikari' => $_POST['Taxikari_idTaxikari']
		);
		$this->Model->insert_data('smena', $data);
		redirect('Smena');
}
               else
               {
                  $this->load->helper('form');
                 $data['taxi'] = $this->Model->get_taxikari_dropdown();
                 $this->load->view('smena/add_smena',$data);
               }
               
               }
	
	public function edit_smena() {
		$data['taxi'] = $this->Model->get_taxikari_dropdown();
        $id = $this->input->post('idSmena');
        $data['id'] = $id;
       
	   
        $data['query'] = $this->Model->get_smena($id);
		if(count($data['query']) == 0) die('smena nenajdena');
        $this->load->view('Smena/edit_smena',$data);
    }
	
    public function editing_smena() 
    { 
        $this->load->model('Model','gen',TRUE);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('zaciatok','Začiatok smeny:','trim|required|htmlspecialchars');
        $this->form_validation->set_rules('koniec','Koniec smeny:','trim|required|htmlspecialchars');
        $this->form_validation->set_rules('Taxikari_idTaxikari','Taxikár:','trim|required|htmlspecialchars');

        if ($this->form_validation->run())
        {
            $data = array(
                'zaciatok' => $this->input->post('zaciatok'),
                'koniec' => $this->input->post('koniec'),
                'Taxikari_idTaxikari' => $this->input->post('Taxikari_idTaxikari'),

            );
            $id = $this->input->post('idSmena');
            $this->gen->update_data('idSmena',$id,'smena',$data);
          redirect('Smena');
        }
        else
        {
            $data['idSmena'] = $this->input->post('idSmena');
           
            $in['zaciatok'] = $this->input->post('zaciatok');
 
            $in['koniec'] = $this->input->post('koniec');
 
             $in['Taxikari_idTaxikari'] = $this->input->post('Taxikari_idTaxikari');
             

			$data['query'] = $in;
            $this->load->helper('form');
            $this->load->view('Smena/edit_smena',$data);
        }
        
    }

	public function delete_smena() {
        $data['idSmena'] = $this->input->post('idSmena');
        $this->load->view('Smena/delete_smena',$data);
    }
    
    public function deleting_smena() {
        $id = $this->input->post('idSmena');
        $this->Model->delete_data('idSmena',$id,'Smena');
        redirect('Smena');
    }
    
}
