<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "Category";
    public $timestamps = false; //để k sinh ra create at và update at
    protected $fillable = ['CategoryId', 'CategoryName']; //thứ tự đổ dữ liệu
    public function Product() {
    	return $this->hasMany(Product::class, "CategoryId", "CategoryId");
    }
}
