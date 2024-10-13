<!-- resources/views/front/layout/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
@include('front.inc.head')

<body>
    @include('front.inc.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('front.inc.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>