<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit\Framework\Assert as PHPUnit;
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

      PHPUnit::assertSame($arg1,$url, "False redirection! Should redirect to'$arg1'");
    }
}