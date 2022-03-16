@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <form action="{{ route('auth.login') }}" class="w-30" method="post">
                @csrf

                <div class="contact-form">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                           placeholder="Email"
                           required="required">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </div>
                </div>

                <div class="contact-form">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password"
                           placeholder="Пароль" required="required">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif
                    </div>
                </div>

                <div class="mb-2 mt-2">
                    <a href="{{ route('auth.register-show') }}">Ещё нет аккаунта? Зарегистрироваться</a>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary mt-2 w-25" value="Вход">
                </div>
            </form>
        </div>
    </div>

@endsection
