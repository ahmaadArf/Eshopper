<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function OrderItems()
    {
      return  $this->hasMany(OrderItem::class);
    }

    public function Payments()
    {
        return  $this->hasMany(Payment::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
