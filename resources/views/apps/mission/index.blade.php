@extends('apps.wrapper')
@section('title')
    Mission Board
@endsection

@section('content')
    <style>
        .first-title {
            position: absolute;
            width: 90%;
            top: 90vh;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 254, 222, 0.856);
            border-radius: 50px;
            text-align: center;
            color: darkgreen;
        }

        .first-title h4 {
            font-weight: 600 !important;
        }

        .centered-btn {
            position: absolute;
            top: 100vh;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        .slide {
            position: absolute;
            left: -300px;
            -webkit-animation: slide 2s forwards;
            animation: slide 2s forwards;
            -webkit-animation-delay: 1.5s;
            animation-delay: 1.5s;
        }

        @-webkit-keyframes slide {
            100% {
                left: 0;
            }
        }

        @keyframes slide {
            20% {
                left: 0;
            }

            70% {
                left: 0;
            }

            100% {
                display: none;
            }
        }

        @media only screen and (max-device-width: 600px) and (orientation:portrait) {
            .centered-img.chest-opening {
                top: 26%;
                width: 20vh;
                height: auto;
            }

            .centered-img.pyramid {
                top: 50%;
                transform: translate(-50%, -20%);
                width: 40vh;
                height: 48vh;
            }

            /* .centered-btn {
                                    top: calc(50% + 40vh);
                                } */

            .lets-go {
                transform: translate(-20%, 10%);
                height: 35vh;
                width: auto;
            }

        }

        @media screen and (max-width: 375px) {
            .centered-img.pyramid {
                top: 50%;
                transform: translate(-50%, -10%);
            }

            /* .centered-btn {
                                    top: calc(50% + 48vh);
                                } */

            .lets-go {
                transform: translate(-10%, 20%);
                height: 35vh;
                width: auto;
            }

        }

        @media screen and (min-width: 600px) {
            .centered-img.chest-opening {
                top: 25%;
                width: 20vh;
                height: auto;
            }

            .centered-img.pyramid {
                top: 65%;
                height: 50vh;
            }

            /* .centered-btn {
                                    top: calc(65% + 50vh);
                                    height: 50vh;
                                } */

            .lets-go {
                transform: translate(200%, 40%);
                height: 35vh;
                width: auto;
            }


            @keyframes slide {
                20% {
                    left: 0;
                }

                70% {
                    left: 0;
                }

                100% {
                    display: none;
                }
            }
        }
    </style>

    <div class="container" style="height: 100vh;">
        <img class="centered-img top" src="{{ asset('img/elements/4.png') }}" alt="" style="top: 23%;">
        <div id="chest">
            <img class="centered-img chest-opening" src="{{ asset('img/elements/chest-closed-0.png') }}" alt="">
        </div>
        <div id="pyramid">
            <img class="centered-img pyramid" src="{{ asset('img/elements/pyramid1.png') }}" alt="">

            @if (!session()->has('quiz.answer.1'))
                <img class="centered-img lets-go slide" src="{{ asset('img/elements/lets-go.png') }}" alt="">
            @endif
        </div>

        <div class="mt-5 text-center">
            <div class="first-title" style="display: none;">
                <h4>TUMPENG GIZI SEIMBANG</h4>
            </div>
            <a href="{{ route('mission.question') }}" class="centered-btn btn-submit-img next" style="display: none;">
                <img src="{{ asset('img/elements/7.png') }}" alt="" height="70px">
            </a>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            // setTimeout(() => {
            //     let complete_1_img = $(
            //             '<img class="centered-img pyramid" src="img/elements/pyramid-1-complete.png" alt="">'
            //         ).hide()
            //         .fadeIn(500)
            //     $('#pyramid').append(complete_1_img)
            // }, 3500);
            let timeout = 4000;
            if ("{{ session()->has('quiz.answer.1') }}") {
                timeout = 1000
                setTimeout(() => {
                    $('.first-title').hide().fadeIn(500)
                    let complete_1_img = $(
                            '<img class="centered-img pyramid" src="img/elements/hide-1.png" alt="">'
                        ).hide()
                        .fadeIn(500)
                    $('#pyramid').append(complete_1_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.2') }}") {
                timeout = 1000
                setTimeout(() => {
                    let complete_1_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-1-complete.png" alt="">'
                        ).hide()
                        .fadeIn(500)
                    $('#pyramid').append(complete_1_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.3') }}") {
                setTimeout(() => {
                    let complete_2_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-2-complete.png" alt="">'
                        ).hide()
                        .fadeIn(500)
                    $('#pyramid').append(complete_2_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.4') }}") {
                setTimeout(() => {
                    let complete_3_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-3-complete.png" alt="">'
                        ).hide()
                        .fadeIn(500)
                    $('#pyramid').append(complete_3_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.5') }}") {
                setTimeout(() => {
                    let complete_4_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-4-complete.png" alt="">'
                        ).hide()
                        .fadeIn(500)
                    $('#pyramid').append(complete_4_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.6') }}") {
                setTimeout(() => {
                    let complete_5_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-5-complete.png" alt="">'
                        ).hide()
                        .fadeIn(500)
                    $('#pyramid').append(complete_5_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.7') }}") {
                setTimeout(() => {
                    let complete_6_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-6-complete.png" alt="">'
                        ).hide()
                        .fadeIn(700)
                    $('#pyramid').append(complete_6_img)
                }, timeout);
            }
            if ("{{ session()->has('quiz.answer.8') }}") {
                setTimeout(() => {
                    let complete_7_img = $(
                            '<img class="centered-img pyramid" src="img/elements/pyramid-7-complete.png" alt="">'
                        ).hide()
                        .fadeIn(700)
                    $('#pyramid').append(complete_7_img)
                }, timeout);

                setTimeout(() => {
                    let chest_img = $(
                            '<img class="centered-img chest-opening" src="img/elements/chest-opening-1-loop-medium.gif" alt="">'
                        ).hide()
                        .fadeIn(700)
                    $('#chest img').fadeOut(500)
                    $('#chest').append(chest_img)
                }, timeout + 1500);
            }
            setTimeout(() => {
                $('.next').fadeIn(500);
            }, timeout);

            // $('#chest').html(`
        //     <img class="centered-img chest-opening" src="img/elements/chest-opening-1-loop-medium.gif" alt="">
        // `);

            // 

        })
    </script>
@endpush
