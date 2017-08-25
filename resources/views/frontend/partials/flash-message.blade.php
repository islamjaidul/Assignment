@if($msg = Session::get('msg'))
    <div class="alert alert-info">
        {{ $msg }}
    </div>
@endif