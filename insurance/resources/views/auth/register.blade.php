@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <form class="register-form mb-3 w-30" action="{{ route('register.custom') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Название компании</label>
                    <input type="text" class="form-control" name="name">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('name'))
                            {{ $errors->first('name') }}
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text" class="form-control" id="phone-number" name="phone">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('phone'))
                            {{ $errors->first('phone') }}
                        @endif
                    </div>

                </div>
                <div class="form-group">
                    <label>Юридический адрес</label>
                    <input type="text" class="form-control" name="address">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('address'))
                            {{ $errors->first('address') }}
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" class="form-control" name="password">
                    <div class="help-block with-errors text-danger">
                        @if($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif
                    </div>
                </div>
                {{--                <div class="form-group">--}}
                {{--                    <label>Повторите пароль</label>--}}
                {{--                    <input type="password" class="form-control" name="confirmpassword">--}}
                {{--                </div>--}}
                <div class="text-center">
                    <input type="submit" name="registersubmit" class="btn btn-primary mt-2" value="Регистрация">
                </div>
            </form>
        </div>
    </div>
@endsection
