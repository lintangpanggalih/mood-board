@extends('apps.wrapper')
@section('title')
    Mission Board
@endsection

@section('content')
    <style>
        .centered-btn {
            position: absolute;
            top: 50%;
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

            50% {
                left: 0;
            }

            70% {
                left: 0;
            }

            99.9% {
                left: 150vh;
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

            .centered-btn {
                top: calc(50% + 40vh);
            }

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

            .centered-btn {
                top: calc(50% + 48vh);
            }

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

            .centered-btn {
                top: calc(65% + 50vh);
                height: 50vh;
            }

            .lets-go {
                transform: translate(200%, 40%);
                height: 35vh;
                width: auto;
            }


            @keyframes slide {
                20% {
                    left: 0;
                }

                50% {
                    left: 0;
                }

                70% {
                    left: 0;
                }

                99.9% {
                    left: 150vh;
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

            @if (!session()->has('answers'))
                <img class="centered-img lets-go slide" src="{{ asset('img/elements/lets-go.png') }}" alt="">
            @endif
        </div>

        <div class="mt-5 text-center">
            <a href="{{ route('mission.question') }}" class="centered-btn btn-submit-img next" style="display: none;">
                <img src="{{ asset('img/elements/7.png') }}" alt="" height="70px">
            </a>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                let complete_1_img = $(
                        '<img class="centered-img pyramid" src="img/elements/pyramid-1-complete.png" alt="">'
                    ).hide()
                    .fadeIn(500)
                $('#pyramid').append(complete_1_img)
            }, 3500);
            setTimeout(() => {
                $('.next').fadeIn(500);
            }, 4000);

            // $('#chest').html(`
        //     <img class="centered-img chest-opening" src="img/elements/chest-opening-1-loop-medium.gif" alt="">
        // `);

            // 
            // let complete_1_img = $(
            //         '<img class="centered-img pyramid" src="img/elements/pyramid-1-complete.png" alt="">').hide()
            //     .fadeIn(500)
            // $('#pyramid').append(complete_1_img)
            // let complete_2_img = $(
            //         '<img class="centered-img pyramid" src="img/elements/pyramid-2-complete.png" alt="">').hide()
            //     .fadeIn(500)
            // $('#pyramid').append(complete_2_img)
        })
    </script>
@endpush
