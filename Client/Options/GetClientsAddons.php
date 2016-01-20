<?php

namespace Whmcs\Client\Options;

use Whmcs\Base\Option;

class GetClientsAddons extends Option {

    /**
     *
     * @var string 
     */
    protected $action = 'getclientsaddons';

    /**
     *
     * @optional
     * @var integer|null
     */
    protected $clientid = null;

    /**
     *
     * @optional
     * @var integer|null
     */
    protected $addonid = null;

    /**
     *
     * @optional
     * @var mixed|null
     */
    protected $serviceid = null;

    /**
     * clientid - the id number of the client
     * 
     * @optional
     * @param integer $id
     */
    public function setClientId($id) {
        $this->clientid = $id;
    }

    /**
     * addonid - The specific addonid you wish to find
     * 
     * @optional
     * @param integer $id
     */
    public function setAddonId($id) {
        $this->addonid = $id;
    }

    /**
     * serviceid - The specific, or comma separated list of, service(s)
     * 
     * @optional
     * @param mixed $id
     */
    public function setServiceId($id) {
        $this->serviceid = $id;
    }

}
