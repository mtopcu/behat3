<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;
/**
 * Defines application features from the specific context.
 */

class FeatureContext extends MinkContext
{
    private $_parameters;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct($parameters)
    {
        $this->_parameters = $parameters;
    }

    /**
     * @Then I must see :arg1
     */
    public function iMustSee($text)
    {
        $this->assertSession()->pageTextContains($this->fixStepArgument($text));
    }

    /**
     * @Then I should get redirected to :arg1
     */
    public function iShouldGetRedirectedTo($arg1)
    {
        $url = $this->getSession()->getCurrentUrl();

        if (strpos($url, $arg1) === false) {
            throw new Exception('Failure: Invalid redirection');
        }
    }
}
