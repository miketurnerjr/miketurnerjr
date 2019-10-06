<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class MediaLibrary extends Model implements HasMedia
{
    /**
     *
     * Documentation
     * https://docs.spatie.be/laravel-medialibrary/v7/basic-usage/preparing-your-model/
     *
     */
    
     use HasMediaTrait;

     protected $table = 'media';
}
