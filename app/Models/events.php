<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    public function participants()
    {

        return $this->belongsToMany(User::class, 'participations','event_id');

    }
}
