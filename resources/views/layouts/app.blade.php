<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Eve Blog')</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top-bar.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://kit.fontawesome.com/a331d69947.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @yield('css')
</head>
<body>

<!-- Header -->
@include('layouts.header')
<main class="main">
    <!-- Left Side Bar -->
    @include('layouts.side-bar')
    @yield('content')

</main>

<!-- Footer -->
@include('layouts.footer')

<!-- Modal Register -->
@include('auth.register')

<!-- Modal Login -->
@include('auth.login')


@yield('scripts')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

<script>
    $('.auth__closeBtn').on('click', function() {
        $('#modal_login').removeClass('displayFlex');
        $('#modal_register').removeClass('displayFlex');
    });

    $('.header__btnRegister').on('click', function() {
       $('#modal_register').addClass('displayFlex');
    });

    $('.linking-login').on('click', function() {
       $('#modal_login').addClass('displayFlex');
    });

    $('.register__back-js').on('click', function() {
        $('#modal_login').addClass('displayFlex');
    });

    $('.auth__modalWrapper').on('click', function() {
        $('#modal_login').removeClass('displayFlex');
        $('#modal_register').removeClass('displayFlex');
    });

    $('.auth__modalContent').on('click', function(event) {
        event.stopPropagation();
    });

    $('#avatar_profile').on('click', function() {
        // Đảo ngược giá trị của thuộc tính aria-expanded
        var currentAriaExpanded = $(this).attr("aria-expanded");
        $(this).attr("aria-expanded", currentAriaExpanded === "true" ? "false" : "true");
        if(currentAriaExpanded === 'false') {
            $('#tippy-7').removeClass('show-profile');
            $('#tippy-7').css('display', 'none');
        } else {
            $('#tippy-7').addClass('show-profile');
            $('#tippy-7').css('display', 'block');
        }
    });

$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $('.text-danger').children("strong").text("")
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('login.store') }}",
            data: formData,
            success: () => window.location.assign("{{ route('dashboard') }}"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;

                    Object.keys(errors).forEach(function(key) {
                        console.log(key)
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    })
                } else {
                    window.location.reload();
                }
            }
        })
    })
});



</script>
<script src="{{ asset('js/header.js') }}"></script>
<script src="{{ asset('js/register.js') }}"></script>

</html>
