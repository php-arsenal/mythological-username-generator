<?php

namespace PhpArsenal\MythologicalUsernameGenerator\Tests\Unit;

use PhpArsenal\MythologicalUsernameGenerator\UsernameGenerator;
use PhpArsenal\MythologicalUsernameGenerator\UsernameGeneratorBuilder;
use PHPUnit\Framework\TestCase;

class UsernameGeneratorBuilderTest extends TestCase
{
    public function testBuild(): void
    {
        $this->assertInstanceOf(UsernameGenerator::class, UsernameGeneratorBuilder::build());
    }
}
