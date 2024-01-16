<?php

declare(strict_types=1);

namespace Fabricity\Markdown\File;

class File
{
    /**
     * @return open-resource
     */
    public static function open(string $filename)
    {
        /** @var resource $file */
        $file = \fopen($filename, 'w+');

        return $file;
    }
}
