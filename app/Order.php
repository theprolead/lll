<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['description'];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function states()
    {
        return $this->belongsToMany(
            State::class,
            'order_states',
            'order_id',
            'state_id'
        );
    }

    public static function add($fields)
    {
        $order = new static;
        $order->fill($fields);
        $order->user_id = self::getUserId();
        $order->save();
    }

    protected static function getUser()
    {
        return 1;
    }
    protected static function getState(){
        return 1;
    }

}
