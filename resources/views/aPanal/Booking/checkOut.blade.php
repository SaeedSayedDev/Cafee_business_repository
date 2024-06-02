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
            <form action='{{url("/paiding/$booking->id")}}' method="post">
                @csrf

                <div class="receipt">
                    <h2 class="receipt-heading">Receipt Summary</h2>
                    <div>
                        <div class="container">

                            <section id="cart">

                                @foreach($booking->items as $item)
                                <article class="product ">

                                    <footer class="contentw-100">
                                        <div class="row ">

                                            <div class="col-md-5 text-start ">
                                                <h5 class="p-3 "> {{$item->name}} </h5>
                                            </div>
                                            <div class="col-md-7  ">

                                                <span class="qt-minus">-</span>
                                                <textarea type="hidden" name='quantity[]' class="qt border-0 h-50 ">1</textarea>
                                                <span class="qt-plus">+</span>

                                                <h2 class="full-price">
                                                    {{$item->price}}
                                                </h2>

                                                <h2 class="price">
                                                    {{$item->price}}
                                                </h2>
                                            </div>
                                        </div>


                                    </footer>
                                </article>
                                @endforeach

                                <div class="row w-100 pt-5 ">
                                    <div class="col-6 text-start">
                                        <p class="subtotal">Subtotal: <span>163.96</span>$</p>
                                        <p class="tax">Taxes (5%): <span>8.2</span>$</p>

                                    </div>
                                    <div class=" col-6 pt-3 ">

                                        <h2 class="total ">Total: <span>177.16</span> $</h2>

                                    </div>
                                </div>

                            </section>

                        </div>

                    </div>
                </div>

                <div class="payment-info">
                    <h3 class="payment-heading">Payment Information</h3>

                    <div class="row pb-4">

                        <div class="col-md-6 ">
                            <label for="full-name">Full Name</label>
                            <input id="full-name" class="form-control" name="card_name" value="Said Sayed" placeholder="Said Sayed" required type="text" />
                        </div>

                        <div class="col-md-6">
                            <label for="credit-card-num">Card Number
                                <!-- <span class="card-logos">
                                    <i class="card-logo fa-brands fa-cc-visa"></i>
                                    <i class="card-logo fa-brands fa-cc-amex"></i>
                                    <i class="card-logo fa-brands fa-cc-mastercard"></i>
                                    <i class="card-logo fa-brands fa-cc-discover"></i> </span> -->
                            </label>
                            <input id="credit-card-num" class="form-control w-100" name="card_number" value="4242424242424242" placeholder="1111-2222-3333-4444" required type="number" />
                        </div>

                        <p class="expires text-center pt-4">Expires on:</p>
                        <div class="col-md-8">
                            <div class="card-experation">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="expiration-month">Month</label>
                                        <select id="expiration-month" class="form-control" name="exp_month" required>
                                            <option value="">Month:</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">Decemeber</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="expiration-year">Year</label>
                                        <select id="experation-year" class="form-control" name="exp_year" required>
                                            <option value="">Year:</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                        </select>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <label for="cvv">CVV</label>
                            <input id="cvv" type="number" class="form-control w-100 " name="cvc" placeholder="123" value="123" type="text" required />
                        </div>

                    </div>
                    <button type="submit" class="btn  w-100">
                        Book Securely
                    </button>
                </div>

            </form>

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