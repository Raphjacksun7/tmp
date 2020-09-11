<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vidange extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'vidange';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'typeVidange', 
        'dateVidange', 
        'nbreHeuresDerniere',
        'nbreHeuresTotal',
        'nbreHeuresProchaine'
    ];
}
