<?php

namespace Base;

class Action extends \Phalcon\Mvc\User\Component
{
    public function getService( $service )
    {
        return $this->getDI()->get( $service );
    }
}