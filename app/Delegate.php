<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegate extends Model {

	//
    protected $fillable = [
        'title',
        'date',
        'name',
        'surname',
        'forename',
        'job',
        'organization',
        'telephone',
        'email',
        'comment',
        'payment',
    ];

}
