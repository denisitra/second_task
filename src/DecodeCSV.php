<?php

namespace FileConverter;


class DecodeCSV implements IDecode
{
    public function decode(\SplFileObject $file): array
    {
        $result = [];
        $file->setFlags(\SplFileObject::READ_CSV);
        foreach ($file as $fields) {
            $result [] = $fields;
        }
        return $result;
    }
}