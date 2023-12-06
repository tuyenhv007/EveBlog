<div class="auth__modalWrapper" id="modal_login">
    <div class="auth__modalOverlay"></div>
    <div class="auth__modalContent">
        <button class="auth__closeBtn">
            <span class="js-modal-close">×</span>
        </button>
        <div class="register__formWrapper">
            <div class="register__container">
                <div class="register__content">
                    <div class="register__header">
                        <a href="">
                            <img src="" alt="">
                        </a>
                        <h1>Đăng nhập Blog</h1>
                    </div>
                    <div class="register__body">
                        <div class="register__form">
                            <form id="registerForm" method="POST">
                                @csrf
                                <div class="formControl__wrapper">
                                    <div class="formInput__wrapper">
                                        <div class="formInput__labelGroup">
                                            <label class="formInput__label" for="">Email</label>
                                        </div>
                                        <div class="formInput__inputWrapper">
                                            <input type="email" name="email" placeholder="Địa chỉ email">
                                        </div>
                                        <span class="text-danger" id="emailError">
                                                <strong style="font-size: 12px;"></strong>
                                        </span>
                                    </div>
                                </div>
                                <div class="formControl__wrapper">
                                    <div class="formInput__wrapper">
                                        <div class="formInput__labelGroup"></div>
                                        <div class="formInput__inputWrapper">
                                            <input type="password" name="password" placeholder="Mật khẩu">
                                        </div>
                                        <span class="text-danger" id="passwordError">
                                                <strong style="font-size: 12px;"></strong>
                                        </span>
                                        <div class="register__formPassHint">
                                            <p>Gợi ý: Mật khẩu cần có ít nhất 8 kí tự</p>
                                        </div>
                                        <div class="forgot-password">
                                            <a href="{{ route('password.forgot') }}" target="_blank">Quên mật khẩu ?</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="register__btnRegister" type="submit" id="login_submit">Đăng nhập</button>
                            </form>
                            <div class="login__partnerWrapper">
                                <img src="{{ asset('images/google-18px.svg') }}" alt="Đăng nhập với Google" class="login_partnerIcon">
                                <span class="login_partnerTitle">Tiếp tục với Google</span>
                            </div>
                            <div class="login__partnerWrapper">
                                <img src="{{ asset('images/facebook-18px.svg') }}" alt="Đăng nhập với Facebook" class="login_partnerIcon">
                                <span class="login_partnerTitle">Tiếp tục với Facebook</span>
                            </div>
                        </div>
                        <p class="register__dontHaveAcc">Bạn chưa có tài khoản? <a href="#" class="registerBtn">Đăng ký</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
