<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function zodiac() {
        return $this->belongsTo(Zodiac::class);
    }
}
