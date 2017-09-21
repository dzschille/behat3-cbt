<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class FeatureContext extends MinkContext implements SnippetAcceptingContext
{
    /**
     * Initializes context.
     */
    public function __construct()
    {
    }
}
