<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Tutorial extends REST_Controller {

    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        //Do your magic here
        // $this->load->helper('url','form');
        // $this->load->model('Tutorial_model');
        // $this->load->library('pagination','form_validation');
        $this->load->database();
    }
    
    function index_getUser(){
    $id = $this->get('id');
    if ($id == '') {
        $home = $this->db->get('users')->result();
    }else{
        $this->db->where('id',$id);
        $home = $this->db->get('users')->result();
    }
    $this->response($contact,200);
  }

   function index_postUser(){
    $data = array(
            'username'   => $this->post('username'),
            'email' => $this->post('email'),
            'password' => $this->post('password'),
            'company' => $this->post('company'),
            'photo ' => $this->post('photo')
    );
    $insert = $this->db->insert('users',$data);
    if ($insert) {
        $this->response($data,200);
    }else{
         $this->response(array('status' => 'fail',502));
    }
  }

  function index_putUser(){
      $id = $this->put('id');
      $data = array(
            'username'   => $this->put('username'),
            'email' => $this->put('email'),
            'password' => $this->put('password'),
            'company' => $this->put('company'),
            'photo ' => $this->put('photo')
      );
      $this->db->where('id',$id);
      $update = $this->db->update('users',$data);

      if ($update) {
        $this->response($data,200);
      }else{
        $this->response(array('status' => 'fail',502));
      }
  }

  function index_deleteUser(){
      $id = $this->get('id');
      $this->db->where('id',$id);
      $delete = $this->db->delete('users');

      if ($delete) {
        $this->response(array('status' => 'success'),201);
      }else {
        $this->response(array('status' => 'fail'),502);
      }

  }    

  // function index_getTutorial(){
  //   $id = $this->get('id');
  //   if ($id == '') {
  //       $contact = $this->db->get('telephone')->result();

  //   }else{
  //       $this->db->where('id',$id);
  //       $contact = $this->db->get('telephone')->result();
  //   }
  //   $this->response($contact,200);
  // }

   function index_postTutorial(){
    $data = array(
            // 'idUser' => $this->post('idUser');
            'nama_tutorial'  => $this->post('nama_tutorial'),
            'kat_id' => $this->post('kat_id'),
            'photo_hasil' => $this->post('photo_hasil'),
    );
    $insert = $this->db->insert('tutorial',$data);
    if ($insert) {
        $this->response($data,200);
    }else{
         $this->response(array('status' => 'fail',502));
    }
  }

  function index_putTutorial(){
      $idUser = $this->put('idUser');
      $data = array(
            'idUser' => $this->put('idUser');
            'nama_tutorial'  => $this->put('nama_tutorial'),
            'kat_id' => $this->put('kat_id'),
            'photo_hasil' => $this->put('photo_hasil'),
      );
      $this->db->where('id',$id);
      $update = $this->db->update('tutorial',$data);

      if ($update) {
        $this->response($data,200);
      }else{
        $this->response(array('status' => 'fail',502));
      }
  }

  function index_deleteTutorial(){
      $idUser = $this->get('idUser');
      $this->db->where('idUser',$idUser);
      $delete = $this->db->delete('tutorial');

      if ($delete) {
        $this->response(array('status' => 'success'),201);
      }else {
        $this->response(array('status' => 'fail'),502);
      }

  }

  // function index_getStep(){
  //   $id = $this->get('id');
  //   if ($id == '') {
  //       $contact = $this->db->get('telephone')->result();

  //   }else{
  //       $this->db->where('id',$id);
  //       $contact = $this->db->get('telephone')->result();
  //   }
  //   $this->response($contact,200);
  // }

   function index_postStep(){
    $data = array(
            'tutorial_id' => $this->post('tutorial_id'),
            'step'   => $this->post('step'),
            'photo' => $this->post('photo')
    );
    $insert = $this->db->insert('step',$data);

    if ($insert) {
        $this->response($data,200);
    }else{
         $this->response(array('status' => 'fail',502));
    }
  }

  function index_putStep(){
      $idStep = $this->put('idStep');
      $data = array(
             'idUser'     => $this->put('idUser'),
             'tutorial_id' => $this->put('tutorial_id'),
             'step'   => $this->put('step'),
             'photo' => $this->put('photo')
      );
      $this->db->where('id',$id);
      $update = $this->db->update('step',$data);

      if ($update) {
        $this->response($data,200);
      }else{
        $this->response(array('status' => 'fail',502));
      }
  }

  function index_deleteStep(){
      $idStep = $this->get('idStep');
      $this->db->where('idStep',$idStep);
      $delete = $this->db->delete('step');

      if ($delete) {
        $this->response(array('status' => 'success'),201);
      }else {
        $this->response(array('status' => 'fail'),502);
      }

  }

}