<?php


namespace App;


class FileHelper
{
    public static function upload($file, $path): ?string
    {
        if (!$file) {
            return null;
        }
        $extension = $file->getClientOriginalExtension();
        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $data_name = md5($name.microtime());
        $data = $data_name.'.'.$extension;
        $res = $file->move($path, $data);
        if (!$res) {
            return null;
        }
        return $data;
    }
}
