<?php
namespace Whmcs\Base;

use Whmcs\Authentication\Authentication;

class WhmcsBase  {
    
    protected $authentication = null;
    
    public function __construct(Authentication $authentication) {
        $this->authentication = $authentication;
    }
}
