@extends('layouts.app')

@section('content')

<div class="container">
    <img class="showThumb" src="{{ $fumetto->thumb }}" alt="">
</div>


<div class="container">
    <div class="row py1">
        <div class="col-9">
            <h3>{{ $fumetto->title }}</h3>
            <p>U.S Price: {{ $fumetto->price }}</p>
            <p>{{ $fumetto->description }}</p>

            <div>
                <a href="{{ route('comics.edit', $fumetto->id) }}" type="submit" class="btn btn-warning">Modifica</a>
            </div>
        </div>
        <div class="col-3">
            <img src="/adv.jpg" alt="">
        </div>
    </div>
</div>
@endsection