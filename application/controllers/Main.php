<?php
    class Main extends CI_Controller{
        public function index()
        {
            $player = $this->input->post('player');
            $query = $this->Shootball_model->output($player);
            $data = array('query' =>$query );
            $this->load->view("main",$data);
        }
    }