@extends('app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="greeting">
        <h1>🃏🍁</h1>
        <p class="greeting-content">
            初めまして！私たちの記録の一部です。
            創作・妄想・自己満が頭から足の爪先まで。
            ゆっくり見ていってね。
        </p>
    </div>

    <div class="introduction">
        <h2>About us</h2>
        <div class="character">
            <img class="jevil" src="{{ asset('images/Jevil_battle_static.webp') }}" data-modal="modalJevil">
            <img class="maple" src="{{ asset('images/IMG_1981.PNG') }}" data-modal="modalMaple">
        </div>
    </div>

    <!-- Jevil モーダル -->
    <div class="modal-overlay" id="modalJevil">
    <div class="modal-content modal-content__jevil">
        <span class="modal-close">&times;</span>
        <p>Jevil</p>
        <p>ATK:7 DFE:5</p>
        <p>カルタス城に幽閉されている<span class="modal-detail--red">謎の囚人</span></p>
    </div>
</div>

<!--maple モーダル-->
<div class="modal-overlay" id="modalMaple">
    <div class="modal-content modal-content__maple">
        <span class="modal-close">&times;</span>
        <p>Maple</p>
        <p>ATK:? DFE:?</p>
        <p>現実世界の<span class="modal-detail--red">プレイヤー</span></p>
    </div>
</div>

<div class="next-menu">
    <a class="next-nav" href="{{route('about')}}">
        <img class="next-icon" src="{{asset('images/IMG_2005.PNG')}}" alt="about">
    </a>
    <a class="next-nav" href="{{route('log')}}">
        <img class="next-icon" src="{{asset('images/IMG_2004.PNG')}}" alt="log">
    </a>
    <a class="next-nav" href="{{route('hidden')}}">
        <img class="next-icon" src="{{asset('images/IMG_2003.PNG')}}" alt="hidden">
    </a>
</div>



</main>

<script>
document.querySelectorAll('.character img').forEach(img => {
    const modal = document.getElementById(img.dataset.modal);
    const closeBtn = modal.querySelector('.modal-close');

    img.addEventListener('click', () => modal.classList.add('show'));

    closeBtn.addEventListener('click', () => modal.classList.remove('show'));

    modal.addEventListener('click', e => {
        if(e.target === modal) modal.classList.remove('show');
    });
});


</script>

@endsection
