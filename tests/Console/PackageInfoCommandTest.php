<?php

class PackageInfoCommandTest extends SmartyTestCase
{
    /** @var \Ytake\LaravelSmarty\Console\PackageInfoCommand */
    protected $command;
    protected function setUp(): void
    {
        parent::setUp();
        $this->command = new \Ytake\LaravelSmarty\Console\PackageInfoCommand;
        $this->command->setLaravel(new MockApplication());
    }
    public function testInstance(): void
    {
        $this->assertInstanceOf("Ytake\LaravelSmarty\Console\PackageInfoCommand", $this->command);
    }
    public function testCommand(): void
    {
        $this->command->run(new \Symfony\Component\Console\Input\ArrayInput([]), new \Symfony\Component\Console\Output\NullOutput);
        $this->assertSame("Information about ytake/laravel-smarty", $this->command->getDescription());
        $this->assertSame("ytake:smarty-package-info", $this->command->getSynopsis());
    }
}