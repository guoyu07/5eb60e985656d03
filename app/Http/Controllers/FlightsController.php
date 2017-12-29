<?php

namespace App\Http\Controllers;
use App\Models\FlightParentModel;


class FlightsController extends Controller
{
	public static function call()
	{
		return new FlightsController;
	}

	public function getFlights($params = [])
	{
		$originCode = array_get($params, 'origin_code');
		$destinationCode = array_get($params, 'destination_code');
		// dd($originCode, $destinationCode);

		$model = new FlightParentModel;
		$data = $model->updateConnection($originCode)
						// ->with('flightConnections')
							->where('dep_apt', 'like', $originCode)
								->where('arr_apt', 'like', $destinationCode)
									->limit(20)->get();
		return $data;

	}



}
