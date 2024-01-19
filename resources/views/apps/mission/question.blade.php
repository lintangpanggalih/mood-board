@extends('apps.wrapper')
@section('title')
    Mission Board
@endsection

@section('content')
    <style>
        @media only screen and (max-device-width: 600px) and (orientation:portrait) {
            .question-board {
                top: 35vh;
                width: 90%;
                height: auto;
            }

            div.question-board {
                top: 16vh;
                width: 64%;
                height: auto;
                font-weight: bold;
            }

        }

        @media screen and (max-width: 375px) {
            div.question-board {
                top: 13vh;
                width: 64%;
                height: auto;
                font-weight: bold;
            }
        }

        @media screen and (min-width: 600px) {
            div.question-board {
                width: 50vh;
                top: 16vh;
                height: auto;
                font-weight: bold;
            }
        }
    </style>
    <img class="centered-img question-board" src="{{ asset('img/elements/28.png') }}" alt="">
    <div class="container" style="height: 100vh;">
        <div class="centered-img question-board" style="border: red 1pt solid;">LALALALAA</div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

        })
    </script>
@endpush
