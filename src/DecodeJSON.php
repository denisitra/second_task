<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 28.09.18
 * Time: 10:35
 */

namespace FileConverter;


class DecodeJSON implements IDecode
{
    public function decode(\SplFileObject $file): array
    {
        return json_decode($file->current(), true);
    }
}