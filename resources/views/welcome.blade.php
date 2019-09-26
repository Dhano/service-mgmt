@extends('layouts.base')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/home"><i class="fas fa-user"></i></a></li>
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Welcome</li>
@endsection

@section('page-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Welcome</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    WELCOME JAY
                </div>
            </div>
        </div>
    </div>
@endsection