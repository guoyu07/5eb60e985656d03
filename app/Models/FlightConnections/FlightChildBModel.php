<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildBModel extends Model
{
	protected $connection = 'mysqlc_b';
	protected $table = 'flight_children';


}
