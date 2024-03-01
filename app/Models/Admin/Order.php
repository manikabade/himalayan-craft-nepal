<?php

namespace App\Models\Admin;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends BaseModel
{
    use HasFactory;
    protected $fillable=[
        'customer_name',
        'email',
        'phone_number',
        'address',
        'item_id',
        'quantity' ,
        'image',
        'message',
        'status',
    ];
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'item_id');
    }

}
