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
use App\Models\CaseType;

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
        return $this->belongsTo(Type::class);
    }

    public function keyswitch()
    {
        return $this->belongsTo(KeySwitch::class);
    }

    public function keycap()
    {
        return $this->belongsTo(Keycap::class);
    }

    public function connection()
    {
        return $this->belongsTo(Connection::class);
    }

    public function assembly()
    {
        return $this->belongsTo(Assembly::class);
    }

    public function caseType()
    {
        return $this->belongsTo(CaseType::class);
    }
}
