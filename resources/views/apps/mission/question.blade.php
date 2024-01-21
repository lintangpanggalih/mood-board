@extends('apps.wrapper')
@section('title')
    Quiz ({{ $quiz->order ?? '-' }})
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
        .centered-btn {
            position: absolute;
            bottom: 6vh;
            left: 50%;
            transform: translate(-50%);
            z-index: 10;
        }
        @media only screen and (max-device-width: 600px) and (orientation:portrait) {
            .question-board-img {
                top: 37%;
                width: 48vh;
                height: auto;
            }

            div.question-board {
                top: 23%;
                width: 65vw;
                /* height: 10vh; */
                /* font-weight: bold; */
                font-size: 17pt;
            }

            .answer-content {
                z-index: 12;
                font-weight: bold;
                color: maroon;
                font-size: 14pt;
            }

        }

        @media screen and (max-width: 425px) {
            .question-board-img {
                top: 40%;
                width: 95vw;
                height: auto;
            }

            div.question-board {
                top: 25%;
                width: 65vw;
                /* height: 100px; */
                /* font-weight: bold; */
                font-size: 15pt;
            }
        }

        @media screen and (max-width: 415px) {
            .question-board-img {
                top: 35%;
                width: 95vw;
                height: auto;
            }

            div.question-board {
                top: 20%;
                /* width: 64%; */
                /* height: 100px; */
                /* font-weight: bold; */
                font-size: 18px;
            }

            .answer-content {
                z-index: 12;
                font-weight: bold;
                color: maroon;
                font-size: 13pt;
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
            .centered-btn {
                bottom: 0vh;
                top: 95vh;
            }
        }
    </style>
    <div class="container" style="height: 60vh;margin-top: 40vh;">
        <div id="quiz-wrapper">
            <img class="centered-img question-board-img" src="{{ asset('img/elements/28.png') }}" alt="">
            <div class="centered-img question-board">
                {{ $quiz->question }}
            </div>
            <form action="{{ route('mission.question.submit') }}" method="POST">
                <div class="row" id="answers" style="text-align: center;">
                    @csrf
                    <input type="text" name="quiz" value="{{ $quiz->id }}" style="display: none;">
                    <input type="text" name="quiz_order" value="{{ $quiz->order }}" style="display: none;">
                    @if ($quiz->order % 2 == 0)
                        @foreach ($quiz->answers as $answer)
                            <div class="col-6 p-0 m-0">
                                <button type="submit" class="btn-submit-img" name="answer" value="{{ $answer->id }}">
                                    {{-- <input type="text" name="answer" value="{{ $answer->id }}" style="display: none;"> --}}
                                    <img src="{{ asset('img/elements/30.png') }}" alt="" height="auto"
                                        width="100%">
                                    <div class="centered-img answer-content cube" style="width: 70%;">
                                        {{ $answer->option }}
                                    </div>
                                </button>
                            </div>
                        @endforeach
                    @else
                        @foreach ($quiz->answers as $answer)
                            <div class="col-12">
                                <button type="submit" class="btn-submit-img" name="answer" value="{{ $answer->id }}">
                                    {{-- <input type="text" name="answer" value="{{ $answer->id }}" style="display: none;"> --}}
                                    <img src="{{ asset('img/elements/29-copy.png') }}" alt="" height="110vh"
                                        width="100%">
                                    <div class="centered-img answer-content">
                                        {{ $answer->option }}
                                    </div>
                                </button>
                            </div>
                        @endforeach
                    @endif
                </div>
            </form>

        </div>
    </div>
    <div class="mt-5 text-center">
        <a href="{{ route('mission.index') }}" class="centered-btn btn-submit-img next" style="display: none;">
            <img src="{{ asset('img/elements/7.png') }}" alt="" height="70px">
        </a>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                e.preventDefault();
                $(this).prop('disabled', true)
                setTimeout(() => {
                    $('#quiz-wrapper').fadeOut(1000)
                }, 500);

                var answer_data = $("button[type=submit][clicked=true]").val(),
                    data = $(this).serialize() + '&answer=' + answer_data;

                // return console.log(data);
                $.ajax({
                    method: "POST",
                    url: $(this).attr('action'),
                    data: data,
                    success: function(resp) {
                        console.log(resp);
                        let response = '', progress = resp.progress, order = Object.keys(progress).length + 1;
                        // console.log(progress, order);
                        if (resp.data.is_correct) {
                            response = $(
                                `<img class="centered-img reaction-img" src="{{ asset('img/elements/12.png') }}" alt="">`
                            );
                        } else {
                            response = $(
                                `<img class="centered-img reaction-img" src="{{ asset('img/elements/13.png') }}" alt="">`
                            );
                        }
                        setTimeout(() => {
                            response.hide().fadeIn(500)
                            $('.container').append(response)
                        }, 1000);

                        // setTimeout(() => {
                        //     $('.next').fadeIn(500);
                        // }, 2000);
                    },
                })
            })

            function loadArticle(order) {
                let url = '{{ route("mission.article", ":order") }}'.replace('order', order)
                console.log(url);
                // $.get(url)

            }
            $("form button[type=submit]").click(function() {
                $("button[type=submit]", $(this).parents("form")).removeAttr("clicked");
                $(this).attr("clicked", "true");
            });

        })
    </script>
@endpush
