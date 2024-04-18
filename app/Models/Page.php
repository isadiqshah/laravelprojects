<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    public static function getRecord()
    {
        return self::get();
    }

    public static function getSingle($id)
    {
        return self::find($id);
    }

    public static function getSlug($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }
}
