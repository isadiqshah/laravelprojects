<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\GalleryImage;
use App\Models\Home;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Metadata\BackupStaticProperties;
use App\Models\Page;
use App\Models\BlogComment;
use Illuminate\Support\Facades\Auth;
use App\Models\BlogReplyComment;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\Slider;

class HomeController extends Controller
{
    public function home()
    {
        $feedbacks = Feedback::all(); // Fetch all feedback from the database
        $services = Service::where('status', '1')->get();
        $sliders = Slider::where('status', '1')->get();
        $getPage = Page::getSlug('home');

        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';

        $data['getUserRecord'] = User::getRecordUser();
        $data['feedbacks'] = $feedbacks; // Pass feedback data to the view
        $data['sliders'] = $sliders;
        $data['services'] = $services;
        $data['blogs'] = Blog::getRecord();
        $blogs = Blog::getRecord();


        // Pass $data as the second argument to the view() function
        return view('home', $data);
    }



    public function about()
    {
        $services = Service::where('status', '1')->get();
        $getPage = Page::getSlug('about');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        return view('about', $data, compact('services'));
    }
    public function gallery()
    {
        $categories = Category::all();
        $galleries = GalleryImage::all();
        $getPage = Page::getSlug('gallery');

        $data = [
            'meta_title' => $getPage->meta_title ?? '',
            'meta_description' => $getPage->meta_description ?? '',
            'meta_keywords' => $getPage->meta_keywords ?? '',
            'galleries' => $galleries, // Pass the galleries data here
            'categories' => $categories,
        ];

        return view('gallery', $data);
    }

    public function blog()
    {
        $getPage = Page::getSlug('blog');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        $data['getRecord'] = Blog::getRecordFront();
        return view('blog', $data);
    }

    public function contact()
    {
        $getPage = Page::getSlug('contact-us');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        return view('contact', $data);
    }

    public function blog_detail($slug)
    {
        $getCategory = Category::getSlug($slug);
        if (!empty($getCategory))
        {
            $data['meta_title'] = $getCategory->meta_title;
            $data['meta_description'] = $getCategory->meta_description;
            $data['meta_keywords'] = $getCategory->meta_keywords;
            $data['header_title'] = $getCategory->title;

            $data['getRecord'] = Blog::getRecordFrontCategory($getCategory->id);
            return view('blog', $data);
        }
        else
        {
            $getRecord = Blog::getRecordSlug($slug);
            if (!empty($getRecord))
            {
                $data['getCategory'] = Category::getCategory();
                $data['getRecentPost'] = Blog::getRecentPost();
                $data['getRelatedPost'] = Blog::getRelatedPost($getRecord->category_id, $getRecord->id);

                $data['getRecord'] = $getRecord;

                $data['meta_title'] = $getRecord->title;
                $data['meta_description'] = $getRecord->meta_description;
                $data['meta_keywords'] = $getRecord->meta_keywords;

                return view('blog_detail', $data);
            }
            else
            {
                abort(404);
            }
        }

    }

    public function blog_comment(Request $request)
    {
        $save = new BlogComment;
        $save->user_id = Auth::user()->id;
        $save->blog_id = $request->blog_id;
        $save->comment = $request->comment;

        $save->save();

        return redirect()->back()->with('success', "Your Comment has been Submitted Successfully !!");
    }

    public function blog_comment_reply(Request $request)
    {
        $save = new BlogReplyComment;
        $save->user_id = Auth::user()->id;
        $save->comment_id = $request->comment_id;
        $save->comment = $request->comment;

        $save->save();

        return redirect()->back()->with('success', "Your Comment Reply has been Submitted Successfully !!");
    }

}
