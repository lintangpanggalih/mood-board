@extends('apps.wrapper')
@section('title')
    Home
@endsection

@section('content')
    <img class="centered-img" src="{{ asset('img/elements/welcome.png') }}" alt="">
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $(this).click(function() {
                location.href = '{{route('register')}}';
            })
        });
    </script>
@endpush
