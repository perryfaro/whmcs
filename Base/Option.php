<?php

namespace Whmcs\Base;

use Prototypeblocks\Reflection\Annotations;
use Whmcs\HttpClient\Curl;

class Option extends WhmcsBase {

    public function request() {

        $refclass = new \ReflectionClass($this);
        $post = array();
        foreach ($refclass->getProperties() as $property) {
            $annotations = new Annotations;
            $annotation = $annotations->getAnnotations('property', get_called_class(), $property->name);
            $name = $property->name;
            if (isset($annotation['required']) && $this->{$name} === null) {
                throw new Exception($name . ' is a required field');
            }

            if ($this->{$name} !== null) {
                $post[$name] = $this->{$name};
            }
        }
        return Curl::doRequest($this->authentication, $this->action, $post);
    }

}
