
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Step extends REST_Controller {

    public function __construct($config = 'rest')
    {
        parent::__construct($config);
        //Do your magic here
        // $this->load->helper('url','form');
        // $this->load->model('Tutorial_model');
        // $this->load->library('pagination','form_validation');
        $this->load->database();
    }

function postStep(){
    $data = array(
            // 'tutorial_id' => $this->post('tutorial_id'),
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

  function putStep(){
      $idStep = $this->put('idStep');
      $data = array(
            //  'idStep'     => $this->put('idStep'),
            //  'tutorial_id' => $this->put('tutorial_id'),
             'step'   => $this->put('step'),
             'photo' => $this->put('photo')
      );
      $this->db->where('idStep',$idStep);
      $update = $this->db->update('step',$data);

      if ($update) {
        $this->response($data,200);
      }else{
        $this->response(array('status' => 'fail',502));
      }
  }

  function deleteStep(){
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