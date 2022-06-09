<section class="find_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="form_tab_container">
                    <div class="tab-content text-center">
                        <div class="tab-pane active" id="rent">
                            <div class="Rent_form find_form">
                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif
                                <form method="POST" action="update">
                                    @csrf
                                    <div class="form-row"> <!-- Nome e Cognome -->
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/nome.png') }}"
                                                                 alt="User Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="nuovo_nome" class="form-control" required
                                                           value={{Auth::user()->nome}} />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/nome.png') }}"
                                                                 alt="User Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="nuovo_cognome" class="form-control"
                                                           required value={{Auth::user()->cognome}} />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row"> <!-- Username e Password-->
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/user.png') }}"
                                                                 alt="User Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="nuovo_username" class="form-control"
                                                           required minlenght="4" value={{Auth::user()->username}} />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/email.png') }}"
                                                                 alt="Email image"/>
                                                        </div>
                                                    </div>
                                                    <input type="email" name="nuova_email" class="form-control"
                                                           id="inputRentDestination" required
                                                           value={{Auth::user()->email}} />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row"> <!-- Username e Password-->
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/pass.png') }}"
                                                                 alt="Password Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="nuova_password" class="form-control"
                                                           alphaNum placeholder="Nuova password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/pass.png') }}"
                                                                 alt="Password image"/>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="conferma_password" class="form-control"
                                                           placeholder="Conferma password"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row"> <!-- Data di nascità e Codice Fiscale-->
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/calendario.png') }}"
                                                                 alt="Calendar Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="date" name="nuova_data_nascita" min="1900-01-01"
                                                           max="2022-12-31" class="form-control" required
                                                           value={{Auth::user()->data_nascita}} />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/codice.png') }}"
                                                                 alt="Code Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="text" name="nuovo_c_fiscale" class="form-control"
                                                           required maxlength="16"
                                                           value={{Auth::user()->c_fiscale}} maxlength="16"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="form-row"> <!-- Prefisso e Telefono-->
                                            <div class="col-md-6_2 px-02">
                                                <div class="form-group ">
                                                    <div class="input-group">
                                                        <input type="text" name="nuovo_prefisso" class="form-control"
                                                               required minlenght="3" maxlength="3"
                                                               value={{Auth::user()->prefisso}} size="3"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-0">
                                                <div class="form-group ">
                                                    <div class="input-group ">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <img src="{{ URL('images/icon/phone.png') }}"
                                                                     alt="Phone Image"/>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="nuovo_numero" class="form-control"
                                                               required minlenght="10" maxlength="10"
                                                               value={{Auth::user()->numero}} />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </center>
                                    <hr>
                                    <center> <!-- Email -->
                                        <div class="col-md-6 px-0">
                                            <div class="form-group ">
                                                <div class="input-group ">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <img src="{{ URL('images/icon/pass.png') }}"
                                                                 alt="Password Image"/>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="password_attuale" class="form-control"
                                                           placeholder="Password attuale"/>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
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
