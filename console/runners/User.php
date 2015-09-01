<?php

namespace console\runners;

abstract class User extends Runner
{
    /** @var \dektrium\user\Finder */
    protected $finder;
    
    public function __construct(\dektrium\user\Finder $finder, $config = array())
    {
        $this->finder = $finder;
        parent::__construct($config);
    }
}