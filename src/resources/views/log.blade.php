@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/log.css') }}">
@endsection

@section('content')
    <h2>Diary</h2>
    <div class="diary">
        <form action="/log/update" method="POST">
            @csrf
            
        </form>
    </div>
</div>

@endsection