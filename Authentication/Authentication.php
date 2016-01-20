<?php

namespace Whmcs\Authentication;

class Authentication {

    protected $url = false;
    protected $username = false;
    protected $password = false;

    /**
     * 
     * @return string
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * 
     * @return string
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * 
     * @return string
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * 
     * @param string $url
     * @return \Whmcs\Authentication\Authentication
     */
    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    /**
     * 
     * @param string $username
     * @return \Whmcs\Authenticate\Authenticate
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * 
     * @param string $password
     * @return \Whmcs\Authenticate\Authenticate
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

}
