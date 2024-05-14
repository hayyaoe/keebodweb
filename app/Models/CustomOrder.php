<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// models
use App\Models\User;
use App\Models\Assembly;
use App\Models\Connection;
use App\Models\Keycap;
use App\Models\KeySwitch;
use App\Models\Type;

class CustomOrder extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->hasOne(Type::class);
    }

    public function keyswitch()
    {
        return $this->hasOne(KeySwitch::class);
    }

    public function keycap()
    {
        return $this->hasOne(Keycap::class);
    }

    public function connection()
    {
        return $this->hasOne(Connection::class);
    }

    public function assembly()
    {
        return $this->hasOne(Assembly::class);
    }
}
