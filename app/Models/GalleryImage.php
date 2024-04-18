<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    protected $table = 'gallery_images';

    public static function getRecord()
    {
        return self::latest()->get();
    }

    public function getImage()
    {
        if (!empty($this->image_file) && file_exists('images/'. $this->image_file))
        {
            return url('images/'. $this->image_file);
        }
        else
        {
            return "";
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
