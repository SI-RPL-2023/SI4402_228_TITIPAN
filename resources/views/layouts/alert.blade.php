@if ($message = Session::get('success'))
<div class="col-md-3">
    <div class="alert alert-success alert-dismissible fade show" onclick="closeAlert()" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="col-md-3">
    <div class="alert alert-danger alert-dismissible fade show" onclick="closeAlert()" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    </dir>
    @endif