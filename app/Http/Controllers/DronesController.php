<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DronesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('drones');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function describeinstance()
    {
        $client = new Client();
        $url = 'https://xqv4b5pdi8.execute-api.us-east-2.amazonaws.com/Develop/describeinstance';
        
        $headers = [
            'x-api-key' => 'LMkLjl3mELIdVmKcpoRG95pxetk5Zgg461YOytTg'
        ];

        $params = [
            "instanceid" => "i-0e99a42ea8fee6069"
        ];

        $response = $client->request('POST', $url, [
            'headers' => $headers,
            'json' => $params
        ]);

        $responseBody = json_decode($response->getBody());
        /* if($responseBody->resultCode == 200)
        {
            return $responseBody->state;
        }
        else
        {
            return 'error';
        } */
        return $response->getBody();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
