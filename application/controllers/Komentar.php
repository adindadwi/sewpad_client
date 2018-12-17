<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Komentar extends REST_Controller {

  function __construct($config = 'rest'){
      parent::__construct($config);
      $this->load->database();
  }

  function get(){
    $idKomentar = $this->get('idKomentar');
    if ($idKomentar == '') {
        $komentar = $this->db->get('komentar')->result();

    }else{
        $this->db->where('idKomentar',$idKomentar);
        $komentar = $this->db->get('komentar')->result();
    }
    $this->response($komentar,200);
  }

  function post(){
    $data = array(
            'komentar' => $this->post('komentar')
    );
    $insert = $this->db->insert('komentar',$data);

    if ($insert) {
        $this->response($data,200);
    }else{
         $this->response(array('status' => 'fail',502));
    }
  }

  function put(){
      $idKomentar = $this->put('idKomentar');
      $data = array(
             'komentar'   => $this->put('komentar')
      );
      $this->db->where('idKomentar',$idKomentar);
      $update = $this->db->update('idKomentar',$data);

      if ($update) {
        $this->response($data,200);
      }else{
        $this->response(array('status' => 'fail',502));
      }
  }

  function delete(){
      $idKomentar = $this->get('idKomentar');
      $this->db->where('idKomentar',$idKomentar);
      $delete = $this->db->delete('komentar');

      if ($delete) {
        $this->response(array('status' => 'success'),201);
      }else {
        $this->response(array('status' => 'fail'),502);
      }

  }
}
