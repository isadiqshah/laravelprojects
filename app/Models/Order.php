<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order_forms';

    protected $fillable = [
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
        'passport_copy',
    ];
}
