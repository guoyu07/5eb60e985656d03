<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildWModel extends Model
{
	protected $connection = 'mysqlc_w';
	protected $table = 'flight_children';


}
