<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Breeder extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'groups_id',
        'identity_number',
        'name',
        'address',
        'phone',

    ];

    /**
     * Method group
     *
     * @return void
     */
    public function group()
    {
        return $this->belongsTo(Breeder::class);
    }

    /**
     * Method cage
     *
     * @return void
     */
    public function cage()
    {
        return $this->hasMany(Cage::class);
    }
}
