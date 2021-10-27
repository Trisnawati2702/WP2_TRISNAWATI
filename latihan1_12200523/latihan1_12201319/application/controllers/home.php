<?php
defined('BASEPATH') OR exit('No direct textarea access allowed');

class Home extends CI_Controller {

 public function index()
 {
  if(isset($_POST['btnsubmit'])){
   $this->load->model('lingmodel');
   $model = $this->lingmodel;
   $radius = $_POST['jari2'];
   $model->set_radius($radius);
   $this->load->view('output', array ('model'=>$model));
}else{
    $this->load->view('input');

}
}
}
?>