<br />
<?php
defined('BASEPATH') OR exit('No direct textarea access allowed');

class lingmodel extends CI_Model {
    const PI = 3.14;
    private $radius;
    
    public function set_radius($r){
        $this->radius =$r;
    }
    
    public function get_radius(){
        return $this->radius;
    }
    public function hitung_luas(){
        return self::PI * $this->radius * $this->radius;
}
}