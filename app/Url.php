<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
	protected $table = 'url';
    protected $fillable = ['actual_url','short_url'];

}
