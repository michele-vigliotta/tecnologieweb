<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;

  class HomeController extends Controller{

    public function welcome(){
      return view('welcome');
    }

    public function index(){
      return view('index');
    }

    public function about(){
      return view('about');
    }

    public function why(){
      return view('why');
    }

    public function catalogo(){
      return view('catalogo');
    }

	  public function testimonial(){
      return view('testimonial');
    }
      public function faq(){
          return view('faq');
      }

	  public function login(){
      return view('login');
    }

    public function signup(){
      return view('signup');
    }
    public function homelocatore(){
        return view('homelocatore');
    }
  }

 ?>
