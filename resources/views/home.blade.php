@extends('layouts.app')

@section('content')
<h1>{{ $comics[0]["title"] }}</h1>
<p>This is my paragraph content.</p>
<button class="btn btn-primary">Cliccami</button>
@endsection