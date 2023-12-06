<div class="auth__modalWrapper" id="modal_register">
    <div class="auth__modalOverlay"></div>
    <div class="auth__modalContent">
        <button class="auth__closeBtn">
            <span class="js-modal-close">×</span>
        </button>
        <div class="register__formWrapper">
            <div class="register__container">
                <div class="register__content">
                    <div class="register__back">
                        <i class="fa-solid fa-angle-left register__back-js"></i>
                    </div>
                    <div class="register__header">
                        <a href="">
                            <img src="" alt="">
                        </a>
                        <h1>Đăng ký tài khoản Blog</h1>
                    </div>
                    <div class="register__body">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="register__form">
                                <div class="formControl__wrapper">
                                    <div class="formInput__wrapper">
                                        <div class="formInput__labelGroup">
                                            <label class="formInput__label" for="">Tên</label>
                                        </div>
                                        <div class="formInput__inputWrapper">
                                            <input type="text" name="name" placeholder="Tên người dùng">
                                        </div>
                                        @if($errors->has('name'))
                                            <div class="text-danger" style="font-size: 14px; margin-left: 10px;">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                </div>
                                <div class="formControl__wrapper">
                                    <div class="formInput__wrapper">
                                        <div class="formInput__labelGroup">
                                            <label class="formInput__label" for="">Email</label>
                                        </div>
                                        <div class="formInput__inputWrapper">
                                            <input type="email" name="email" placeholder="Địa chỉ email">
                                        </div>
                                        @if($errors->has('email'))
                                            <div class="text-danger" style="font-size: 14px; margin-left: 10px;">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>

                                </div>
                                <div class="formControl__wrapper">
                                    <div class="formInput__wrapper">
                                        <div class="formInput__labelGroup">

                                        </div>
                                        <div class="formInput__inputWrapper">
                                            <input type="password" name="password" placeholder="Mật khẩu">
                                        </div>
                                        @if($errors->has('password'))
                                            <div class="text-danger" style="font-size: 14px; margin-left: 10px;">{{ $errors->first('password') }}</div>
                                        @endif
                                        <div class="register__formPassHint">
                                            <p>Gợi ý: Mật khẩu cần có ít nhất 8 kí tự</p>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="register__btnRegister">Đăng ký</button>

                            </div>
                        </form>
                        <p class="register__dontHaveAcc">Bạn đã có tài khoản? <a href="#" class="linking-login">Đăng nhập</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if($errors->has('name') || $errors->has('email') || $errors->has('password'))
    <script>
        $(function() {
            $('#modal_register').addClass('displayFlex');
        })
    </script>
@endif
