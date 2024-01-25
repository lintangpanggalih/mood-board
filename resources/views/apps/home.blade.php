@extends('apps.wrapper')
@section('title')
    Home
@endsection

@section('content')
    {{-- <embed src="{{ asset('music/a-whole-new-world.mp3') }}" loop="true" autostart="true"> --}}
    <button id="start">Start</button>
    <button id="stop">Stop</button>
    <audio id="bg-music" src="{{ asset('music/a-whole-new-world.mp3') }}" autoplay></audio>

    <img class="centered-img" src="{{ asset('img/elements/welcome.png') }}" alt="">
@endsection
@push('scripts')
    <script>
        const music = document.getElementById('bg-music');
        $('#start').click(function() {
            music.play()
        })
        // $('#stop').click(function() {
        //     music.pause();
        //     music.currentTime = 0;

        // })
        $(document).ready(function() {
            // $('#start').trigger('click')
            $(this).click(function() {
                // location.href = '{{ route('register') }}';
            })
        });
    </script>
@endpush
