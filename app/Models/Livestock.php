<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Livestock extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'cages_id',
        'code',
        'name',
        'image',
        'gender',
        'birth_day',
        'body_weight',
        'body_height',
        'condition',
    ];

    /**
     * Method cage
     *
     * @return void
     */
    public function cage()
    {
        return $this->belongsTo(Cage::class);
    }
}
