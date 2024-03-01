<?php

namespace App\Models\Admin;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'image',
        'status',
    ];

}

