<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gear extends Model
{

	protected $table = 'gear_owned';

    public function user() {
			return $this->belongsTo('App\User');
		}
}
