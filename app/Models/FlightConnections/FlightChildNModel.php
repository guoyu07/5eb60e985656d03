<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildNModel extends Model
{
	protected $connection = 'mysqlc_n';
	protected $table = 'flight_children';


}
