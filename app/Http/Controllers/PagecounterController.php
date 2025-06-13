<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PagecounterController extends Controller
{
    public function indexpagecounter()
    {
        $counter = DB::table('pagecounter')->where('ID', 1)->first();
        $jumlahpengunjung = 0;
        if($counter){
            $newjumlah =$counter-> Jumlah+1;
            DB::table('pagecounter')
            ->where('ID',1)
            ->update(['Jumlah'=>$newjumlah]);
        }
        $jumlahpengunjung = $newjumlah;
         return view('indexpagecounter', ['jumlahpengunjung' => $jumlahpengunjung]);

    }

}
