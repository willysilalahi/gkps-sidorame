@if ($message = Session::get('message'))
    <div class="alert alert-info alert-dismissible fade show mt-2 " role="alert">
        <strong>Yayy !</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if ($message = Session::get('errormessage'))
    <div class="alert alert-danger alert-dismissible fade show mt-2 " role="alert">
        <strong>Oopps !</strong> {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
