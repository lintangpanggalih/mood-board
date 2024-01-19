@extends('apps.mission.wrapper-question')
@section('title')
    Question 1
@endsection

@section('question-content')
    <img class="centered-img top" src="{{ asset('img/elements/4.png') }}" alt="" style="top: 23%;">
    <div id="chest">
        <img class="centered-img chest-opening" src="{{ asset('img/elements/chest-closed-0.png') }}" alt="">
        {{-- <img class="centered-img chest-opening" src="{{ asset('img/elements/chest-opening.gif') }}" alt=""> --}}
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
        })
    </script>
@endpush
