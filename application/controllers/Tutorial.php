<?php
Class Tutorial extends CI_Controller{
   
    var $API ="";
   
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/sewpad_server/index.php";
    }
   
    // menampilkan data tutorial
    function index(){
        $data['tutorial'] = json_decode($this->curl->simple_get($this->API.'/tutorial'));
        $this->load->view('tutorial/show',$data);
    }
   
    // insert data tutorial
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'idTutorial'    => $this->input->post('idTutorial'),
                'idUser'        => $this->input->post('idUser'),
                'tanggal'       => $this->input->post('tanggal'),
                'komentar_id'   => $this->input->post('komentar_id'),
                'photo_hasil'   => $this->input->post('photo_hasil'),
                'nama_tutorial' => $this->input->post('nama_tutorial'),
                'kat_id'        => $this->input->post('kat_id'));
            $insert =  $this->curl->simple_post($this->API.'/tutorial', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('tutorial');
        }else{
            $data['users'] = json_decode($this->curl->simple_get($this->API.'/users'));
            $this->load->view('tutorial/create',$data);
        }
    }
   
    // edit data tutorial
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'idTutorial'    => $this->input->post('idTutorial'),
                'idUser'        => $this->input->post('idUser'),
                'tanggal'       => $this->input->post('tanggal'),
                'komentar_id'   => $this->input->post('komentar_id'),
                'photo_hasil'   => $this->input->post('photo_hasil'),
                'nama_tutorial' => $this->input->post('nama_tutorial'),
                'kat_id'        => $this->input->post('kat_id'));
            $update =  $this->curl->simple_put($this->API.'/tutorial', $data, array(CURLOPT_BUFFERSIZE => 10));
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('tutorial');
        }else{
            $data['users'] = json_decode($this->curl->simple_get($this->API.'/users'));
            $params = array('idTutorial'=>  $this->uri->segment(3));
            $data['tutorial'] = json_decode($this->curl->simple_get($this->API.'/tutorial',$params));
            $this->load->view('tutorial/update',$data);
        }
    }
   
    // delete data tutorial
    function delete($idTutorial){
        if(empty($idTutorial)){
            redirect('tutorial');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/tutorial', array('idTutorial'=>$idTutorial), array(CURLOPT_BUFFERSIZE => 10));
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('tutorial');
        }
    }
}