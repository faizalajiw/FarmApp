<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'institutions_id',
        'image',
        'name',
        'leader',
        'address',
        'phone',
        'legal_permit',
    ];

    /**
     * Method user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Method institution
     *
     * @return void
     */
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    public function breeder()
    {
        return $this->hasMany(Breeder::class);
    }
}
