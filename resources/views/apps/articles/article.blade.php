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
            transform: translate(-50%, -40%);
            height: 50vh;
            width: 22vw;
            font-size: 15pt;
            overflow-y: auto;
            color: #000;
            line-height: 1.2em;
            padding-bottom: 10px;
            z-index: 12;
        }

        .article-board h5 {
            text-align: center;
        }

        @media screen and (max-width: 600px) {
            .article-board-img {
                top: 40vh;
                width: 100vw;
                height: auto;
            }
            div.article-board {
                transform: translate(-50%, -55%);
                height: 40vh;
                width: 70vw;
            }
        }
        @media screen and (max-width: 400px) {

            div.article-board {
                transform: translate(-50%, -50%);
                height: 45vh;
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
