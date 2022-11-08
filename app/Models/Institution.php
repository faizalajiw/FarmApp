<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'name',
        'leader',
        'address',
        'phone',
        'legal_permit'

    ];


    /**
     * Method breeder
     *
     * @return void
     */
    public function breeder()
    {
        return $this->hasMany(Breeder::class);
    }
}
