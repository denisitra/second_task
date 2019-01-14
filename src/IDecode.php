<?php


namespace FileConverter;


interface IDecode
{
    public function decode(\SplFileObject $file): array;
}