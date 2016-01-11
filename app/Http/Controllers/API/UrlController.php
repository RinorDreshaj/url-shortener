<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Url;

class UrlController extends Controller
{
    public function index()
    {
    	return Url::all();
    }

    public function create()
    {
    	return view('layouts.create');
    }

    public function store(Request $request)
    {
    	$actualUrl = $request->input('url');

    	$shortUrl = substr( sha1( $actualUrl . time() )  , 0,5 );

    	$generateUrl = Url::findOrNew([
    			"actual_url" => $actualUrl,
    			"short_url"  => $shortUrl
     		]);

		return array('status'=>'Success',
		 'data'=> isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http' . "://" . $_SERVER['SERVER_NAME'] ."/" . $shortUrl);		
    }

    public function redirect($url)
    {
		$find= Url::where(['short_url'=> $url])->first();

		return redirect()->to("http://" . $find);
		// return redirectTo($find);
    }
}
