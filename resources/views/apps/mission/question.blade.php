@extends('apps.wrapper')
@section('title')
    Mission Board
@endsection

@section('content')
    <style>
        #answers {
            padding-top: 30px;
        }

        .answer-content {
            width: 100%;
        }

        .question-board {
            color: #fff;
        }

        .btn-submit-img {
            text-align: center;
            position: relative;
            margin-top: -20px;
            width: 100%;
        }

        @media only screen and (max-device-width: 600px) and (orientation:portrait) {
            .question-board {
                top: 37vh;
                width: 95%;
                height: auto;
            }

            div.question-board {
                top: 22vh;
                width: 64%;
                height: 100px;
                /* font-weight: bold; */
                font-size: 17pt;
            }

            .answer-content {
                z-index: 12;
                font-weight: bold;
                color: maroon;
                font-size: 15pt;
            }

        }

        @media screen and (max-width: 425px) {
            div.question-board {
                top: 20vh;
                width: 64%;
                height: 100px;
                /* font-weight: bold; */
                font-size: 15pt;
            }
        }
        @media screen and (max-width: 380px) {
            div.question-board {
                top: 17vh;
                width: 64%;
                height: 100px;
                /* font-weight: bold; */
                font-size: 15pt;
            }

            .answer-content {
                z-index: 12;
                font-weight: bold;
                color: maroon;
                font-size: 15pt;
            }
        }

        @media screen and (min-width: 600px) {
            #answers {
                width: 55vh;
                margin: auto;
                padding-top: 10vh;
            }

            .question-board {
                top: 48vh;
                width: 30%;
                height: auto;
            }

            div.question-board {
                top: 25vh;
                width: 45vh;
                height: 100px;
                /* font-weight: bold; */
                font-size: 18pt;
            }

            .answer-content {
                top: 95px;
                z-index: 12;
                font-weight: bold;
                color: maroon;
                font-size: 15pt;
            }
        }
    </style>
    <img class="centered-img question-board" src="{{ asset('img/elements/28.png') }}" alt="">
    <div class="container" style="height: 60vh;margin-top: 40vh;">
        <div class="centered-img question-board">
            {{ $quiz->question }}
        </div>
        <div class="row" id="answers" style="text-align: center;">
            @foreach ($quiz->answers as $answer)
                <div class="col-12">
                    <button class="btn-submit-img">
                        <img src="{{ asset('img/elements/29-copy.png') }}" alt="" height="110vh" width="100%">
                        <div class="centered-img answer-content">
                            {{ $answer->option }}
                        </div>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

        })
    </script>
@endpush
