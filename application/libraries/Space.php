<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 include_once APPPATH.'/third_party/spaces/spaces.php';
 
class Space {

    public $space;
 
    public function __construct()
    {
        $key = "xxxxxxxxx";
        $secret = "xxxxxxxxx";
        $space_name = "xxxxxx";
        $region = "xxxxxx";
        
        $this->space = new SpacesConnect($key, $secret, $space_name, $region); 
    }
}

