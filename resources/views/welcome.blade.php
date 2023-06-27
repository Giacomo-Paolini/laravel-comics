@extends('layouts.app')

@section('content')
    <div class="container-fluid my-content bg-dark">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-wrap p-3">
                    @foreach ($products as $comic)
                        <div class="my-card d-flex justify-content-center">
                            <a class="links-main" href="#">
                                <img src="{{ $comic['thumb']}}">
                                <p class="mt-2">{{ $comic['series'] }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center align-items-center mt-2">
                    <button class="mb-4">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
@endsection