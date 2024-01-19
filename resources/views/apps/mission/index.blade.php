@extends('apps.wrapper')
@section('title')
    Home
@endsection

@section('content')
    <style>
        @media screen and (max-width: 400px) {
            .centered-img.pyramid {
                top: 70% !important;
                height: 350px;
            }
        }
        @media screen and (max-width: 600px) {
            .centered-img.chest {
                top: 30%;
                width: 150px;
                height: auto;
            }

            .centered-img.chest-opening {
                top: 28%;
                width: 190px;
                height: auto;
            }

            .centered-img.pyramid {
                top: 65%;
                width: 90%;
            }
        }

        @media screen and (min-width: 600px) {
            .centered-img.chest {
                top: 33%;
                width: 150px;
                height: auto;
            }

            .centered-img.chest-opening {
                top: 32%;
                width: 190px;
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
