@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3">
                    @foreach($quests as $quest)
                        <img src="{{ asset('/images') . $quest->foto }}" class="card-img-top" alt="Фото квеста">
                        <div class="card-body">
                            <h5 class="card-title">{{ $quest->name }}</h5>
                            <p class="card-text">{{ $quest->disc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <quest-component></quest-component>

    </div>
@endsection
