<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Customer extends Model
{
    protected $fillable = ['customer_name', 'customer_address', 'customer_phonenumber', 'customer_email', 'customer_username', 'customer_password'];
    protected $primaryKey = 'customer_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function($customer) {
            $customer->customer_id = (string) Str::uuid();
            $customer->created_timestamp = now();
    });
}
}