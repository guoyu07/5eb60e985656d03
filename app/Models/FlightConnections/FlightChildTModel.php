<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildTModel extends Model
{
	protected $connection = 'mysqlc_t';
	protected $table = 'flight_children';


}
