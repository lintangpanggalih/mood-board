<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>
    <style>
        @font-face {
            font-family: "Core Narae";
            src: url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.eot");
            src: url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.eot?#iefix")format("embedded-opentype"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.woff2")format("woff2"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.woff")format("woff"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.ttf")format("truetype"),
                url("https://db.onlinewebfonts.com/t/d133af06cd91ba4a1fa4b9ccea3f4a35.svg#Core Narae Pro W01 Pro")format("svg");
        }

        body {
            font-family: 'Core Narae';
            background-image: url('img/elements/main-bg.png');
        }

        .centered-img {
            display: block;
            margin: 0 auto;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: -1;
        }

        .input-mask {
            background-image: url('img/elements/6.png');
            background-size: cover;
            background-position: 5px center;
            background-repeat: no-repeat;
            padding-left: 30px;
        }

        .input-mask>input,
        .input-mask>select {
            border: none !important;
            background-color: transparent !important;
        }

        .input-mask>input:focus,
        .input-mask>select:focus {
            box-shadow: none !important;
        }

        .btn-submit-img {
            cursor: pointer;
            width: fit-content;
            border: none;
            outline: none;
            background-color: transparent;
        }

        .btn-submit-img:active img {
            transform: scale(0.95);
        }

        @media screen and (max-width: 600px) {
            body {
                background-size: cover;
                background-repeat: no-repeat;
            }

            .centered-img {
                width: 100%;
            }

            .centered-img.top {
                top: 15%;
            }

            .input-mask:has(input, select) {
                padding: 0px 30px;
            }
        }

        @media screen and (min-width: 600px) {
            .centered-img {
                height: 100%;
            }

            .centered-img.top {
                top: 15%;
                height: 50%;
            }

            .input-mask:has(input, select) {
                padding: 0px 50px;
            }
        }
    </style>
    @yield('content')
    @include('layouts.footerjs')
</body>

</html>
