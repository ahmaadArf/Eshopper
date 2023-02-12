<?php

namespace App\Models;

use App\Models\Card;
use App\Models\Review;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function Category()
    {
        return $this->belongsTo(Category::class);

    }
    public function Reviews()
    {
      return  $this->hasMany(Review::class);
    }
    public function Carts()
    {
      return  $this->hasMany(Card::class);
    }

    public function OrderItems()
    {
      return  $this->hasMany(OrderItem::class);
    }

}
