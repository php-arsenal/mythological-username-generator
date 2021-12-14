<?php

namespace PhpArsenal\MythologicalUsernameGeneratorBundle\Factory;

use PhpArsenal\MythologicalUsernameGeneratorBundle\UsernameGenerator;

class UsernameGeneratorFactory
{
    public static function build(): UsernameGenerator
    {
        return new UsernameGenerator(__DIR__ . '../Resources');
    }
}