<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 28.09.18
 * Time: 10:33
 */

namespace FileConverter;


interface IEncode
{
    public function encode(array $content, string $outputFilePath): void;
}