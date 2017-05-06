<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cesta extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('Template');
		$this->load->library('form_validation');
		$this->load->model('Model');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('typography');
	}

	public function index()
        {
		$data['query'] = $this->Model->select_all_cesta('cesta');
		$this->load->view('Template/head')  ;
		$this->load->view('Template/nav')  ;
		$this->load->view('Cesta/Cesta_view', $data) ;
		$this->load->view('Template/foot')  ;
        }

   public function add_cesta() {
               $data['cesta'] = $this->Model->get_cesta_dropdown();
               $this->load->view('Cesta/add_cesta',$data);
    }

       public function adding_cesta() {
            $this->load->library('form_validation');
			$this->form_validation->set_rules('Mesto','Začiatok trasy:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('Ulica','Koniec trasy:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('Mesto_ciel','Cieľové mesto:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('Ulica_ciel','Cieľová ulica:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('cena','Cena:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('najazdeneKm','najazdené km:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('Zakaznik_kontakt','Zákazník kontakt:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('datum','Dátum:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('Smena_idSmena','Taxikár:','trim|required|htmlspecialchars');


        
        if ($this->form_validation->run())
        {
              
            
		$data = array(
		'Mesto' => $_POST['Mesto'],
		'Ulica' => $_POST['Ulica'],
		'Mesto_ciel' => $_POST['Mesto_ciel'],
		'Ulica_ciel' => $_POST['Ulica_ciel'],
		'cena' => $_POST['cena'],
		'najazdeneKm' => $_POST['najazdeneKm'],
		'Zakaznik_kontakt' => $_POST['Zakaznik_kontakt'],
		'datum' => $_POST['datum'],
		'Smena_idSmena' => $_POST['Smena_idSmena']
		);
		$this->Model->insert_data('cesta', $data);
		redirect('Cesta');
}
               else
               {
                  $this->load->helper('form');
                 $data['cesta'] = $this->Model->get_cesta_dropdown();
                 $this->load->view('Cesta/add_cesta',$data);
               }
               
               
    }
public function edit_cesta() {
		$data['cesta'] = $this->Model->get_cesta_dropdown();
        $id = $this->input->post('idCesta');
        $data['id'] = $id;
       
        $data['query'] = $this->Model->get_cesta($id);
		if(count($data['query']) == 0) die('cesta nenajdena');
        $this->load->view('Cesta/edit_cesta',$data);
    }
    
     public function editing_cesta() 
    { 
			$this->form_validation->set_rules('Mesto','Mesto:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('Ulica','Ulica:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('Mesto_ciel','Cieľové mesto:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('Ulica_ciel','Cieľová ulica:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('cena','Cena:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('najazdeneKm','najazdené km:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('Zakaznik_kontakt','Zákazník kontakt:','trim|required|htmlspecialchars');
			$this->form_validation->set_rules('datum','Dátum:','trim|required|htmlspecialchars');
            $this->form_validation->set_rules('Smena_idSmena','Smena:','trim|required|htmlspecialchars');
        
        if ($this->form_validation->run())
        {
            $data = array(
                'Mesto' => $_POST['Mesto'],
				'Ulica' => $_POST['Ulica'],
				'Mesto_ciel' => $_POST['Mesto_ciel'],
				'Ulica_ciel' => $_POST['Ulica_ciel'],
				'cena' => $_POST['cena'],
				'najazdeneKm' => $_POST['najazdeneKm'],
				'Zakaznik_kontakt' => $_POST['Zakaznik_kontakt'],
				'datum' => $_POST['datum'],
				'Smena_idSmena' => $_POST['Smena_idSmena']
			);
			
            $id = $this->input->post('idCesta');
            $this->Model->update_data('idCesta',$id,'cesta',$data);
          redirect('Cesta');
        }
        else
        {
            $data['id'] = $this->input->post('idCesta');
           
            $in['Mesto'] = $this->input->post('Mesto');
 
			$in['Ulica'] = $this->input->post('Ulica');
			
			$in['Mesto_ciel'] = $this->input->post('Mesto_ciel');
			
			$in['Ulica_ciel'] = $this->input->post('Ulica_ciel');
			
			$in['cena'] = $this->input->post('cena');
			
			$in['najazdeneKm'] = $this->input->post('najazdeneKm');
			
			$in['Zakaznik_kontakt'] = $this->input->post('Zakaznik_kontakt');
			
			$in['datum'] = $this->input->post('datum');
			
			// $in['cesta'] = $this->input->post('Smena_idSmena');
     
	 

			$data['query'] = $in;
			$data['cesta'] = $this->input->post('Smena_idSmena');
            $this->load->helper('form');
            $this->load->view('Cesta/edit_cesta', $data);
        }
        
    }

 public function delete_cesta() {
        $data['idCesta'] = $this->input->post('idCesta');
        $this->load->view('Cesta/delete_cesta',$data);
    }
    
    public function deleting_cesta() {
        $id = $this->input->post('idCesta');
        $this->Model->delete_data('idCesta',$id,'cesta');
        redirect('Cesta');
    }
    
}
