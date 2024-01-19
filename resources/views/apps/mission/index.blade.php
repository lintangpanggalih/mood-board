@extends('apps.wrapper')
@section('title')
    Home
@endsection

@section('content')
    <style>
        .slide {
            position: absolute;
            left: -200px;
            -webkit-animation: slide 0.5s forwards;
            animation: slide 0.5s forwards;
            /* -webkit-animation-delay: 2s; */
            /* animation-delay: 2s; */
        }

        @-webkit-keyframes slide {
            100% {
                left: 0;
            }
        }

        @keyframes slide {
            100% {
                left: 0;
            }
        }

        @media only screen and (max-device-width: 600px) and (orientation:portrait) {
            .centered-img.chest-opening {
                top: 26%;
                width: 150px;
                height: auto;
            }

            .centered-img.pyramid {
                bottom: 100px;
                transform: translate(-50%, -20%);
                width: 40vh;
                height: 48vh;
            }

            .lets-go {
                transform: translate(-20%, 10%);
                height: 35vh;
                width: auto;
            }
        }

        @media screen and (max-width: 375px) {
            .centered-img.pyramid {
                bottom: 100px;
                transform: translate(-50%, -10%);
            }

            .lets-go {
                transform: translate(-10%, 20%);
                height: 35vh;
                width: auto;
            }
        }

        @media screen and (min-width: 600px) {
            .centered-img.chest-opening {
                top: 28%;
                width: 150px;
                height: auto;
            }

            .centered-img.pyramid {
                top: 75%;
                height: 400px;
            }

            .lets-go {
                transform: translate(200%, 55%);
                height: 35vh;
                width: auto;
            }
        }
    </style>
    <img class="centered-img top" src="{{ asset('img/elements/4.png') }}" alt="" style="top: 23%;">
    <div id="chest">
        <img class="centered-img chest-opening" src="{{ asset('img/elements/chest-closed-0.png') }}" alt="">
        {{-- <img class="centered-img chest-opening" src="{{ asset('img/elements/chest-opening.gif') }}" alt=""> --}}
    </div>
    <div class="container" id="pyramid">
        <img class="centered-img pyramid" src="{{ asset('img/elements/pyramid1.png') }}" alt="">
        {{-- <img class="centered-img pyramid" src="{{ asset('img/elements/pyramid1.png') }}" alt=""> --}}
        <img class="centered-img lets-go slide" src="{{ asset('img/elements/lets-go.png') }}" alt="">
    </div>
@endsection
@push('scripts')
    <script>
        $(document).click(function() {
            $('#chest').html(`
                <img class="centered-img chest-opening" src="img/elements/chest-opening-1-loop.gif" alt="">
            `);

            let complete_1_img = $(
                    '<img class="centered-img pyramid" src="img/elements/pyramid-1-complete.png" alt="">').hide()
                .fadeIn(500)
            $('#pyramid').append(complete_1_img)
            let complete_2_img = $(
                    '<img class="centered-img pyramid" src="img/elements/pyramid-2-complete.png" alt="">').hide()
                .fadeIn(500)
            $('#pyramid').append(complete_2_img)
        })
    </script>
@endpush
