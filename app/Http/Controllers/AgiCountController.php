<?php

namespace App\Http\Controllers;

use App\Models\AgiLog;
use Illuminate\Http\Request;
use DB;
class AgiCountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Log Count for all vechicles.
        $logcounts = DB::select("SELECT  vehicle_id, count(vehicle_id) as Count,  YEAR(STR_TO_DATE(local_time, '%Y-%m-%d %T')) as logyear, LPAD(Month(STR_TO_DATE(local_time, '%Y-%m-%d %T')), 2, '0') as logmonth, vehicles.name from agi_log 
        JOIN vehicles ON vehicles.id = agi_log.vehicle_id
        Group By vehicle_id, logyear, logmonth, vehicles.name order by logyear desc, logmonth desc");
        return View('agicount') -> with('logcounts', $logcounts);
        
    }
    public function showagicount($id)
    {
        //Log Count for a specific vehicle.
        $logcounts = DB::select("SELECT  vehicle_id, count(vehicle_id) as Count,  YEAR(STR_TO_DATE(local_time, '%Y-%m-%d %T')) as logyear, LPAD(Month(STR_TO_DATE(local_time, '%Y-%m-%d %T')), 2, '0') as logmonth, vehicles.name from agi_log 
        JOIN vehicles ON vehicles.id = agi_log.vehicle_id
        WHERE vehicle_id = {$id}
        Group By vehicle_id, logyear, logmonth, vehicles.name order by logyear desc, logmonth desc");

        return View('agicount') -> with('logcounts', $logcounts);
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
