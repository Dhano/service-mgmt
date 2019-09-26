@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-user"></i></a></li>
    <li class="breadcrumb-item"><a href="/admin/services">Service</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Service</li>
@endsection

@section('page-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Add Service</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form method="post" action="/admin/services">
                        @csrf

                        <div class="form-group">
                            <div class="input-group input-group-merge @error('name') has-danger @enderror">
                                <div class="input-group-prepend"> <span class="input-group-text"> <i class="fa fa-user"></i> </span> </div> <input  value="{{ old('name') }}" required name="name" type="text" placeholder="Service Name" class="form-control @error('name') is-invalid @enderror">
                            </div>
                            @error('name')
                            <div class="invalid-feedback" style="display: block">{{ $message }}</div>
                            @enderror
                        </div>


                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section ('custom-script')
    <script src="{{ asset("/js/shape/add-shape.js") }}"></script>

    @if(session()->has('type'))
        <script>
            $.notify({
                // options
                title: '<h4 style="color:white">{{ session('title') }}</h4>',
                message: '{{ session('message') }}',
            },{
                // settings
                type: '{{ session('type') }}',
                allow_dismiss: true,
                placement: {
                    from: "top",
                    align: "right"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 3000,
                timer: 1000,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            });
        </script>
    @endif
@endsection
