<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogTags;
use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function page()
    {
        $data['getRecord'] = Page::getRecord();
        return view('backend.page.list', $data);
    }

    public function add_page()
    {
        return view('backend.page.add');
    }

    public function insert_page(Request $request)
    {
        $save = new Page;
        $save->slug             = trim($request->slug);
        $save->title            = trim($request->title);
        $save->description      = trim($request->description);
        $save->meta_title       = trim($request->meta_title);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords    = trim($request->meta_keywords);
        $save->save();

        return redirect()->route('page')->with('success', 'Page Created Successfully !!');
    }

    public static function edit_page($id)
    {
        $data['getRecord'] = Page::getSingle($id);
        return view('backend.page.edit', $data);
    }

    public function update_page($id, Request $request)
    {
        $save    = Page::getSingle($id);
        $save->slug             = trim($request->slug);
        $save->title            = trim($request->title);
        $save->description      = trim($request->description);
        $save->meta_title       = trim($request->meta_title);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords    = trim($request->meta_keywords);
        $save->save();

        return redirect()->route('page')->with('success', 'Page Updated Successfully !!');
    }

    public function delete_page($id)
    {
        $page = Page::findOrFail($id);
        $page->delete();

        return redirect()->back()->with('success', "Page Deleted Successfully !!");
    }

}
