<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Galery extends Model
{

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
