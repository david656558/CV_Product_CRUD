@if(Session::has('message'))
    <div class="container">
        <div class="alert alert-success">
            <em>{!! session('message') !!}</em>
        </div>
    </div>
@endif
@if(Session::has('error'))
    <div class="container">
        <div class="alert alert-danger">
            <em>{!! session('error') !!}</em>
        </div>
    </div>
@endif
