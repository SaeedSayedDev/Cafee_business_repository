<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 002 - Credit Card Checkout</title>
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/styleCheckout.css')}}">

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            font-size: 62.5%;
            /* 10/16 = 0.625 * 100 */
        }

        body {

            background: url('{{asset("assets/img/slide/slide-1.jpg")}}');
            background-position: center center;
            background-size: 100% 100%;
            backdrop-filter: blur(2px);
            color: #3c3c39;

            display: flex;
            justify-content: center;
            height: 100vh;
            font-family: 'Open Sans', sans-serif;
            position: relative;
            padding: 2rem 0;
        }

        .checkout-container {
            /* background-color: red; */
            max-width: 100%;
            height: 50rem;

            grid-template-columns: 1fr 1fr;
            justify-content: center;
            /* margin-bottom: 10rem; */
        }

        em {
            font-style: normal;
            font-weight: 700;
        }

        hr {
            color: #fff;
            margin-bottom: 1.2rem;
        }

        /* Left Side Of Container */
        .left-side {
            background: url('https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8cmVzdGF1cmFudHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60');
            background-position: center center;
            background-size: cover;
            position: relative;
        }

        .text-box {
            background: rgba(100, 69, 23, 0.9);
            width: 100%;
            padding: 1rem 2rem;
            position: absolute;
            bottom: 0;
        }

        /* Left container text */

        .home-heading {
            color: #e8e8e1;
            font-size: 3.2rem;
            font-weight: 700;
            line-height: 1;
            margin-bottom: 1rem;
        }

        .home-price {
            color: #aeae97;
            font-size: 2rem;
            margin-bottom: 1.2rem;
        }

        .home-desc {
            color: #e8e8e1;
            font-size: 1.2rem;
            line-height: 1.5;
            letter-spacing: 0.5px;
        }

        /* Right Side of container */

        .right-side {
            width: 100%;
            background-color: #fff;
            padding: 1.8rem 3.2rem;
        }

        .receipt {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            border-bottom: solid 1px;
            margin-bottom: 1rem;
        }

        .receipt-heading {
            font-size: 1.6rem;
            text-align: left;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 1.5rem;
            color: #64645f;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            width: 100%;
        }

        .total td {
            font-size: 1.4rem;
            font-weight: 700;
        }

        .price {
            text-align: end;
        }

        /* Payment Section */

        .payment-heading {
            font-size: 1.4rem;
            margin-bottom: 1rem;
        }

        .form-box {
            display: grid;
            grid-template-rows: 1fr;
            gap: 1.5rem;
        }

        .card-logo {
            font-size: 2rem;
        }

        .expires,
        .form-box label {
            font-size: 1.2rem;
            font-weight: 700;
        }

        .form-box input {
            font-family: inherit;
            font-size: 1.2rem;
            padding: 0.5rem;
            width: 100%;
        }

        .form-box select {
            padding: 0.5rem;
        }

        .form-box #cvv {
            width: 25%;
        }

        .cvv-info:link,
        .cvv-info:visited {
            color: inherit;
            text-decoration: underline;
        }

        .cvv-info:hover,
        .cvv-info:active {
            color: #5f7986;
            text-decoration: none;
        }

        .btn {
            background-color: #ffb03b;
            border: none;
            border-radius: 8px;
            color: #eff2f3;
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
            padding: 10px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #5f7986;
            transition: ease-out 0.1s;
        }

        .footer-text {
            font-size: 1rem;
            text-align: center;
        }

        .form-box *:focus {
            outline: none;
            box-shadow: 0 0 0 0.8rem rgba(139, 139, 107, 0.5);
            border-radius: 8px;
        }

        .total_bg {
            background: #ffb03b;

        }

        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        textarea {
            resize: none
        }
    </style>

</head>

<body class="text-center ">
    <div class="checkout-container ">

        <div class="right-side ">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
            </div>
            @endif


            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-3xl md:text-5xl font-extrabold text-center uppercase mb-12 bg-gradient-to-r from-indigo-400 via-purple-500 to-indigo-600 bg-clip-text text-transparent transform -rotate-2">Make A Payment</h1>
                    @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                    <center>
                        <a href="{{ route('make.payment') }}" class="w-full bg-indigo-500 uppercase rounded-xl font-extrabold text-white px-6 h-8 bg-dark">Pay with PayPal👉</a>
                    </center>
                </div>
            </div>



            <p class="footer-text">
                <i class="fa-solid fa-lock"></i>
                Your credit card infomration is encrypted
            </p>
        </div>
    </div>





    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bb515311f9.js" crossorigin="anonymous"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{asset('assets/js/script.js')}}"></script>

    <script>
        //   document.getElementById("total_input").setAttribute('value', 8);

        // document.getElementById("total_input").value('3');
    </script>

</body>

</html>