@extends('layouts.app')

@section('navbar')
    @include('partial.navbar-index-page')
@endsection

@section('content')

<div class="wrapper bg-primary text-light pt-4">
    <section id="home-page">
        <div class="container-fluid full-height">
            <div class="text-center">
                <div class="title">
                    <div class="list__item color-3">
						<h3 class="list__text">Avtoservis</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontakt">
        <div style="padding-top:80px"></div>
        <div class="container-fluid py-3 bg-secondary text-dark">
            <div class="text-center mb-2">
                <div class="title">
                    Kontakt
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    {{-- <img src="https://via.placeholder.com/700x500" alt="Zemljevid" class="img-fluid rounded"> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.047254914646!2d14.46673181554057!3d46.05015567911233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47652d433879fbd9%3A0xf3614360b12cc862!2sFakulteta+za+ra%C4%8Dunalni%C5%A1tvo+in+informatiko!5e0!3m2!1ssl!2ssi!4v1558469734699!5m2!1ssl!2ssi" height="600" frameborder="0" style="width: 100%;border:0" allowfullscreen></iframe>
                </div>
                {{-- <div class="col-lg pt-3">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="contact-name">Ime</label>
                            <input id="contact-name" type="text" class="form-control @error('contact-name') is-invalid @enderror" name="contact-name" value="{{ old('contact-name') }}" required placeholder="Vnesite ime">
                            <div class="valid-feedback">Success! You've done it.</div>
                            @error('contact-name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact-lastname">Priimek</label>
                            <input id="contact-lastname" type="text" class="form-control @error('contact-lastname') is-invalid @enderror" name="contact-lastname" value="{{ old('contact-lastname') }}" required placeholder="Vnesite priimek">
                            <div class="valid-feedback">Success! You've done it.</div>
                            @error('contact-lastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact-mail">Elektronska pošta</label>
                            <input id="contact-mail" type="email" class="form-control @error('contact-mail') is-invalid @enderror" name="contact-mail" value="{{ old('contact-mail') }}" required pattern="*@*" placeholder="Vnesite elektronsko pošto">
                            <div class="valid-feedback">Success! You've done it.</div>
                            @error('contact-mail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact-number">Telefonska številka</label>
                            <input id="contact-number" type="number" class="form-control @error('contact-number') is-invalid @enderror" name="contact-number" value="{{ old('contact-number') }}" required placeholder="Vnesite telefonsko številko">
                            <div class="valid-feedback">Success! You've done it.</div>
                            @error('contact-number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact-message">Sporočilo</label>
                            <textarea id="contact-message" class="form-control @error('contact-message') is-invalid @enderror" name="contact-message" value="{{ old('contact-message') }}" required cols="10" rows="5" placeholder="Vnesite sporočilo"></textarea>
                            <div class="valid-feedback">Success! You've done it.</div>
                            @error('contact-message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-padding">Pošlji</button>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </section>

    <a href="#top" id="scroll_to_top" class="btn btn-primary smooth_scroll" data-tooltip="Do vrha" data-tippy="Do vrha">
        <i class="material-icons">keyboard_arrow_up</i>
    </a>
</div>

@endsection

@section('vueApp')
    <script src="{{ asset('js/segment.min.js') }}" defer></script>
    <script src="{{ asset('js/d3-ease.v0.6.js') }}" defer></script>
    <script src="{{ asset('js/letters.js') }}" defer></script>
    <script src="{{ asset('js/home-page.js') }}" defer></script>
@endsection
