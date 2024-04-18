<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Models\User;


class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    public static function getSingle($id)
    {
        return self::find($id);
    }

    public static function getRecordSlug($slug)
    {
        return self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name',
            'categories.slug as category_slug')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->where('blogs.is_delete', '=', 0)
            ->where('blogs.slug', '=', $slug)
            ->first();
    }

    public static function getRecordFront()
    {
        $return = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name',
            'categories.slug as category_slug')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('categories', 'category_id', '=', 'categories.id');
            if (!empty(Request::get('search')))
            {
                $return = $return->where('blogs.title', 'like', '%' .Request::get('search'). '%');
            }
        $return = $return->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->orderBy('blogs.id', 'desc')
            ->paginate(9);
        return $return;
    }

    public static function getRecordFrontCategory($category_id)
    {
        $return = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name',
            'categories.slug as category_slug')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->where('blogs.category_id', '=', $category_id)
            ->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->orderBy('blogs.id', 'desc')
            ->paginate(20);

        return $return;
    }
    public static function getRecentPost()
    {
        return self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name',
            'categories.slug as category_slug')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->orderBy('blogs.id', 'desc')
            ->limit(3)
            ->get();
    }

    public static function getRelatedPost($category_id, $id)
    {
        return self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name',
            'categories.slug as category_slug')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->where('blogs.id', '!=', $id)
            ->where('blogs.category_id', '=', $category_id)
            ->where('blogs.status', '=', 1)
            ->where('blogs.is_publish', '=', 1)
            ->orderBy('blogs.id', 'desc')
            ->limit(5)
            ->get();
    }

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'description',
        'video_link',
        'meta_description',
        'meta_keywords',
        'is_publish',
        'status',
        'slug',
        'image_file', // Assuming this is the attribute for the image file
    ];


    public static function getRecord()
    {
        $query = self::select('blogs.*', 'users.name as user_name', 'categories.name as category_name',
            'categories.slug as category_slug')
            ->join('users', 'user_id', '=', 'users.id')
            ->join('categories', 'category_id', '=', 'categories.id')
            ->where('blogs.is_delete', '=', 0)
            ->orderBy('blogs.id', 'desc');


        if (!empty(Request::get('id'))) {
            $query->where('blogs.id', '=', Request::get('id'));
        }
        if (!empty(Request::get('username'))) {
            $query->where('users.name', 'like', '%'. Request::get('username') . '%');
        }
        if (!empty(Request::get('title'))) {
            $query->where('blogs.title', 'like', '%'. Request::get('title') . '%');
        }
        if (!empty(Request::get('category'))) {
            $query->where('categories.category', 'like', '%'. Request::get('category') . '%');
        }
        if (!empty(Request::get('is_publish'))) {
            $is_publish = Request::get('is_publish');
            if ($is_publish === 100)
            {
                $is_publish = 0;
            }

            $query->where('blogs.is_publish', '=', $is_publish);
        }
        if (!empty(Request::get('status'))) {
            $status = Request::get('status');
            if ($status === 100)
            {
                $status = 0;
            }

            $query->where('blogs.status', '=', $status);
        }
//        if (!empty(Request::get('start_date'))) {
//            $query->whereDate('blogs.created_at', '>=', Request::get('start_date'));
//        }
//        if (!empty(Request::get('end_date'))) {
//            $query->whereDate('blogs.created_at', '<=', Request::get('end_date'));
//        }

        return $query->paginate(20);
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

    public function getTag()
    {
        return $this->hasMany(BlogTags::class, 'blog_id');
    }

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getComment() {
        return $this->hasMany(BlogComment::class, 'blog_id')->orderBy('blog_comments.id', 'desc');
    }

    public function getCommentCount() {
        return $this->hasMany(BlogComment::class, 'blog_id')->Count();
    }

}
