<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Station extends Model
{
    public function search_station($value)
    {
        $query = DB::table('stations')
            ->join('lines', 'stations.line_cd', '=', 'lines.line_cd')
            ->select('station_name', 'lines.line_name');

        if (!empty($value['pref'])) {
            $query->where('pref_cd', '=', $value['pref']);
        }

        if (!empty($value['line'])) {
            $query->where('line_name', 'like', "%$value[line]%");
        }


        // $query = DB::table('stations')
        // ->selectRaw("(CASE $value WHEN 0 THEN ");

        return $query;
    }
    use HasFactory;
}
