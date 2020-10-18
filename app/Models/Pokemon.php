<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'height',// M
        'weight',// Kg
        'image',
        'type_one_id',
        'type_two_id'
    ];

    public function typeOne()
    {
        return $this->belongsTo('App\Models\Type', 'type_one_id');
    }

    public function typeTwo()
    {
        return $this->belongsTo('App\Models\Type', 'type_two_id');
    }
}
