<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'order_id', 'name', 'count','total','order_count',
    ];

    public function order()
    {
        $this->belongsTo('App\Order');
    }
}
