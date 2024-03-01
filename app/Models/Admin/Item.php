<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'item_name',
        'rupees',
        'image',
        'description',
        'status',
    ];

}
