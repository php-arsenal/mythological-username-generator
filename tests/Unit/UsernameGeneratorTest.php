<?php

namespace PhpArsenal\MythologicalUsernameGenerator\Tests\Unit;

use PhpArsenal\MythologicalUsernameGenerator\UsernameGenerator;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class UsernameGeneratorTest extends TestCase
{
    use MatchesSnapshots;

    private UsernameGenerator $usernameGenerator;

    public function setUp(): void
    {
        $resourceDir = preg_replace('/tests\/Unit/i', 'src', dirname(__FILE__)).'/Resources';
        $this->usernameGenerator = new UsernameGenerator($resourceDir);
    }

    public function testGenerateUsername(): void
    {
        $seed = 451511141421;
        $username = $this->usernameGenerator->generateUsername($seed);

        $this->assertMatchesJsonSnapshot([$username]);
    }
}
