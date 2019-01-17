<?php
namespace FileConverter;

class DecodeXML implements DecodeInterface
{
    public function decode(\SplFileObject $file): array
    {
        $result = [];
        $xml = simplexml_load_file($file->getBasename());
        foreach($xml->children() as $fields)
        {
            $result [] = $fields;
        }
        return $result;
    }
}