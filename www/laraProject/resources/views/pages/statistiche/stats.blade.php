@extends('layouts.default')

@section('content1')
    <section class="find_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form_tab_container">
                        <div class="tab-content text-center">
                            <div class="tab-pane active">
                                <div class="Rent_form find_form">
                                    <div>
                                        <div class="content">
                                            <div class="individual__section">
                                                <center>
                                                    <div
                                                        class="row justify-content-xl-center d-none d-md-block col-md-9">
                                                        <h3 class="h2 mr-auto">Statistiche </h3>

                                                        <div class="row justify-content-xl-center">
                                                            <div class="col-5">
                                                                <form action="javascript:alert('Valori Cambiati');">
                                                                    <h6> Filtri</h6>
                                                                    <input type="checkbox" name="checkData"
                                                                           id="dateCheck">
                                                                    <label for="dateFilter"> Filtra per data</label>
                                                                    <br>
                                                                    Data d'Inizio
                                                                    <input type="date" id="startDate" name="startDate"
                                                                           disabled>
                                                                    <br>
                                                                    Data di Fine
                                                                    <input type="date" id="endDate" name="endDate"
                                                                           disabled>

                                                                    <br>
                                                                    <input type="checkbox" name="locationCheck"
                                                                           id="locationType">
                                                                    <label for="localFilter"> Filtra per tipo
                                                                        d'alloggio</label>
                                                                    <br>
                                                                    Tipologia d'alloggio
                                                                    <select name="tipo" id="loca" disabled>
                                                                        <option value="appartamento">Appartamento
                                                                        </option>
                                                                        <option value="camera">Camera Singola</option>
                                                                    </select>

                                                                    <br><br>
                                                                    <div
                                                                        class="contatta quote_btn-container justify-content-center">
                                                                        <div class="detail-box">
                                                                            <input type="submit" value="Submit"
                                                                                   class="quote_btn justify-content-center contatta">
                                                                        </div>
                                                                    </div>


                                                                </form>

                                                            </div>
                                                            <div class="col-7"
                                                                 style="border-left: thick solid #FA4953;">
                                                                <p style="text-align: left;">
                                                                    Alloggi locati: {{$dlod[0] -> CountPren }} </p>
                                                                <p style="text-align: left;">
                                                                    Offerte di alloggio nel
                                                                    sito: {{$doff[0] -> countAnn}} </p>
                                                                <p style="text-align: left;">
                                                                    Offerte di locazione
                                                                    effettuate: {{$dlon[0] -> countPren}} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('includes.script.stats')
    </section>

@stop

