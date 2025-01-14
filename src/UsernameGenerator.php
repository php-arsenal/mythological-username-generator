<?php

namespace PhpArsenal\MythologicalUsernameGeneratorBundle;

class UsernameGenerator
{
    private const ADJECTIVES_FILE_PATH = 'adjectives.txt';
    private const GREEK_NAMES_FILE_PATH = 'greek_names.txt';

    /** @var string */
    private $absoluteResourcePath;

    /**
     * @codeCoverageIgnore
     */
    public function __construct(string $absoluteResourcePath)
    {
        $this->absoluteResourcePath = $absoluteResourcePath;
    }

    public function generateUsername(?int $seed = null): string
    {
        if($seed) {
            srand($seed);
        }

        $username = vsprintf('%s%s%s', [
            $this->getRandomLineFromWordFile(static::ADJECTIVES_FILE_PATH),
            $this->getRandomLineFromWordFile(static::GREEK_NAMES_FILE_PATH),
            rand(1, 99)
        ]);

        return preg_replace("/[^a-z0-9]/i", '', $username);
    }

    private function getRandomLineFromWordFile(string $resourceFileName): string
    {
        // todo: add cache or make some other method to load
        $lines = file($this->getFullResourcePath($resourceFileName));

        return $lines[array_rand($lines)];
    }

    public function getFullResourcePath(string $relativePath): string
    {
        return sprintf('%s/%s', $this->absoluteResourcePath, $relativePath);
    }
}
