<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deplacement extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'deplacement';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idTracteur', 
        'nbreHM', 
        'nbreHR', 
        'nbreHT', 
        'distance', 
        'vitesse', 
        'superficie', 
        'consommation', 
        'date'
    ];
}
