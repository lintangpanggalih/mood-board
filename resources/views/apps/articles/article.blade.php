@extends('apps.wrapper')
@section('title')
    Mission Board
@endsection

@section('content')
    <style>
        .article-board-img {
            top: 37%;
            width: 45vh;
            height: auto;
            /* aspect-ratio: 1/2; */
        }

        div.article-board {
            top: calc(7% + 350px);
            height: 350px;
            width: 33vh;
            font-size: 15pt;
            overflow-y: auto;
            color: #000;
            line-height: 1.2em;
            border: red 1pt solid;
            padding-bottom: 10px;
        }

        .article-board h5 {
            text-align: center;
        }

        @media screen and (max-width: 415px) {
            .article-board-img {
                top: 40vh;
                width: 100vw;
                height: auto;
            }

            div.article-board {
                top: calc(5% + 300px);
                height: 300px;
                width: 70vw;
            }
        }

        @media screen and (min-width: 600px) {
            .article-board-img {
                top: 48%;
                width: 30vw;
                height: auto;
            }

        }
    </style>
    <img class="centered-img article-board-img" src="{{ asset('img/elements/31.png') }}" alt="">
    <div class="container" style="height: 60vh;margin-top: 40vh;">
        <div class="centered-img article-board">
            <h5 style="color: maroon;font-weight: bold;">"{{ $article->title }}"</h5>
            <p>{!! $article->content !!}</p>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

        })
    </script>
@endpush
