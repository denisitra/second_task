<?php

namespace FileConverter;


class EncodeJSON implements IEncode
{
    public function encode(array $content, string $outputFilePath): void
    {
        file_put_contents($outputFilePath, json_encode($content));
    }
}