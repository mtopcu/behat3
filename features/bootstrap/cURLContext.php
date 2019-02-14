<?php

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert as PHPUnit;


/**
 * cURL Context that are used for testing to create http requests with headers.
 */
class cURLContext implements Context
{
    private $_frontend_url;

    public function __construct(array $parameters)
    {
        // do subcontext initialization
        $this->_frontend_url = $parameters["frontend_url"];
    }

//
// Place your definition and hook methods here:
//

}

