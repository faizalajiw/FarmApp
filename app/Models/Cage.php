<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cage extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'breeders_id',
        'location',
        'category',
    ];

    /**
     * Method breeder
     *
     * @return void
     */
    public function breeder()
    {
        return $this->belongsTo(Breeder::class);
    }

    public function livestock()
    {
        return $this->hasMany(Livestock::class);
    }
}
