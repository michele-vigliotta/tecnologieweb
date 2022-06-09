<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class StatsController extends Controller{

    public function getStat(Request $request){
        $offers= 'SELECT COUNT(id_annuncio) as countAnn FROM annuncio';
        $location='SELECT COUNT(id_prenotazione) as countPren FROM prenotazione';
        $located='SELECT COUNT(id_prenotazione) as CountPren FROM prenotazione';

        $doff=DB::select($offers);
        $dlon=DB::select($location);
        $dlod=DB::select($located);

        return view('stats', ['doff'=>$doff, 'dlon'=>$dlon,'dlod'=>$dlod] );
    }









    public function getDoff(){
        $execute =DB::select('SELECT COUNT(id_annuncio) FROM annuncio');
        return $execute;
    }


}
