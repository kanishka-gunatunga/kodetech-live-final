<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'review_overview',
        'review_message',
        'rating',
        'client_name',
        'client_designation',
        'testimonial_client_image',
    ];
}
