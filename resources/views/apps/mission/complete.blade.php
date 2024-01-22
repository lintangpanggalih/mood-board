@extends('apps.wrapper')
@section('title')
    Quiz ({{ $quiz->order ?? '-' }})
@endsection

@section('content')
    <div class="container text-center" style="height: 60vh;margin-top: 40vh;">
        <div id="result-wrapper" style="display: none;">
            <h1><b>Your score</b></h1>
            <h1 style="font-family: Arial, Helvetica, sans-serif;font-size: 40pt;">{{ $score }}</h1>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            let reaction_img = $(`
                <img class="centered-img article-board-img" id="reaction-img" src="{{ asset('img/elements/completion-reaction.png') }}" alt="">
            `);
            let reaction_words = $(`
                <img class="centered-img article-board-img" src="{{ asset('img/elements/completion-words.png') }}" alt="">
            `);
            setTimeout(() => {
                reaction_words.hide().fadeIn(500)
                $('.container').append(reaction_words)
            }, 500);
            setTimeout(() => {
                reaction_img.hide().fadeIn(500)
                $('.container').append(reaction_img)
            }, 1500);
            setTimeout(() => {
                $('#reaction-img').fadeOut(500)
                $('#result-wrapper').fadeIn(700)
            }, 2500);
        })
    </script>
@endpush
