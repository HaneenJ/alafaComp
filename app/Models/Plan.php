<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'file'];

    protected $appends = ['file_path'];

    public function getFilePathAttribute()
    {
        return asset('storage/' . $this->file);
    }
}
