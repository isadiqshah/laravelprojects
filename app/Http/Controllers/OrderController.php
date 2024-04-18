<?php

namespace App\Http\Controllers;

use App\Mail\OrderDoneMail;
use App\Mail\OrderPlaced;
use App\Models\Feedback;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function order_form()
    {
        return view('order_form');
    }

    public function OrderFeedback($order_id)
    {
        return view('feedback', compact('order_id'));
    }

    public function store_order(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:order_forms,email',
            'dob' => 'required|date',
            'country' => 'required|string|max:255',
            'passport_number' => 'string|max:255',
            'passport_issue' => 'date',
            'passport_expiry' => 'date',
            'applicants' => 'integer',
            'visa_type' => 'string|max:255',
            'days_required' => 'integer',
            'country_code' => 'string|max:5', // Adjust max length as needed
            'mobile_number' => 'string|max:20', // Adjust max length as needed
            'arrival_date' => 'date',
            // 'passport_copy' => 'required|mimes:jpeg,png,webp,jpg,gif|max:10000',
        ]);

        // Create a new order instance
        $order = new Order();
        $order->fill($request->only([
            'service_name',
            'fname',
            'lname',
            'gender',
            'email',
            'dob',
            'country',
            'passport_number',
            'passport_issue',
            'passport_expiry',
            'applicants',
            'visa_type',
            'days_required',
            'country_code',
            'mobile_number',
            'arrival_date',
        ]));

        // Set the default status as 'pending'
        $order->status = 'Pending';

        // Save the order first to generate the ID
        $order->save();

        // Upload and save passport copy if provided
        if ($request->hasFile('passport_copy') && $request->file('passport_copy')->isValid()) {
            $filename = $order->id . '.' . $request->file('passport_copy')->getClientOriginalExtension();
            $request->file('passport_copy')->storeAs('passport_Copies', $filename);
            $order->passport_copy = $filename;
            $order->save();
        }

        // Send email notification
        Mail::to($request->email)->send(new OrderPlaced($order));

        // Redirect back with success message
        return redirect()->back()->with('success', "Your Order Placed Successfully.!!");
    }

    public function delete_order($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        return redirect()->route('order')->with('success', 'Order Deleted Successfully.!!');
    }

    public function order()
    {
        $orders = Order::all();
        return view('backend.order.list', compact('orders'));
    }

    public function SaveOrderFeedback(Request $request, $order_id)
    {
        Feedback::create([
            'order_id' => $order_id,
            'feedback' => $request->feedback ?? '',
            'rating' => $request->star ?? 0
        ]);

        return redirect()->route('home')->with('success', 'Thanks For Your Feedback!');
    }

    public function OrderDone($id)
    {
        $order = Order::find($id);
        $order->status = 'done';
        $order->save();

        Mail::to('hello@example.com')->send(new OrderDoneMail($order->id));

        return redirect()->back()->with('success', 'Order Done Successfully.!!');
    }



}
