<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template
{
    function Template() {
        $this->ci =& get_instance(); //kvázi konštruktor na získanie inštancie
    }
    
    function zobrazenie($stranka, $data=NULL) {
        $this->Template();
        $this->ci->load->view('Template/01_head');
$this->ci->load->view('Template/01_nav');
        $this->ci->load->view($stranka,$data);
        $this->ci->load->view('Template/01_footer');
    }
}