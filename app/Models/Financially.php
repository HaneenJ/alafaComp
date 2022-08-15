<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financially extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'year', 'file'];

    protected $appends = ['file_path'];

    public function getFilePathAttribute()
    {
        return asset('storage/' . $this->file);
    }
}
