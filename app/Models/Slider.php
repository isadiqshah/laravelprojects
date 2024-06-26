<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    public function getSlider()
    {
        return $this->where('status', '0')->get();
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
}
