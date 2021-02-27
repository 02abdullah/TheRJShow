@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if (count($errors)>0)
    <div class="alert alert-danger">
        <strong>Please check the below form for errors</strong>
    </div>
@endif
