<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

	public function download(Request $request)
	{
		$url = $request->url;
		$urlArray = $this->filePath($url);
		$result = null;

		if (isset($urlArray['basename']) && $this->checkRemoteFile($url)) {
			$path = base_path('public/storage/images');
			$this->makeDir($path);
			$fileName = time().'_'.$urlArray['basename'];
			$filePath = $path.'/'.$fileName;
			$result = 'storage/images/'.$fileName; 
			copy($url, $filePath);
		}

		return $result;
	}

	public function filePath($path)
	{
		$fileParts = pathinfo($path);

		if(!isset($fileParts['filename']))
		{
			$fileParts['filename'] = substr(
					$fileParts['basename'], 0, 
					strrpos($fileParts['basename'], '.')
				);
		}
			
		return $fileParts;
	}

	public function checkRemoteFile($url)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		// don't download content
		curl_setopt($ch, CURLOPT_NOBODY, 1);
		curl_setopt($ch, CURLOPT_FAILONERROR, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		return (curl_exec($ch)!==FALSE) ? true : FALSE;
	}


	public function makeDir($path)
	{
		if (!file_exists($path)) {
			mkdir($path, 0777, 1);
			chmod($path, 0777);
		}
	}


}
