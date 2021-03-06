@extends('backend.layouts.app')

@section('content')
<div class="sign section--bg" data-bg="{{ asset('img/section/section.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- reset form -->
                    <form action="{{ route('password.email') }}" class="sign__form" method="post">
                        @csrf

                        <a href="/" class="sign__logo">
                            <img src="{{ asset('img/logo.svg') }}" alt="">
                        </a>

                        <div style="color: #fff; text-align: center; margin-bottom: 12px;">Reset Password</div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="sign__group">
                            <input id="email" type="email" class="sign__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <button class="sign__btn" type="submit">Reset Password</button>

                        <p style="color: #fff; text-align: center;">OR</p>

                        <div class="sign__group">
                            <a href="{{ route('login.google') }}" class="btn btn-danger btn-block"><i class="icon ion-logo-google" style="font-size: 18px; margin-right: 3px;"></i> Sign in with Google</a>
                            <a href="{{ route('login.facebook') }}" class="btn btn-primary btn-block"><i class="icon ion-logo-google" style="font-size: 18px; margin-right: 3px;"></i> Sign in with Facebook</a>
                            <a href="{{ route('login.github') }}" class="btn btn-dark btn-block"><i class="icon ion-logo-google" style="font-size: 18px; margin-right: 3px;"></i> Sign in with Github</a>
                        </div>
                    </form>
                    <!-- reset form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
