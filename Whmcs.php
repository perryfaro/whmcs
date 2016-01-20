<?php

namespace Whmcs;

use Whmcs\Authentication\Authentication;
use Whmcs\Client\Client;

class Whmcs {

    private $authentication = null;

    public function __construct(Authentication $authentication) {
        $this->authentication = $authentication;
    }

    /**
     * 
     * @return Whmcs\Client\Client
     */
    public function client() {
        return new Client($this->authentication);
    }

}
