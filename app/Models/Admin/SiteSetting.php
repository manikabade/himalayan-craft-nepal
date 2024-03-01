<?php

namespace App\Models\Admin;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends BaseModel
{
    use HasFactory;
    protected $table = 'site_settings';
    protected $fillable = [
        'title',
        'alias',
        'working_day',
        'working_time',
        'closed_day',
        'closed_time',
        'description',
        'email',
        'phone',
        'copyright',
        'facebook',
        'twitter',
        'youtube',
        'insta',
        'footer_text',

        'photo',
        'logo',
    ];

}
