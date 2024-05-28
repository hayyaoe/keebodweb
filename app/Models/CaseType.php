<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CustomOrder;

class CaseType extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function customOrders()
    {
        return $this->hasMany(CustomOrder::class);
    }
}
