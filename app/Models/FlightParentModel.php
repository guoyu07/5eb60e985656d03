<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SplitByIdModel;
use App\Models\FlightChildModel;

class FlightParentModel extends Model
{
	protected $connection = '';
	protected $table = 'flight_parents';
	// protected $appends = ['flight_connections'];

	public function updateConnection($originCode)
	{
		$dbNames = [
					'a' => [
								'a_m' => 'mysqlp_am',
								'n_z' => 'mysqlp_az'
							],
					'b' => [
								'a_m' => 'mysqlp_bm',
								'n_z' => 'mysqlp_bz'
							],
					'c' => [
								'a_m' => 'mysqlp_cm',
								'n_z' => 'mysqlp_cz'
							],
					'd' => [
								'a_z' => 'mysqlp_d'
							],
					'e' => [
								'a_z' => 'mysqlp_e'
							],
					'f' => [
								'a_z' => 'mysqlp_f'
							],
					'g' => [
								'a_z' => 'mysqlp_g'
							],
					'h' => [
								'a_z' => 'mysqlp_h'
							],
					'i' => [
								'a_z' => 'mysqlp_i'
							],
					'j' => [
								'a_z' => 'mysqlp_j'
							],
					'k' => [
								'a_z' => 'mysqlp_k'
							],
					'l' => [
								'a_g' => 'mysqlp_lg',
								'h_m' => 'mysqlp_lm',
								'n_z' => 'mysqlp_lz',
							],
					'm' => [
								'a_m' => 'mysqlp_mm',
								'n_z' => 'mysqlp_mz',
							],
					'n' => [
								'a_z' => 'mysqlp_n'
							],
					'o' => [
								'a_z' => 'mysqlp_o'
							],
					'p' => [
								'a_z' => 'mysqlp_p'
							],
					'q' => [
								'a_z' => 'mysqlp_q'
							],
					'r' => [
								'a_z' => 'mysqlp_r'
							],
					's' => [
								'a_m' => 'mysqlp_sm',
								'n_z' => 'mysqlp_sz',
							],
					't' => [
								'a_z' => 'mysqlp_t'
							],
					'u' => [
								'a_z' => 'mysqlp_u'
							],
					'v' => [
								'a_z' => 'mysqlp_v'
							],
					'w' => [
								'a_z' => 'mysqlp_w'
							],
					'x' => [
								'a_z' => 'mysqlp_x'
							],
					'y' => [
								'a_z' => 'mysqlp_y'
							],
					'z' => [
								'a_z' => 'mysqlp_z'
							],
				];

		$originCode = strtolower($originCode);
		$firstKey = substr($originCode, 0, 1);
		$secondKey = substr($originCode, 1, 1);
		$foundDbNames = array_get($dbNames, $firstKey);
		foreach ($foundDbNames as $key => $value) {
			$exKeys = explode('_', $key);
			if ($secondKey >= $exKeys[0] && $secondKey <= $exKeys[1]) {
				$this->connection = $value;
				break;
			}
		}
		// dd($this->connection);

		return $this;
	}


	public function flightConnections()
	{
		$model = $this->getFlightConnectionModelName();
		return $this->hasMany($model, 'pid', 'id');
	}


	// public function getFlightConnectionsAttribute()
	// {
	// 	$dbName = $this->getFlightConnectionKey();
	// 	$model = new FlightChildModel;
	// 	$data = $model->setConnection($dbName)
	// 						->where('pid', $this->id)->get();
	// 	return $data;
	// }



	public function getFlightConnectionKey()
	{
		$key = substr(str_replace('mysqlp_', '', $this->connection), 0, 1);
		$name = '';
		$data = SplitByIdModel::where('db_name', 'trawishflight_'.$key)
						->first();

		if (!is_null($data)) {
			if ($this->id <= $data->id1) {
				$name = $key;
			}
			
			if ($this->id > $data->id1 && $this->id <= $data->id2) {
				$name = $key.'1';
			}

			if ($this->id > $data->id2 && $this->id <= $data->id3) {
				$name = $key.'2';
			}

			if ($this->id > $data->id3 && $this->id <= $data->id4) {
				$name = $key.'3';
			}

			if ($this->id > $data->id4 && $this->id <= $data->id5) {
				$name = $key.'4';
			}
		}

		return 'mysqlc_'.$name;
	}

	public function getFlightConnectionModelName()
	{

		$key = substr(str_replace('mysqlp_', '', $this->connection), 0, 1);
		$name = '';
		$data = SplitByIdModel::where('db_name', 'trawishflight_'.$key)
						->first();

		if (!is_null($data)) {
			if ($this->id <= $data->id1) {
				$name = $key;
			}
			
			if ($this->id > $data->id1 && $this->id <= $data->id2) {
				$name = $key.'1';
			}

			if ($this->id > $data->id2 && $this->id <= $data->id3) {
				$name = $key.'2';
			}

			if ($this->id > $data->id3 && $this->id <= $data->id4) {
				$name = $key.'3';
			}

			if ($this->id > $data->id4 && $this->id <= $data->id5) {
				$name = $key.'4';
			}
		}

		return 'App\Models\FlightConnections\FlightChild'
							.strtoupper($name).'Model';
	}

}
