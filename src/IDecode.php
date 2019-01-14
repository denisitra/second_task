<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 28.09.18
 * Time: 10:21
 */

namespace FileConverter;


interface IDecode
{
    public function decode(\SplFileObject $file): array;
}