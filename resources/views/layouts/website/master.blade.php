<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">

@include('layouts.website.main-head')
@yield('title_web')
@yield('css')
@section('css')
@endsection

<body id="bg" data-anm=".anm">

    <!--loader start -->
    @include('layouts.website.loading')
    <!--loader start -->

    <div class="page-wraper">
        <div class="page-content">

            @include('layouts.website.main-header')

            @yield('content')

            <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
        </div>

    </div>

    @include('layouts.website.main-footer')
    @include('layouts.website.scripts')
</body>
@yield('js')

</html>
