<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $client = new GuzzleHttp\Client();
    $res = $client->request('GET', 'https://sam.gov/api/prod/sgs/v1/search/?random=1649358510806&index=_all&page=0&mode=search&sort=-modifiedDate&size=25&mfe=true&is_active=true&q=&qMode=ALL&organization_id=300000003,300000002,100094131,300000001,300000004');
    $json = json_decode($res->getBody());
    $opps = $json->_embedded->results;
    $datapoints = [];

    foreach ($opps as $opp) {
        $item = [
            'name' => $opp->title,
            'publishDate' => Arr::first(explode('T', $opp->publishDate)),
            'solicitationNumber' => $opp->solicitationNumber,
            'org' => $opp->organizationHierarchy[0]->name,
            'id' => $opp->_id,
            'websiteUrl' => 'https://sam.gov/opp/' . $opp->_id . '/view'
        ];
        $datapoints[] = $item;
    }

    return response()->view('rss', compact('datapoints'))->header('Content-Type', 'text/xml');
});
