<!DOCTYPE html>
<html lang="{{ config('app.locale') }}" dir="ltr">

@include('layouts.website.main-head')
@section('css')
@endsection


<body id="bg" data-anm=".anm">

    <!--loader start -->
    <div id="loading-area" class="loading-page-1">
        <div class="loader">
            <div class="ball one"></div>
            <div class="ball two"></div>
            <div class="ball three"></div>
            <div class="ball four"></div>
        </div>
    </div>
    <!--loader start -->

    <div class="page-wraper">

        @include('layouts.website.main-header')

        <div class="page-content">
            @yield('content')
        </div>


        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>

    @include('layouts.website.main-footer')
    @include('layouts.website.scripts')
</body>

</html>
