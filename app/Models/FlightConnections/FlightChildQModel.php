<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildQModel extends Model
{
	protected $connection = 'mysqlc_q';
	protected $table = 'flight_children';


}
