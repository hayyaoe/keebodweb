<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// models
use App\Models\CustomOrder;

class Assembly extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function customOrders()
    {
        return $this->hasMany(CustomOrder::class);
    }
}
