<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildVModel extends Model
{
	protected $connection = 'mysqlc_v';
	protected $table = 'flight_children';


}
