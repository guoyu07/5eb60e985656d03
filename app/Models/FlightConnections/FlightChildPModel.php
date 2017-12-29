<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildPModel extends Model
{
	protected $connection = 'mysqlc_p';
	protected $table = 'flight_children';


}
