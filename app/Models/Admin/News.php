<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends BaseModel
{
    use HasFactory;
    protected $fillable=[
         'title',
         'author',
         'date',
         'image',
         'excerpt',
         'status',
    ];
}
