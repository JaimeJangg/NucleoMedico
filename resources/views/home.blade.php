@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @php 
                        $suma = 1 + 2;
                    @endphp
                    You are logged in!
                    @foreach(\App\TypeUser::all() as $type)
                        <a href="google.com">{{$type->type}} {{$suma}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
