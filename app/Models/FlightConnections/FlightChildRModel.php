<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildRModel extends Model
{
	protected $connection = 'mysqlc_r';
	protected $table = 'flight_children';


}
