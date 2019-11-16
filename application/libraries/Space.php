<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 include_once APPPATH.'/third_party/spaces/spaces.php';
 
class Space {

    public $space;
 
    public function __construct()
    {
        $key = "YOUR_KEY";
        $secret = "YOUR_SECRET";
        $space_name = "SPACE_NAME";
        $region = "REGION";
        
        $this->space = new SpacesConnect($key, $secret, $space_name, $region); 
    }
}

