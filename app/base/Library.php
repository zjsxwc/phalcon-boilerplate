<?php

namespace Base;

use \Phalcon\DI as DI;

class Library extends \Phalcon\Mvc\User\Component
{
    public function getService( $service )
    {
        return $this->getDI()->get( $service );
    }
}