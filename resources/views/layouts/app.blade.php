<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/a331d69947.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
</head>
<body>

<!-- Header -->
<header class="header">
    <div class="header__logo">
        <a class="" href="">
            Blog Dev
        </a>
    </div>
    <div class="header__search">
        <box-icon class="header__search-icon" name='search'></box-icon>
        <input id="search-input" type="text" placeholder="Tìm kiếm bài viết...">
        <box-icon class="header__close-icon" name='x'></box-icon>
    </div>
    <div class="header__btnLogin">
        <a>Đăng nhập</a>
    </div>
</header>

<main class="main">
    <!-- Left Side Bar -->
    <div class="main__sideBar">
        <div class="main_sideBarWrapper">
            <div class="main__createButtonWrapper">
                <i class="fa-solid fa-plus main__sideBarIcon main_sideBarCreateIcon"></i>
            </div>
            <ul class="main__sideBarList">
                <li>
                    <a class="main_sideBarItem main_sideBarItemActive" href="">
                        <i class="fa-solid fa-house main__sideBarIcon"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a class="main_sideBarItem" href="">
                        <i class="fa-solid fa-road main__sideBarIcon"></i>
                        <span>Lộ trình</span>
                    </a>
                </li>
                <li>
                    <a class="main_sideBarItem" href="">
                        <i class="fa-solid fa-lightbulb main__sideBarIcon"></i>
                        <span>Học</span>
                    </a>
                </li>
                <li>
                    <a class="main_sideBarItem" href="">
                        <i class="fa-brands fa-blogger-b main__sideBarIcon"></i>
                        <span>Blog</span>

                    </a>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')

</main>

<!-- Footer -->
<footer class="footer__wrapper">
    <section class="index_grid_wide index_grid_layout">
        <section class="row_layout">
            <section class="col_layout column_l-3">
                <div class="footer__warapperCol">
                    <div>
                        <div class="footer__columnTop">
                            <a href="">
                                <img src="{{ asset('images/f8-icon.18cd71cfcfa33566a22b.png') }}" alt="">
                            </a>
                            <h3 class="footer__sloganTop">Học Lập Trình Để Đi Làm</h3>
                        </div>
                        <p class="footer__contactList">
                            Điện thoại: <a href="tel:0246.329.1102">0246.329.1102</a>
                            <br>
                            Email: <a href="mailto:contact@fullstack.edu.vn">contact@fullstack.edu.vn</a>
                            <br>
                            Số 11D, lô A10, khu đô thị Nam Trung Yên, Phường Yên Hòa, Quận Cầu Giấy, TP. Hà Nội
                        </p>
                        <div class="footer__protected">

                        </div>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-2">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading">Về F8</h2>
                        <ul class="footer__ulist">
                            <li><a href="">Giới thiệu</a> </li>
                            <li><a href="">Liên hệ</a> </li>
                            <li><a href="">Điều khoản</a> </li>
                            <li><a href="">Bảo mật</a> </li>
                            <li><a href="">Cơ hội việc làm</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-2">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading">Sản phẩm</h2>
                        <ul class="footer__ulist">
                            <li><a href="">Game Nester</a></li>
                            <li><a href="">Game CSS Diner</a></li>
                            <li><a href="">Game CSS Selectors</a></li>
                            <li><a href="">Game Froggy</a></li>
                            <li><a href="">Game Froggy Pro</a></li>
                            <li><a href="">Game Scoops</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-2">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading">Công cụ</h2>
                        <ul class="footer__ulist">
                            <li><a href="">Tạo CV xin việc</a></li>
                            <li><a href="">Rút gọn liên kết</a></li>
                            <li><a href="">Clip-path maker</a></li>
                            <li><a href="">Snippet generator</a></li>
                            <li><a href="">CSS Grid generator</a></li>
                            <li><a href="">Cảnh báo sờ tay lên mặt</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="col_layout column_l-3">
                <div class="footer__warapperCol">
                    <div>
                        <h2 class="footer__heading"><a href="">CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC F8</a></h2>
                        <ul class="footer__ulist">
                            <li>Mã số thuế: 0109922901</li>
                            <li>Ngày thành lập: 04/03/2022</li>
                            <li>Lĩnh vực: Công nghệ, giáo dục, lập trình. F8 xây dựng và phát triển những sản phẩm mang lại giá trị cho cộng đồng.</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <section class="row_layout">
            <div class="footer__bottom">
                <p class="footer__copyright">© 2018 - 2023 F8. Nền tảng học lập trình hàng đầu Việt Nam</p>
                <div class="footer__social">
                    <a href=""><i class="fa-brands fa-square-youtube"></i></a>
                    <a href=""><i class="fa-brands fa-square-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </section>
    </section>

</footer>

<!-- Modal Register -->
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
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="register__header">
                        <a href="">
                            <img src="" alt="">
                        </a>
                        <h1>Đăng ký tài khoản Blog</h1>
                    </div>
                    <div class="register__body">
                        <div class="register__form">
                            <div class="formControl__wrapper">
                                <div class="formInput__wrapper">
                                    <div class="formInput__labelGroup">
                                        <label class="formInput__label" for="">Email</label>
                                    </div>
                                    <div class="formInput__inputWrapper">
                                        <input type="email" name="email" placeholder="Địa chỉ email">
                                    </div>
                                </div>
                            </div>
                            <div class="formControl__wrapper">
                                <div class="formInput__wrapper">
                                    <div class="formInput__labelGroup">

                                    </div>
                                    <div class="formInput__inputWrapper">
                                        <input type="password" name="password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="register__formPassHint">
                                        <p>Gợi ý: Mật khẩu cần có ít nhất 8 kí tự</p>
                                    </div>
                                </div>
                            </div>
                            <button class="register__btnRegister">Đăng ký</button>

                        </div>
                        <p class="register__dontHaveAcc">Bạn đã có tài khoản? <a href="">Đăng nhập</a></p>
                    </div>
                    <div class="register__acceptTerm">
                        <p>Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với <br>
                            <a href="">điều khoản sử dụng</a>
                            của chúng tôi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal Login -->
<div class="auth__modalWrapper" id="modal_login">
    <div class="auth__modalOverlay"></div>
    <div class="auth__modalContent">
        <button class="auth__closeBtn">
            <span class="js-modal-close">×</span>
        </button>
        <div class="register__formWrapper">
            <div class="register__container">
                <div class="register__content">
                    <div class="register__back">
                        <i class="fa-solid fa-angle-left"></i>
                    </div>
                    <div class="register__header">
                        <a href="">
                            <img src="" alt="">
                        </a>
                        <h1>Đăng nhập Blog</h1>
                    </div>
                    <div class="register__body">
                        <div class="register__form">
                            <div class="formControl__wrapper">
                                <div class="formInput__wrapper">
                                    <div class="formInput__labelGroup">
                                        <label class="formInput__label" for="">Email</label>
                                    </div>
                                    <div class="formInput__inputWrapper">
                                        <input type="email" name="email" placeholder="Địa chỉ email">
                                    </div>
                                </div>
                            </div>
                            <div class="formControl__wrapper">
                                <div class="formInput__wrapper">
                                    <div class="formInput__labelGroup">

                                    </div>
                                    <div class="formInput__inputWrapper">
                                        <input type="password" name="password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="register__formPassHint">
                                        <p>Gợi ý: Mật khẩu cần có ít nhất 8 kí tự</p>
                                    </div>
                                </div>
                            </div>
                            <button class="register__btnRegister" id="login_submit">Đăng nhập</button>
                            <div class="login__partnerWrapper">
                                <img src="{{ asset('images/google-18px.svg') }}" alt="Đăng nhập với Google" class="login_partnerIcon">
                                <span class="login_partnerTitle">Tiếp tục với Google</span>
                            </div>
                            <div class="login__partnerWrapper">
                                <img src="{{ asset('images/facebook-18px.svg') }}" alt="Đăng nhập với Facebook" class="login_partnerIcon">
                                <span class="login_partnerTitle">Tiếp tục với Facebook</span>
                            </div>
                        </div>
                        <p class="register__dontHaveAcc">Bạn chưa có tài khoản? <a href="">Đăng ký</a></p>
                    </div>
                    <div class="register__acceptTerm">
                        <p>Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với <br>
                            <a href="">điều khoản sử dụng</a>
                            của chúng tôi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('scripts')
</body>
<script src="{{ asset('js/header.js') }}"></script>
<script src="{{ asset('js/register.js') }}"></script>

</html>
