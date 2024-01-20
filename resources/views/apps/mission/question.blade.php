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

        .answer-content.cube {
            top: 10vh;
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
            .question-board-img {
                top: 37%;
                width: 50vh;
                height: auto;
            }

            div.question-board {
                top: 20%;
                width: 35vh;
                /* height: 10vh; */
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

            .question-board-img {
                top: 50vh;
                width: 95vw;
                height: auto;
            }

            div.question-board {
                top: 26vh;
                width: 70vw;
                /* height: 100px; */
                /* font-weight: bold; */
                font-size: 15pt;
            }
        }

        @media screen and (max-width: 415px) {
            .question-board-img {
                top: 40vh;
                width: 95vw;
                height: auto;
            }

            div.question-board {
                top: 25%;
                /* width: 64%; */
                /* height: 100px; */
                /* font-weight: bold; */
                /* font-size: 15pt; */
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

            .question-board-img {
                top: 48%;
                width: 30vw;
                height: auto;
            }

            div.question-board {
                top: 30%;
                width: 20vw;
                height: auto;
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

            .answer-content.cube {
                top: 20vh;
            }
        }
    </style>
    <img class="centered-img question-board-img" src="{{ asset('img/elements/28.png') }}" alt="">
    <div class="container" style="height: 60vh;margin-top: 40vh;">
        <div class="centered-img question-board">
            {{ $quiz->question }}
        </div>
        <div class="row" id="answers" style="text-align: center;">
            @if ($quiz->order % 2 == 0)
                @foreach ($quiz->answers as $answer)
                    <div class="col-6 p-0 m-0">
                        <button class="btn-submit-img">
                            <img src="{{ asset('img/elements/30.png') }}" alt="" height="auto" width="100%">
                            <div class="centered-img answer-content cube" style="width: 70%;">
                                {{ $answer->option }}
                            </div>
                        </button>
                    </div>
                @endforeach
            @else
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
            @endif
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

        })
    </script>
@endpush
