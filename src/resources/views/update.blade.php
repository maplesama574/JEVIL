@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/update.css') }}">
@endsection

@section('content')
    <h2>XOX</h2>
    <div class="diary">
        <form action="/log/update" method="POST">
            @csrf
            <div class="XOX_table">
                <input type="date" name="date"><!--記入するタイプのがいい-->
                <input type="text" name="name" placeholder="今日は何があった？">
                <textarea name="content" id=""></textarea>
                <label for="photo">
                    <input type="file" id="photo" name="photo" accept="image/*">
                </label>
            </div>
            <div class="button">
                <button class="upload-button">記録に残す</button>
            </div>
        </form>
    </div>
</div>

@endsection