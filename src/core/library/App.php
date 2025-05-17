<?php

namespace core\library;

use Spatie\Ignition\Ignition;
use DI\Container;
use DI\ContainerBuilder;
use Dotenv\Dotenv;

class App
{
    public readonly Container $container;

    public static function create()
    {
        return new self;
    }

    public function withErrorPage()
    {
        Ignition::make()
            ->setTheme('dark')
            ->shouldDisplayException(env('ENV') === 'development')
            ->register();

        return $this;
    }
    public function withContainer()
    {
        $builder = new ContainerBuilder();
        $this->container = $builder->build();

        return $this;
    }
    public function withEnviromentVariables()
    {
        $dotenv = Dotenv::createImmutable(dirname(__FILE__, 3));
        $dotenv->load();

        return $this;
    }
}
