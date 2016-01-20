<?php

namespace Whmcs\Client\Options;

use Whmcs\Base\Option;

class DeleteClient extends Option {

    /**
     *
     * @var string 
     */
    protected $action = 'deleteclient';

    /**
     *
     * @required
     * @var type 
     */
    protected $clientid = null;

    /**
     * clientid - ID Number of the client to close
     * 
     * @required
     * @param integer $id
     */
    public function setClientId($id) {
        $this->clientid = $id;
    }

}
