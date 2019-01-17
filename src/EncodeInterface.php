<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 17.01.19
 * Time: 14:34
 */

namespace FileConverter;
interface EncodeInterface
{
    public function encode(array $content): void;
}