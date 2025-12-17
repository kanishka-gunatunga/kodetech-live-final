<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


class Project extends Model
{
    
    use HasFactory;
    use HasSlug;

    protected $fillable = ['project_name','project_overview', 'project_description','project_image','client_name','duration','category','project_type','website_link'];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('project_name')
            ->saveSlugsTo('slug');
    }
}
