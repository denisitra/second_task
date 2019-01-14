<?php

namespace FileConverter;


interface IEncode
{
    public function encode(array $content, string $outputFilePath): void;
}