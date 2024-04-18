<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function category()
    {
        $data['getRecord'] = Category::getRecord();
        return view('backend.category.list', $data);
    }
    public function add_category(Request $request)
    {
        return view('backend.category.add');
    }

    public function insert_category(Request $request)
    {
        $category = Category::create([
            'name'  => $request->name,
            'slug'  => (Str::slug($request->name)),
            'title' => $request->title,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'status'    => $request->status,
            'is_menu' => $request->is_menu
        ]);

        if ($category){
            return redirect()->route('category')->with('success', "New Category Added Successfully !!");
        }
    }

    public function edit_category($id)
    {
        $data['getRecord'] = Category::getSingle($id);
        return view('backend.category.edit', $data);

    }
    public function update_category(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'title' => 'required',
            'meta_title' => 'required',
            'status' => 'required',
        ]);

        $category = Category::find($id);

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->title = $request->title;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keywords = $request->meta_keywords;
        $category->status = $request->status;
        $category->is_menu = $request->is_menu;

        $updated = $category->save();

        if ($updated) {
            return redirect()->route('category')->with('success', "Category Updated Successfully.");
        } else {
            return redirect()->back()->with('error', 'Failed to Update Category.');
        }
    }

    public function delete_category($id)
    {
        $save = Category::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect()->back()->with('success', "Category Deleted Successfully !!");
    }
}
