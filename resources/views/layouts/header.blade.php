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
    @auth
    <div class="NavBar_avatar-wrapper__j7jMj" aria-expanded="false" id="avatar_profile">
        <div class="FallbackAvatar_avatar__gmj3S" style="--font-size: 3.2px;">
            <img class="NavBar_avatar__OG7ib" src="{{ asset('images/sampleAvatar.jpg') }}" alt="Tuyến Hoàng Văn">
        </div>
    </div>
    @include('layouts.user-menu')
    @elseguest
    <div class="auth-btn-group">
        <div class="header__btnLogin">
            <a>Đăng nhập</a>
        </div>
        <div class="header__btnRegister">
            <a>Đăng ký</a>
        </div>
    </div>
    @endauth
</header>