<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use function PHPUnit\Framework\returnValue;

class ServicesController extends Controller
{
    public function services()
    {
        $services = Service::paginate(10);
        return view('backend.services.list', compact('services'));
    }

    public function add_services()
    {

        return view('backend.services.add');
    }

    public function insert_services(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,webp,jpg,gif|max:10000',
            'title' => 'required|string',
            'description' => 'required|string',
            'country' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        // Create a new Service instance
        $service = new Service();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->country = $request->country;
        $service->duration = $request->duration;
        $service->price = $request->price;
        $service->status = $request->status;
        $service->save();

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $service->image = $filename;
            $service->save();
        }

        // Redirect back with success message
        return redirect()->route('services')->with('success', 'New Service Added Successfully.!!');
    }

    public function edit_services($id)
    {
        $services = Service::findOrFail($id);
        return view('backend.services.edit', compact('services'));
    }

    public function update_services(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif|max:10000',
            'title' => 'required|string',
            'description' => 'required|string',
            'country' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        // Find the service by its ID
        $service = Service::findOrFail($id);

        // Update service properties
        $service->title = $request->title;
        $service->description = $request->description;
        $service->country = $request->country;
        $service->duration = $request->duration;
        $service->price = $request->price;
        $service->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $filename);
            $service->image = $filename;
        }

        // Save the updated service
        $service->save();

        // Redirect back with success message
        return redirect()->route('services')->with('success', 'Service Updated Successfully.!!');
    }

    public function delete_services($id)
    {
        $service = Service::findOrFail($id);

        $service->delete();

        return redirect()->route('services')->with('success', 'Service Deleted Successfully.!!');
    }

}
