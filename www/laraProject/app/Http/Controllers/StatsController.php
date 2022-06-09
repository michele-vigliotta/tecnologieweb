<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;


class StatsController extends Controller{

  public function getStat(Request $request){
    $check=false;

    $offers= "SELECT COUNT(id_annuncio) as countAnn FROM annuncio ";
    $location="SELECT COUNT(id_prenotazione) as countPren FROM prenotazione ";
    $located="SELECT COUNT(id_prenotazione) as CountPren FROM prenotazione where confermata=1 ";

    if(isset($request->checkData)){ //Filtro data
      if(isset($request->startDate)&&!isset($request->endDate)){
        $offers.="where inizio_locazione>='".$request->startDate."' ";
        $location.="where id_annuncio in (select id_annuncio from annuncio
                    where inizio_locazione>='".$request->startDate."') ";
        $located.="and id_annuncio in (select id_annuncio from annuncio
                   where inizio_locazione>='".$request->startDate."') ";
      }elseif(!isset($request->startDate)&&isset($request->endDate)){
        $offers.="where inizio_locazione<='".$request->endDate."' ";
        $location.="where id_annuncio in (select id_annuncio from annuncio
                    where inizio_locazione<='".$request->endDate."') ";
        $located.="and id_annuncio in (select id_annuncio from annuncio
                   where inizio_locazione<='".$request->endDate."') ";
      }else{
        $offers.="where inizio_locazione>='".$request->startDate."' and fine_locazione<='".$request->endDate."' ";
        $location.="where id_annuncio in (select id_annuncio from annuncio
                    where inizio_locazione>='".$request->startDate."' and fine_locazione<='".$request->endDate."') ";
        $located.="and id_annuncio in (select id_annuncio from annuncio
                   where inizio_locazione>='".$request->startDate."' and fine_locazione<='".$request->endDate."') ";
      }
      $check=true;
    }

    if(isset($request->locationCheck)){
      if($check){
        $offers.="and tipo='".$request->tipo."' ";
        $location.="and id_annuncio in (select id_annuncio from annuncio where tipo='".$request->tipo."') ";
        $located.="and id_annuncio in (select id_annuncio from annuncio where tipo='".$request->tipo."') ";
      }else{
        $offers.="where tipo='".$request->tipo."' ";
        $location.="where id_annuncio in (select id_annuncio from annuncio where tipo='".$request->tipo."') ";
        $located.="and id_annuncio in (select id_annuncio from annuncio where tipo='".$request->tipo."') ";
      }
    }

    $doff=DB::select($offers);
    $dlon=DB::select($location);
    $dlod=DB::select($located);

    return view('pages.statistiche.stats', ['doff'=>$doff, 'dlon'=>$dlon,'dlod'=>$dlod] );
  }









  public function getDoff(){
    $execute =DB::select('SELECT COUNT(id_annuncio) FROM annuncio');
    return $execute;
  }


}
