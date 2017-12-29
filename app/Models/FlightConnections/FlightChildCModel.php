<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildCModel extends Model
{
	protected $connection = 'mysqlc_c';
	protected $table = 'flight_children';


}
