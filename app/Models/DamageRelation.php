<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DamageRelation extends Model
{
    use HasFactory;

    protected $fillable = [
        'win_type_id',
        'lose_type_id'
    ];

    public function winType()
    {
        return $this->belongsTo('App\Models\Type', 'win_type_id');
    }

    public function loseType()
    {
        return $this->belongsTo('App\Models\Type', 'lose_type_id');
    }
}
