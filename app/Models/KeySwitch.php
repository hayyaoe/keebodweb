<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// models
use App\Models\CustomOrder;

class KeySwitch extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function customOrder()
    {
        return $this->belongsTo(CustomOrder::class);
    }
}
