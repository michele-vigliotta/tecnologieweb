@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-xl-center">
            <div class="col-4">
                -------------------------------
                <br>
                message w/h centered
                <br>
                chatlist

            </div>
            <div class="col-8">
                --------------------------------------------------------------------
                <br>
                name chat centred
                chat section

                <!--Start submit section-->
                <div class="row justify-content">
                        <form>
                            <textarea id="message" name="message" rows="4" cols="50"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                <!--End submit section-->
                    <div class="btn-box">
                        <button type="submit">
                        <span>
                          REGISTRATI
                        </span>
                        </button>
                    </div>
    </div>
</div>
@include('contentSections/general/infoSection')
@stop
