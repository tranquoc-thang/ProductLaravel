<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "Product";
    public $timestamps = false; //để k sinh ra create at và update at
    protected $fillable = ['ProductId', 'ProductName', 'Unit', 'Price', 'CategoryId', 'Img']; //thứ tự đổ dữ liệu
    public function Category() {
    	return $this->belongsTo(Category::class, "CategoryId", "CategoryId");
    }
}
