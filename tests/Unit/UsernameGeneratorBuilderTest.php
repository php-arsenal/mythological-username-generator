<?php

namespace PhpArsenal\MythologicalUsernameGeneratorBundle\Tests\Unit;

use PhpArsenal\MythologicalUsernameGeneratorBundle\Factory\UsernameGeneratorFactory;
use PhpArsenal\MythologicalUsernameGeneratorBundle\UsernameGenerator;
use PHPUnit\Framework\TestCase;

class UsernameGeneratorBuilderTest extends TestCase
{
    public function testBuild(): void
    {
        $this->assertInstanceOf(UsernameGenerator::class, UsernameGeneratorFactory::build());
    }
}
