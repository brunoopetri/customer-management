<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;



class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($customer) {
            $customer->slug = Str::slug($customer->name);
        });
    }
}
