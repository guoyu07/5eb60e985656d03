<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildL2Model extends Model
{
	protected $connection = 'mysqlc_l2';
	protected $table = 'flight_children';


}
