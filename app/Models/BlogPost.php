<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model; // This imports the base Eloquent Model class.

class BlogPost extends Model // This defines a class named BlogPost that extends the Model class.
{
    protected $fillable = ['title', 'content', 'created'];
    // The $fillable property specifies which attributes can be mass-assigned.
    
}
