<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;
  use Auth;

  class HomeController extends Controller{

    public function welcome(){
      return view('welcome');
    }

    public function index(){
      return view('pages.home.index');
    }

    public function about(){
      return view('pages.general.about');
    }

    public function why(){
      return view('pages.general.why');
    }

    public function catalogo(){
      return view('catalogo');
    }


    public function faq(){
      $faq=DB::select('select * from faq');
      return view('pages.faq.faq', ['faq'=>$faq]);
    }

	  public function login(){
      return view('pages.autentication.login');
    }

    public function signup(){
      return view('pages.autentication.signup');
    }

    public function homeutente(){
      return view('homeutente');
    }

     public function profile(){
      return view('profile');
    }

    public function profileupdate(){
      return view('profileupdate');
    }

    public function provanavbar(){
      return view('provanavbar');
    }

      public function annunci(){
          $query="select * from annuncio where id_locatore='".Auth::user()->id."'";
          $annunci=DB::select($query);
          return view('pages.annunci.annunci', ['annunci'=>$annunci]);
      }
      public function stats(){
          return view('stats');
      }

      public function chat(){
          $query1="  select * from messaggio join (
                select dest, max(id_messaggio) m from (
                  (
                    select id_messaggio, id_destinatario dest from messaggio
                    where id_mittente='".Auth::user()->id."')
                  union (
                    select id_messaggio, id_mittente dest
                    from messaggio where id_destinatario='".Auth::user()->id."')
                )
               m1 group by dest)
               m2 on ((id_mittente='".Auth::user()->id."' and id_destinatario=dest)
               or (id_mittente=dest and id_destinatario='".Auth::user()->id."'))
               and (id_messaggio = m) order by id_messaggio desc";
          $messaggi=DB::select($query1);

          $query2="select * from utente";
          $utenti = DB::select($query2);

          return view('pages.chat.chat', ['messaggi'=>$messaggi,'utenti'=>$utenti]);

      }

  }
