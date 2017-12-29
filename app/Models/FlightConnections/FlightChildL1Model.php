<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildL1Model extends Model
{
	protected $connection = 'mysqlc_l1';
	protected $table = 'flight_children';


}
