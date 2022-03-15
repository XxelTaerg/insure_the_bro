<!-- Sigin/Register Form -->
<div class="user-login-form-wrap">
    <a href="#" class="signin-form-trigger abs-trigger-right"><span class="ti-close text-light"></span></a>
    <div class="user-login-inner">
        <div class="user-login-wrap rounded active">
            <h5 class="text-center mt-2 mb-3">Вход</h5>
            <form class="signin-form mb-3" action="{{ route('login.custom') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <a href="#" class="trigger-register-form">Регистрация</a> / <a href="#"
                                                                                   class="trigger-forget-form">Забыли
                        пароль?</a>
                </div>
                <input type="submit" name="logsubmit" class="btn btn-primary mt-2" value="Вход">
            </form>
        </div>
        <div class="forget-password-wrap rounded">
            <a href="#" class="trigger-login-form abs-trigger-right"><span class="ti-close"></span></a>
            <h5 class="text-center mt-2 mb-3">Забыли пароль?</h5>
            <form class="forget-password-form mb-3">
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <input type="submit" name="forgetsubmit" class="btn btn-primary mt-2" value="Submit">
            </form>
        </div>
        <div class="user-registration-wrap rounded">
            <a href="#" class="trigger-login-form abs-trigger-right"><span class="ti-close"></span></a>
            <h5 class="text-center mt-2 mb-3">Регистрация</h5>
            <form class="register-form mb-3" action="{{ route('register.custom') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Название компании</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Email адрес</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label>Юридический адрес</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input type="password" class="form-control" name="password">
                </div>
                {{--                <div class="form-group">--}}
                {{--                    <label>Повторите пароль</label>--}}
                {{--                    <input type="password" class="form-control" name="confirmpassword">--}}
                {{--                </div>--}}
                <input type="submit" name="registersubmit" class="btn btn-primary mt-2" value="Регистрация">
            </form>
        </div>
    </div><!-- .user-login-inner -->
</div><!-- .user-login-form-wrap -->

