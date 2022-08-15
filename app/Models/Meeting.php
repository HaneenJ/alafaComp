<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image', 'file'];

    protected $appends = ['image_path', 'file_path'];

    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->image);
    }
    public function getFilePathAttribute()
    {
        return asset('storage/' . $this->file);
    }
}
