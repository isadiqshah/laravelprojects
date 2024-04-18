<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider()
    {
        $sliders = Slider::orderByDesc('created_at')->get();
        return view('backend.slider.list', compact('sliders'));
    }



    public function add_slider()
    {
        return view('backend.slider.add');
    }

    public function insert_slider(Request $request)
    {
        $request->validate([
            'image_file' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:10000'
        ]);

        // Create a new slider instance
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->save();

        $imageId = $slider->id;

        if (!empty($request->file('image_file')))
        {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file = $request->file('image_file');
            $filename = $imageId . '.' . $ext;
            $file->move(public_path('images'), $filename);

            $slider->image_file = $filename;
            $slider->save();
        }

        return redirect()->route('slider')->with('success', 'New Slider Uploaded Successfully !!');
    }

    public function edit_slider($id)
    {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit', compact('slider'));
    }

    public function update_slider(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'image_file' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif|max:10000'
        ]);

        // Find the slider by its ID
        $slider = Slider::findOrFail($id);

        // Update the slider attributes
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;

        // If a new image file is uploaded, update the image file
        if ($request->hasFile('image_file')) {
            // Delete the old image file if it exists
            if ($slider->image_file) {
                unlink(public_path('images/' . $slider->image_file));
            }

            // Upload and save the new image file
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $filename = $id . '.' . $ext;
            $request->file('image_file')->move(public_path('images'), $filename);
            $slider->image_file = $filename;
        }

        // Save the changes
        $slider->save();

        // Redirect back with a success message
        return redirect()->route('slider')->with('success', 'Slider Updated Successfully !!');
    }


    public function delete_slider($id)
    {
        $blog = Slider::findOrFail($id);
        $blog->delete();

        return redirect()->back()->with('success', "Slider Deleted Successfully !!");
    }

}
