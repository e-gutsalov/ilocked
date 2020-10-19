@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row row-cols-1 row-cols-md-3">
                    @foreach($quests as $quest)
                        <a class="" href="/quest/{{ $quest->id }}" role="button">
                            <div class="col mb-4">
                                <div class="card bg-dark text-white">
                                    <img src="{{ asset('/images') . $quest->foto }}" class="card-img" alt="Фото квеста">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title">{{ $quest->name }}</h5>
                                        <!--p class="card-text">{{ $quest->disc }}</p-->
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
