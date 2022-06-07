@extends('layouts/default')
@section('content')


    <section class="find_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form_tab_container">
                        <div class="tab-content text-center">
                            <div class="tab-pane active" id="rent">
                                <div class="Rent_form find_form">
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="form-row"> <!-- Domanda e Risposta -->
                                            <div class="col-md-6 px-0">
                                                <div class="form-group ">
                                                    <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <img src="" alt="Domanda" />
                                                            </div>
                                                        </div>
                                                        <label for="ndomanda"> Domanda: </label><br>
                                                        <input type="text" id="domanda" name="domanda" class="form-control" placeholder="domanda"  > </input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-0">
                                                <div class="form-group ">
                                                    <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <img src="" alt="Risposta" />
                                                            </div>
                                                        </div>
                                                        <label for="nrisposta">Risposta:</label><br>
                                                        <textarea id="risposta" name="risposta" rows="4" cols="50" placeholder="risposta" > </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="btn-box">
                                            <button type="submit">
                                                <span>
                                                    SALVA
                                                </span>
                                            </button>
                                        </div>
                                    </form>
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
