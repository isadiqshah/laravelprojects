<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Controllers\Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use HTMLPurifier;
use App\Models\BlogTags;

class BlogController extends Controller
{

    public function blog()
    {
        $data['getRecord'] = Blog::getRecord();
        return view('backend.blog.list', $data);
    }

    public function add_blog()
    {
        $data['getCategory'] = Category::getCategory();
        return view('backend.blog.add', $data);
    }

    public function insert_blog(Request $request)
    {
        $request->validate([
            'image_file' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:10000',
        ]);

        $save = new Blog();
        $save->title            = $request->title;
        $save->user_id          = Auth::user()->id;
        $save->category_id      = $request->category_id;
        $purifier               = new HTMLPurifier();
        $save->description      = $purifier->purify($request->description);
        $save->video_link       = $request->video_link;
        $save->meta_description = $request->meta_description;
        $save->meta_keywords    = $request->meta_keywords;
        $save->is_publish       = $request->is_publish;
        $save->status           = $request->status;
        $save->save();

        $slug = $save->id;


        $save->slug = $slug;

        if (!empty($request->file('image_file')))
        {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $slug. '.'. $ext;
            $file->move(public_path('images'), $filename);


            $save->image_file = $filename;
        }
        $save->save();

        BlogTags::InsertDeleteTag($save->id, $request->tags);

        return redirect()->route('blog_list')->with('success', 'Blog Post Created Successfully !!');
    }

    public static function edit_blog($id)
    {
        $data['getCategory'] = Category::getCategory();
        $data['getRecord'] = Blog::getSingle($id);
        return view('backend.blog.edit', $data);
    }

    public function update_blog($id, Request $request)
    {

        $request->validate([
            'title' => 'required',
            'image_file' => 'image|mimes:jpeg,png,jpg,gif|max:10000', // Allow image to be optional
        ]);

        $save = Blog::findOrFail($id); // Use findOrFail to throw an exception if the blog post is not found

        $save->title            = trim($request->title);
        $save->category_id      = trim($request->category_id);
        $purifier               = new HTMLPurifier();
        $save->description      = $purifier->purify($request->description);
        $save->video_link       = $request->video_link;
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords    = trim($request->meta_keywords);
        $save->is_publish       = trim($request->is_publish);
        $save->status           = trim($request->status);

        if ($request->hasFile('image_file')) // Check if a new image file is uploaded
        {
            if (!empty($save->image_file)) // Check if there's an existing image file
            {
                // Delete the old image file
                if (file_exists(public_path('images/' . $save->image_file))) {
                    unlink(public_path('images/' . $save->image_file));
                }
            }

            // Upload and save the new image file
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $filename = $save->slug . '.' . $ext;
            $request->file('image_file')->move(public_path('images'), $filename);
            $save->image_file = $filename;
        }

        $save->save();

        BlogTags::InsertDeleteTag($save->id, $request->tags);

        return redirect()->route('blog_list')->with('success', 'Blog Post Updated Successfully !!');
    }


    public function delete_blog($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', "Blog Post Deleted Successfully !!");
    }


    public function blog_search(Request $request)
    {
        // Retrieve search parameters from the request
        $id = $request->input('id');
        $username = $request->input('username');
        $title = $request->input('title');
        $category = $request->input('category');
        $is_publish = $request->input('is_publish');
        $status = $request->input('status');

        $query = Blog::query()->with('user', 'category');

        if ($id !== null) {
            $query->where('id', $id);
        }

        if ($username !== null) {
            // Assuming you have a relationship between the blogs table and the users table
            $query->whereHas('user', function ($query) use ($username) {
                $query->where('name', 'LIKE', "%$username%");
            });
        }

        if ($title !== null) {
            $query->where('title', 'LIKE', "%$title%");
        }

        if ($category !== null) {
            // Assuming you have a relationship between the blogs table and the categories table
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('name', 'LIKE', "%$category%");
            });
        }

        if ($is_publish !== null) {
            $query->where('is_publish', $is_publish);
        }

        if ($status !== null) {
            $query->where('status', $status);
        }

        // Execute the query
        $results = $query->paginate(20);

        // Pass the results to a view for display
        return view('backend.blog.list', ['getRecord' => $results]);
    }




}
