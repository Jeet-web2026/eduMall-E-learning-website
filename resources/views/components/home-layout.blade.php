<x-main-layout tittle="Home" bodyId="main-content" description="1">

    @section('extra-cdn')
    {{--slick css cdn 1--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--slick css cdn 1--}}

    {{--slick css cdn 2--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{--slick css cdn 2--}}
    @endsection

    <x-navbar-layout />

    {{ $slot }}

    @section('javascript-cdn')
    {{--jquery cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--jquery cdn--}}

    {{--slick cdn--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{--slick cdn--}}
    @endsection

    @section('custom-javascript')
    <script>
        $(document).ready(function() {
            $('.category').slick({
                dots: false,
                infinite: true,
                arrows: true,
                speed: 300,
                slidesToShow: 6,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.category-wise-sort .category .card:odd').css({
                'background-color': '#ffc1071f',
            })

            $('.category-wise-sort .category .card:even').css({
                'background-color': '#dc35451f',
            });

            $('.slick-prev, .slick-next').addClass('shadow-lg rounded-1 bg-warning');

            $(document).on('click', '#logn_form_open', function() {
                $('#signup-form').hide();
                $('#login-form').fadeIn();
            });

            $(document).on('click', '#signup_form_open', function() {
                $('#login-form').hide();
                $('#signup-form').fadeIn();
            });

            $('#login-form, #order-login-form').hide();

            $(document).on('click', '#logn_form_open', function() {
                $('#order-signup-form').hide();
                $('#order-login-form').fadeIn();
            });

            $(document).on('click', '#signup_form_open', function() {
                $('#order-login-form').hide();
                $('#order-signup-form').fadeIn();
            });

        });
    </script>
    @endsection

    <x-popup-layout />

</x-main-layout>