<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Validate extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this -> variables['login'] = "true";
        if (!isset($login) || $login != true) {
            $this -> variables['login'] = "false";
        }
        $this -> load -> vars($this -> variables);
    }

    function add() {
        $this -> form_validation -> set_rules('manga_name', 'Manga name', 'trim|min_length[3]|max_length[255]|xss_clean');
        $this -> form_validation -> set_rules('manga_author', 'Manga author', 'trim|min_length[3]|max_length[255]|xss_clean');
        $this -> form_validation -> set_rules('manga_recent_epi', 'Recent episode', 'trim|min_length[3]|max_length[255]|xss_clean');
        $this -> form_validation -> set_rules('manga_read_epi', 'Latest read episode', 'trim|min_length[3]|max_length[255]|xss_clean');
        if($this->form_validation->run()==true){
        }else{
            redirect('main/add');
        }
    }

}
