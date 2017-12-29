<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildAModel extends Model
{
	protected $connection = 'mysqlc_a';
	protected $table = 'flight_children';


}
