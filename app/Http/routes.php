<?php
use App\Models\Quote;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    $count = Quote::count();
    $day = (int) date('z');
    $page = $day % $count + 1;

    $quote = Quote::query()->get()->forPage($page,1)->first();
    
    if(empty($quote))
    	throw new \Illuminate\Database\Eloquent\ModelNotFoundException("Error Processing Request", 1);
    
    return view('quote',compact('quote'));

});
$app->get('/{id}',function($id) use ($app) {
	$quote = Quote::findOrFail($id);
	return view('quote',compact('quote'));
});