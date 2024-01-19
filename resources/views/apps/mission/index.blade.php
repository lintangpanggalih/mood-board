@extends('apps.wrapper')
@section('title')
    Home
@endsection

@section('content')
    <style>
        @media only screen and (max-device-width: 600px) and (orientation:portrait) {
            .centered-img.chest {
                top: 28%;
                width: 120px;
                height: auto;
            }

            .centered-img.chest-opening {
                top: 28%;
                width: 170px;
                height: auto;
            }

            .centered-img.pyramid {
                bottom: 100px;
                transform: translate(-50%, -20%);
                width: 40vh;
                height: 48vh;
            }
        }

        @media screen and (max-width: 375px) {
            .centered-img.pyramid {
                bottom: 100px;
                transform: translate(-50%, -10%);
            }
        }

        @media screen and (min-width: 600px) {
            .centered-img.chest {
                top: 30%;
                width: 120px;
                height: auto;
            }

            .centered-img.chest-opening {
                top: 32%;
                width: 170px;
                height: auto;
            }

            .centered-img.pyramid {
                top: 75%;
                height: 400px;
            }
        }
    </style>
    <img class="centered-img top" src="{{ asset('img/elements/4.png') }}" alt="" style="top: 23%;">
    <img class="centered-img chest" src="{{ asset('img/elements/chest-closed.png') }}" alt="">
    {{-- <img class="centered-img chest-opening" src="{{ asset('img/elements/chest-opening.gif') }}" alt=""> --}}
    <img class="centered-img pyramid" src="{{ asset('img/elements/pyramid.png') }}" alt="">
@endsection
