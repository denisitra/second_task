<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 28.09.18
 * Time: 10:36
 */

namespace FileConverter;


class EncodeJSON implements IEncode
{
    public function encode(array $content, string $outputFilePath): void
    {
        file_put_contents($outputFilePath, json_encode($content));
    }
}