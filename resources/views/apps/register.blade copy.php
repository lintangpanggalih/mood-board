@extends('apps.wrapper')
@section('title')
    Home
@endsection

@section('content')
    <img class="centered-img top" src="{{ asset('img/elements/3.png') }}" alt="">
    <div class="container" style="margin-top: 35vh">
        <form class="my-5" action="{{ route('register') }}" method="POST" style="color: #000;">
            @csrf
            <div class="row">
                <label for="name" class="col-12"><b>Nama Lengkap</b></label>
                <div class="col input-mask">
                    <input name="name" class="form-control" type="text" required>
                </div>
            </div>
            <div class="row">
                <label for="birth_date" class="col-12"><b>Tanggal Lahir</b></label>
                <div class="col input-mask">
                    <input name="birth_date" class="form-control" type="date" required>
                </div>
            </div>
            <div class="row">
                <label for="gender" class="col-12"><b>Jenis Kelamin</b></label>
                <div class="col input-mask">
                    <select class="form-control" name="gender" id="gender" required>
                        <option value="male">Laki-laki</option>
                        <option value="female">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <label for="weight" class="col-12"><b>Berat Badan</b></label>
                <div class="col input-mask">
                    <input name="weight" class="form-control" type="number" required>
                </div>
            </div>
            <div class="row">
                <label for="height" class="col-12"><b>Tinggi Badan</b></label>
                <div class="col input-mask">
                    <input name="height" class="form-control" type="number" required>
                </div>
            </div>
            <div class="row">
                <label for="phone" class="col-12"><b>Nomor Whatsapp</b></label>
                <div class="col input-mask">
                    <input name="phone" class="form-control" type="number" required>
                </div>
            </div>
            <div class="mt-5 text-center">
                <button class="btn-submit-img" type="submit">
                    <img src="{{ asset('img/elements/7.png') }}" alt="" height="70px">
                </button>
            </div>
        </form>
    </div>
@endsection
