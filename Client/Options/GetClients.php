<?php

namespace Whmcs\Client\Options;

use Whmcs\Base\Option;

class GetClients extends Option {

    /**
     *
     * @var string 
     */
    protected $action = 'GetClients';

    /**
     *
     * @var integer|null 
     */
    protected $limitstart = null;

    /**
     *
     * @var integer|null; 
     */
    protected $limitstart = null;

    /**
     *
     * @var string|null; 
     */
    protected $search = null;

    /**
     * Record to start at (default = 0)
     * 
     * @optional
     * @param integer $limitstart
     */
    public function setLimitstart($limitstart = 0) {
        $this->limitstart = $limitstart;
    }

    /**
     * Number of records to return (default = 25)
     * 
     * @optional
     * @param integer $limitnum
     */
    public function setLimitnum($limitnum) {
        $this->limitnum = $limitnum;
    }

    /**
     * Can be passed to filter for clients with a name/email matching the term 
     * entered. Please note that full names may not be used.
     * 
     * @optional
     * @param string $searchString
     */
    public function setSearch($searchString) {
        $this->search = $searchString;
    }

}
