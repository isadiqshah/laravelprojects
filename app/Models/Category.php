<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'category_id'
    ];


    protected $table = 'categories';

    public static function getSingle($id)
    {
        return Category::find($id);
    }

    public static function getRecord()
    {
        return self::select('categories.*')
            ->where('is_delete', '=', 0)
            ->orderBy('id', 'desc')
            ->paginate(30);
    }

    public static function getCategory()
    {
        return self::select('categories.*')
            ->where('status', '=', 1)
            ->where('is_delete', '=', 0)
            ->get();
    }

    public static function totalblog($categoryId)
    {
        return Blog::where('category_id', '=', $categoryId)
            ->where('status', '=', 1)
            ->where('is_publish', '=', 1)
            ->where('is_delete', '=', 0)
            ->count();
    }

    public static function getCategoryMenu()
    {
        return self::select('categories.*')
            ->where('status', '=', 1)
            ->where('is_menu', '=', 1)
            ->where('is_delete', '=', 0)
            ->get();
    }
    public static function getSlug($slug)
    {
        return self::select('categories.*')
            ->where('slug', '=', $slug)
            ->where('status', '=', 1)
            ->where('is_delete', '=', 0)
            ->first();
    }


}

