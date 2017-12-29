<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildZModel extends Model
{
	protected $connection = 'mysqlc_z';
	protected $table = 'flight_children';


}
