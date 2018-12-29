@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6  mt-5">
                <div class="card">
                    <div class="card-header info-color white-text text-center py-4">{{ __('ورود به سیستم') }}</div>
                    <div class="card-body">
                        <form method="POST" class="text-center" action="{{ route('login') }}"
                              aria-label="{{ __('Login') }}">
                            @csrf

                            <div class="md-form">
                                <label for="email">{{ __('آدرس ایمیل') }}</label>
                                <input id="email" type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                       value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="md-form">
                                <label for="password">{{ __('رمز عبور') }}</label>
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                          </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            <p style="margin-right: 25px">{{ __('مرا به خاطر بسپار') }}</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                    style="font-family: IRANSansWeb">
                                {{ __('ورود') }}
                            </button>

                            <a href="{{ route('password.request') }}">
                                {{ __('رمز عبور خود را فراموش کرده ام') }}
                            </a>

                            <p class="mt-4">کاربر جدید هستید؟
                                <a href="{{route('register')}}"> ثبت‌نام در همه چی کالا</a>
                            </p>

                            <!-- Social login -->
                            <p>یا ثبت نام از طریق:</p>
                            <a type="button" href="{{ url('/auth/facebook') }}" class="btn-floating btn-fb btn-sm waves-effect waves-light">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a type="button" href="{{ url('/auth/twitter') }}" class="btn-floating btn-tw btn-sm waves-effect waves-light">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a type="button" href="{{ url('/auth/linkedin') }}" class="btn-floating btn-li btn-sm waves-effect waves-light">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a type="button" href="{{ url('/auth/github') }}" class="btn-floating btn-git btn-sm waves-effect waves-light">
                                <i class="fa fa-github"></i>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
