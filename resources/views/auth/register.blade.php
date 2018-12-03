@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-6 mt-5">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>{{ __('ثبت نام در سایت') }}</strong>
                </h5>
                <div class="card-body px-lg-5 pt-0">
                    <form method="POST" class="text-center" style="color: #757575;" action="{{ route('register') }}"
                          aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="md-form">
                            <label for="name">{{ __('نام و نام خانوادگی') }}</label>
                            <input id="name" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                   value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="md-form">
                            <label for="email">{{ __('آدرس ایمیل') }}</label>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                   value="{{ old('email') }}" required>
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

                        <div class="md-form">
                            <label for="password-confirm">{{ __('تکرار رمز عبور') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation" required>
                        </div>
                        <button type="submit"
                                class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                style="font-family: IRANSans">
                            {{ __('ثبت نام') }}
                        </button>

                        <!-- Social register -->
                        <p>یا از طریق:</p>

                        <a type="button" class="btn-floating btn-fb btn-sm waves-effect waves-light">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a type="button" class="btn-floating btn-tw btn-sm waves-effect waves-light">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a type="button" class="btn-floating btn-li btn-sm waves-effect waves-light">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a type="button" class="btn-floating btn-git btn-sm waves-effect waves-light">
                            <i class="fa fa-github"></i>
                        </a>
                        <hr>
                        <!-- Terms of service -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialUnchecked">
                            <label class="form-check-label" for="materialUnchecked">
                                <p style="margin-right: 25px;">
                                    <a href="" target="_blank">حریم خصوصی</a> و
                                    <a href="" target="_blank">شرایط و قوانین </a>
                                    استفاده از سرویس های سایت دیجی‌کالا را مطالعه نموده و با کلیه موارد آن موافقم.
                                </p>
                            </label>
                        </div>

                        <p>قبلا در دیجی‌کالا ثبت‌نام کرده‌اید؟ <a href="{{route('login')}}">وارد شویــد</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
