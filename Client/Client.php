<?php

namespace Whmcs\Client;

use Whmcs\Base\WhmcsBase;
use Whmcs\Client\Options\CloseClient;
use Whmcs\Client\Options\DeleteClient;
use Whmcs\Client\Options\GetClients;
use Whmcs\Client\Options\GetClientsAddons;
use Whmcs\Client\Options\GetClientDetails;

class Client extends WhmcsBase {

    /**
     * 
     * @return Whmcs\Client\Options\CloseClient
     */
    public function closeClient() {
        return new CloseClient($this->authentication);
    }

    /**
     * 
     * @return Whmcs\Client\Options\DeleteClient
     */
    public function deleteClient() {
        return new DeleteClient($this->authentication);
    }

    /**
     * 
     * @return Whmcs\Client\Options\GetClients
     */
    public function getClients() {
        return new GetClients($this->authentication);
    }

    /**
     * 
     * @return Whmcs\Client\Options\GetClients
     */
    public function getClientsAddons() {
        return new GetClientsAddons($this->authentication);
    }

    /**
     * 
     * @return Whmcs\Client\Options\GetClientDetails
     */
    public function getClientDetails() {
        return new GetClientDetails($this->authentication);
    }

}
