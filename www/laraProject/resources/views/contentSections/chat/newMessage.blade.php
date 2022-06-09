<section class="find_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="form_tab_container">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="rent">
                            <div class="Rent_form find_form">

                                <form method="POST" action="sendMessage" >
                                    {{ csrf_field() }}

                                    @if (Session::has('message'))
                                        <div class='alert-warning'>
                                            {{ Session::get('message') }}
                                        </div>
                                    @endif



                                    <div class="form-row"> <!-- Destinatario-->
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <input type="text" name="destinatario" placeholder="Username destinatario" class="form-control" required>
                                            </div>
                                        </div>

                                        <center> <!-- Messaggio -->
                                            <div class="col-md-6sd px-0">
                                                <div class="form-group ">
                                                    <label class="label">Descrizione</label>
                                                    <textarea name="messaggio" max="500" rows="50" cols="50" placeholder="Messaggio" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </center>


                                        <div class="btn-box">
                                            <button type="submit">
                        <span>
                          INVIA MESSAGGIO
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
