@if ($message = Session::get('success'))
    <div class="row" style="padding-top: 15px">
        <div class="alert alert-success alert-block" style="padding-top: 15px">
            <strong>{{ $message }}</strong>
        </div>
    </div>
@endif

@if (count($errors)>0)
    <div class="row" style="padding-top: 15px">
        <div class="alert alert-danger">
            <strong>Please check for errors</strong>
        </div>
    </div>
@endif
