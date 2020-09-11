<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracteur extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tracteur';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numSerieTracteur', 
        'idProprietaire', 
        'numChassisTracteur'
    ];
}
