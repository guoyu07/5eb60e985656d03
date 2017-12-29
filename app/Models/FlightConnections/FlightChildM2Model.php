<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildM2Model extends Model
{
	protected $connection = 'mysqlc_m2';
	protected $table = 'flight_children';


}
