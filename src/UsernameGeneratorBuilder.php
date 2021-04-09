<?php

namespace PhpArsenal\MythologicalUsernameGenerator;

class UsernameGeneratorBuilder
{
    public static function build(): UsernameGenerator
    {
        return new UsernameGenerator(static::getAbsoluteResourcePath());
    }

    public static function getAbsoluteResourcePath(): string
    {
        return sprintf('%s/Resources/', dirname(__FILE__));
    }
}