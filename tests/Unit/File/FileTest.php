<?php

declare(strict_types=1);

namespace Fabricity\Markdown\Tests\Unit\File;

use Fabricity\Markdown\File\File;
use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    public function testOpen(): void
    {
        $filename = __DIR__.'/test.md';
        $file = File::open($filename);
        $this->assertIsResource($file);
        \unlink($filename);
    }
}
