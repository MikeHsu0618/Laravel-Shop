<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'enabled', 'image'];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    static function findIfEnabled($productOptionId)
    {
        $option = self::where('enabled', true)->where('id', $productOptionId)->first();
        if ($option){
            if (@$option->product->is_published()){
                return $option;
            }
        }
        return null;
    }
}
