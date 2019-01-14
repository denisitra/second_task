<?php


namespace FileConverter;


class DecodeJSON implements IDecode
{
    public function decode(\SplFileObject $file): array
    {
        return json_decode($file->current(), true);
    }
}