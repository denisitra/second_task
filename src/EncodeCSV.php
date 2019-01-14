<?php


namespace FileConverter;


class EncodeCSV implements IEncode
{

    public function encode(array $content, string $outputFilePath): void
    {
        $handle = fopen($outputFilePath, "w");
        foreach ($content as $fields){
            fputcsv($handle, $fields);
        }
        fclose($handle);
    }
}