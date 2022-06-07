<?php



namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use App\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller{

    public function faqedit(Request $request){
        $query="select * from faq where id_FAQ='".$request->id."'";

        $xfaq=DB::select($query);


        return view('faqedit', ['xfaq'=>$xfaq]);
    }

    public function faqadder(Request $request, $domanda, $risposta){
        $execute =DB::insert('INSERT INTO faq (id_FAQ, domanda, risposta, created_at, updated_at) VALUES (NULL, ?, ?, NULL, NULL)',[$domanda,$risposta]);
        return $execute;
    }
    public function faqadd(){
        return view('faqadd');
    }




    /*
  public function dettagli(Request $request){
      $query="select * from annuncio where id_annuncio='".$request->id."'";
      $query2="select * from foto where id_annuncio='".$request->id."'";
      $annuncio=DB::select($query);
      $photo=DB::select($query2);
      return view('dettagli', ['annuncio'=>$annuncio, 'photo'=>$photo]);
    }
     * */

}
