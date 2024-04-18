<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\GalleryImage;
use Illuminate\Support\Facades\Storage;

class GalleryImageController extends Controller
{
    public function gallery_images()
    {
        $data['getRecord'] = GalleryImage::getRecord();
        return view('backend.gallery.list', $data);
    }

    public function add_image()
    {
        $categories = Category::all();
        return view('backend.gallery.add', compact('categories'));
    }

    public function insert_image(Request $request)
    {
        $request->validate([
            'image_file' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:10000',
        ]);

        $save = new GalleryImage();
        $save->is_publish = $request->is_publish; // Assuming you also want to save the publish status
        $save->category_id = $request->category_id ?? null; // Assuming you also want to save the publish status
        $save->save();

        $imageId = $save->id;

        if (!empty($request->file('image_file')))
        {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $imageId . '.' . $ext;
            $file->move(public_path('images'), $filename);

            $save->image_file = $filename;
            $save->save();
        }

        return redirect()->route('gallery_images')->with('success', 'Image Uploaded Successfully !!');
    }

    public function edit_image($id)
    {
        $categories = Category::all();
        $galleryImage = GalleryImage::findOrFail($id);
        return view('backend.gallery.edit', compact( 'categories','galleryImage'));
    }


    public function update_image(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10000',
        ]);

        // Find the gallery image by ID
        $galleryImage = GalleryImage::findOrFail($id);

        // Update the publish status
        $galleryImage->is_publish = $request->is_publish;

        // If a new image file is uploaded, update the image file
        if ($request->hasFile('image_file')) {
            // Validate and upload the new image file
            $request->validate([
                'image_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:10000',
            ]);

            // Delete the old image file if it exists
            if ($galleryImage->image_file) {
                Storage::delete('images/' . $galleryImage->image_file);
            }

            // Save the new image file
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $filename = $galleryImage->id . '.' . $ext;
            $request->file('image_file')->move(public_path('images'), $filename);
            $galleryImage->image_file = $filename;
        }

        // Save the changes
        $galleryImage->save();

        // Redirect back with a success message
        return redirect()->route('gallery_images')->with('success', 'Image Updated Successfully !!');
    }

    public function delete_image($id)
    {
        $blog = GalleryImage::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', "Image Deleted Successfully !!");
    }

    public function showGallery()
    {
        // Fetch images grouped by category
        $images = GalleryImage::orderBy('created_at', 'desc')->get()->groupBy('category');

        return view('gallery', compact('images'));
    }


}
