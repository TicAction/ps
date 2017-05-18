@include('layouts.frontHeader')
@include('layouts.nav')

<div class="container">
    <div class="row">
        @if(count($errors) >0))
        <div class="alert alert-dismissible alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert
                message</a>.
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-2">

            @include('partials.leftside')

        </div>


        <div class="col-md-8">

            @yield('content')

        </div>

        <div class="col-md-2">

        @include('partials.rightside')

        </div>


    </div>


</div>


@include('layouts.footer')