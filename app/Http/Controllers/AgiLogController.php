<?php

namespace App\Http\Controllers;

use App\Models\AgiLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DB;
class AgiLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('agilog');
    }
    public function showagilog($id)
    {
        $lat = "";
        $lng = "";
        //Log Count for all vechicles.
        $trucklogs = DB::select("select agi_log.*, vehicles.name from agi_log 
                                JOIN vehicles ON vehicles.id = agi_log.vehicle_id
                                where `vehicle_id` = {$id} and lat IS NOT NULL and lng IS NOT NULL 
                                order by local_time desc 
                                limit 1
                                ");
             
        foreach ($trucklogs as $truck) {
            $lat = $truck->lat;
            $lng = $truck->lng;
        }                       
        //get address of vehicles with current lat and longitude.
        $address = $this->getAddress($lat, $lng);

        $data = [
            'trucklogs'  => $trucklogs,
             'address'   => $address,
        ];
                                
        return View('agilog') -> with('data', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function getAddress($lat, $lng)
    {
        $address = '';
        if(empty($lat) || empty($lng))
        {
            //default netcorp address lat and longitude.
            $lat = '-33.9199671';
            $lng = '150.9641462';
        }
        
        $urlString = "http://dev.virtualearth.net/REST/v1/Locations/{$lat},{$lng}?%20&key=AqrpK_b1lckZjNLrnOsEpLjuqsD0W43B9KnoHzITuX1U65qtzs6t_ermmJ38%20QnlK";
        
        $response = Http::get($urlString);
        if ($response->status() !== 200) {
            $address = "sorry address not found! please check api";
        }
      

        $output = json_decode($response);
        $address = $output->resourceSets[0]->resources[0]->name;

        return $address;
    }
    public function create()
    {
        
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
     * @param  \App\Models\AgiLog  $agiLog
     * @return \Illuminate\Http\Response
     */
    public function show(AgiLog $agiLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgiLog  $agiLog
     * @return \Illuminate\Http\Response
     */
    public function edit(AgiLog $agiLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AgiLog  $agiLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgiLog $agiLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgiLog  $agiLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgiLog $agiLog)
    {
        //
    }
}
