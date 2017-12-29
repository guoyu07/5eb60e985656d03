<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildKModel extends Model
{
	protected $connection = 'mysqlc_k';
	protected $table = 'flight_children';


}
