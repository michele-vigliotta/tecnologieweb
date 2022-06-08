@extends('layouts.default')
@section('content')

@stop

@section('carousel')
    <section class="find_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form_tab_container">
                        <div class="tab-content text-center">
                            <div class="tab-pane active">
                                <div class="Rent_form find_form">
                                    {{--@if(isset(Auth::user()->username))--}}
                                        <div>
                                            <div class="content">
                                                <div class="individual__section" >
                                                    <center>
                                                        <div class="row justify-content-xl-center d-none d-md-block col-md-9">
                                                            <h3 class="h2 mr-auto">Statistiche </h3>

                                                            <div class="row justify-content-xl-center">
                                                                <div class="col-5">
                                                                    <form action="javascript:alert('Valori Cambiati');">
                                                                    <h6> Filtri</h6>
                                                                    <input type="checkbox" id="dateCheck">
                                                                        <label for="dateFilter"> Filtra per data</label>
                                                                    <br>
                                                                    Data d'Inizio
                                                                    <input type="date" id="startDate" name="startDate" min="2022-01-01" max="2022-12-31" disabled>
                                                                    <br>
                                                                    Data di Fine
                                                                    <input type="date" id="endDate" name="endDate" min="2022-01-01" max="2022-12-31" disabled>
                                                                    <script>
                                                                        const dateCheck = document.getElementById('dateCheck')
                                                                        dateCheck.addEventListener('change', (event) => {
                                                                            if (event.currentTarget.checked) {
                                                                                document.getElementById("startDate").disabled = false;
                                                                                document.getElementById("endDate").disabled = false;
                                                                            } else {
                                                                                document.getElementById("startDate").disabled = true;
                                                                                document.getElementById("endDate").disabled = true;
                                                                            }
                                                                        })

                                                                    </script>
                                                                    <br>
                                                                    <input type="checkbox" id="locationType">
                                                                    <label for="localFilter"> Filtra per tipo d'alloggio</label>
                                                                    <br>
                                                                    Tipologia d'alloggio
                                                                    <select name="loca" id="loca" disabled>
                                                                        <option value="App">Appartamento</option>
                                                                        <option value="Single">Camera Singola</option>
                                                                        <option value="Double">Camera Doppia</option>
                                                                    </select>
                                                                    <script>
                                                                        const locCheck = document.getElementById('locationType')
                                                                        locCheck.addEventListener('change', (event) => {
                                                                            if (event.currentTarget.checked) {
                                                                                document.getElementById("loca").disabled = false;
                                                                            } else {
                                                                                document.getElementById("loca").disabled = true;
                                                                            }
                                                                        })
                                                                    </script>
                                                                        <br><br>
                                                                        <div class="contatta quote_btn-container justify-content-center">
                                                                            <div class="detail-box">
                                                                                <input type="submit" value="Submit" class="quote_btn justify-content-center contatta">
                                                                            </div>
                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <div class="col-7" style="border-left: thick solid #FA4953;">
                                                                    <p style="text-align: left;">
                                                                        Alloggi locati: ... </p>
                                                                    <p style="text-align: left;">
                                                                        Offerte di alloggio nel sito: ... </p>
                                                                    <p style="text-align: left;">
                                                                        Offerte di locazione effettuate: ... </p>
                                                                </div>
                                                            </div>

                                                           {{-- @foreach ($messaggimittente as $msgmit)
                                                                @foreach ($messaggidestinatario as $msgdes)

                                                                    <p style="text-align: left;">
                                                                        test <br>
                                                                        timsestamp </p>

                                                                    <p style="text-align: right;">

                                                                        {{$msgdes->testo}} <br>
                                                                        {{$msgdes->timestamp}} </p>



                                                                @endforeach
                                                            @endforeach--}}
                                                        </div>
                                                    </center>
                                                   {{-- @else
                                                        <script>window.location = "/index";</script>
                                                    @endif--}}
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>


    @include('contentSections/general/infoSection')
@stop
