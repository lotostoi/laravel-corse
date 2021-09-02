<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class WorkFiles extends Model
{

    public static function saveFile($request, $link = ''): String
    {
        $name = null;
        if ($request->file('load-image')->isValid()) {
            $ext = $request->file('load-image')->extension();
            $name = preg_split("/ /", $request->title)[0] . "_" . uniqid() . '.' . "$ext";
            $upload_folder = "public{$link}";
            $file = Storage::putFileAs($upload_folder, $request->file('load-image')->path(), $name);
        }
        return $name;
    }

}
