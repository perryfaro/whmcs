<?php

namespace Whmcs\Client\Options;

use Whmcs\Base\Option;

class GetClientDetails extends Option {

    /**
     *
     * @var string 
     */
    protected $action = 'getclientsdetails';

    /**
     *
     * @requiredor clientid/email
     * @var integer|null
     */
    protected $clientid = null;

    /**
     *
     * @requiredor clientid/email
     * @var string|null 
     */
    protected $email = null;
    
    /**
     *
     * @optional
     * @var boolean 
     */
    protected $stats = false;

    /**
     * clientid - the id number of the client
     * 
     * @requiredor clientid/email
     * @param integer $id
     */
    public function setClientId($id) {
        $this->clientid = $id;
    }

    /**
     * email - the email address of the client
     * 
     * @requiredor clientid/email
     * @param string $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }
    
    /**
     * stats 
     * 
     * @optional
     * @param boolean $stats
     */
    public function setStats ($stats) {
        $this->stats = $stats;
    }

}
