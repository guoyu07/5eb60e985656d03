<?php

namespace App\Models\FlightConnections;

use Illuminate\Database\Eloquent\Model;

class FlightChildS3Model extends Model
{
	protected $connection = 'mysqlc_s3';
	protected $table = 'flight_children';


}
