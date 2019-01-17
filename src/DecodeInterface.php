<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 17.01.19
 * Time: 14:33
 */

namespace FileConverter;
interface DecodeInterface
{
    public function decode(\SplFileObject $file): array;
}