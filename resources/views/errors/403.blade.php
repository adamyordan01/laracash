{{-- @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden')) --}}
@include('includes.auth_style')
<body>
    <main>
        <section class="vh-100 d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <img class="img-fluid w-75" src="{{ asset('volt') }}/assets/img/illustrations/404.svg" alt="404 not found">
                            <h1 class="mt-5">Page not <span class="font-weight-bolder text-primary">found</span></h1>
                            <p class="lead my-4">Oops! Looks like you followed a bad link. If you think this is a
                                problem with us, please tell us.</p>
                            <a class="btn btn-primary animate-hover" href="/me"><i class="fas fa-chevron-left mr-3 pl-2 animate-left-3"></i>Go back home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@include('includes.auth_script')
    
</body>