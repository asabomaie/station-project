<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\ModelItems\Pref;

class TopController extends Controller
{
    public function getindex(Request $request)
    {

        $all = $request->all();

        $request->session()->put('seach_station', $all);

        $session = $request->session()->get('seach_station');

        if(empty($session['pref'])){
            $session['pref'] = '0';
        }
        $station = new Station;

        $result = $station->search_station($all);

        $seach_station = $result->inRandomOrder()->first();

        $pref_list = Pref::PREF_LIST;

        $value = [
            'stations' => $seach_station,
            'pref_list' => $pref_list,
            'session' => $session,
        ];
        return view('top.top', $value);
    }
}
