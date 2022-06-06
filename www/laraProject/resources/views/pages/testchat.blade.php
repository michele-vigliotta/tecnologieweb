@extends('layouts.default')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-xl-center">
            <div class="col-4">
                <h1>Mittenti</h1>
                <hr class="line">
                <br>
                @include('contentSections/chat/chatList')
                @include('contentSections/chat/chatList')
                @include('contentSections/chat/chatList')
                @include('contentSections/chat/chatList')
                @include('contentSections/chat/chatList')
                <br>

            </div>
            <div class="col-8">
                <h1> Chat name</h1>
                <hr class="line">
                <br>
                chat search
                <!--Start submit section-->

                <div class="find_form quote_btn-container">
                    <textarea id="message" name="message" rows="4" cols="50"></textarea>
                    <div class="contatta">
                        <div class="detail-box">
                            <input type="submit" value="Submit" class="quote_btn justify-content-center contatta">
                        </div>
                    </div>
                </div>

                   {{--
                   <div class="row justify-content quote_btn-container">
                   <form>
                        <textarea id="message" name="message" rows="4" cols="50"></textarea>
                        <input type="submit" value="Submit" class="quote_btn align-baseline contatta">

                    </form>
                     </div>
                   --}}

                    <!--End submit section-->


            </div>
        </div>
    </div>
    <br>
    <br>
    {{--
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
        </div>
    </div>

--}}

@include('contentSections/general/infoSection')
@stop
