<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{

    /**
     * @var Behat\MinkExtension\Context\MinkContext
     */
    private $mink;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /** @BeforeScenario */
    public function scenarioPrep(BeforeScenarioScope $scope)
    {
        $this->mink = $scope->getEnvironment()->getContext('Behat\MinkExtension\Context\MinkContext');
        $this->mink->visit('/delete-test-users');
    }
}
