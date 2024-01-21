@extends('apps.wrapper')
@section('title')
    Quiz
@endsection

@section('content')
    <style>
        @media only screen and (max-device-width: 600px) and (orientation:portrait) {}

        @media screen and (max-width: 425px) {}

        @media screen and (max-width: 415px) {}

        @media screen and (min-width: 600px) {}
    </style>
    <div class="reaction" style="height: 60vh;margin-top: 40vh;">
        @if ($answer->is_correct)
            <img class="centered-img reaction-img" src="{{ asset('img/elements/12.png') }}" alt="">
        @else
            <img class="centered-img reaction-img" src="{{ asset('img/elements/13.png') }}" alt="">
        @endif
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {

        })
    </script>
@endpush
