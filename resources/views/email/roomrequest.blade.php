<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Request Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        header {
            background: #fff;
            color: #333;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #bbb 1px solid;
        }

        header a {
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }

        header ul {
            padding: 0;
            margin: 0;
            list-style: none;
            overflow: hidden;
        }

        header li {
            float: left;
            display: inline;
            padding: 0 20px 0 20px;
        }

        header #branding {
            float: left;
        }

        header #branding h1 {
            margin: 0;
        }

        header .highlight,
        header .current a {
            color: #e8491d;
            font-weight: bold;
        }

        header a:hover {
            color: #333;
            font-weight: bold;
        }

        header #main {
            float: right;
        }

        header #main #profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        header #main #profile-img img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        header #main nav {
            display: inline;
        }

        header #main nav ul {
            list-style: none;
            overflow: hidden;
        }

        header #main nav ul li {
            display: inline;
            padding: 0 20px 0 20px;
        }

        header #main nav a {
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
            font-weight: bold;
        }

        header #main nav a:hover {
            color: #e8491d;
            font-weight: bold;
        }

        header #main .button,
        header #main #logout {
            float: left;
            display: inline;
            padding: 10px;
            margin-top: 10px;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
            border-radius: 5px;
        }

        header #main .button {
            background-color: #333333;
        }

        header #main #logout {
            background-color: #333;
        }

        header #main .button:hover,
        header #main #logout:hover {
            background-color: #333;
            color: #fff;
        }

        #main {
            padding: 0 0 40px 0;
        }

        #main h1,
        #main h2 {
            color: #333;
        }

        #main p {
            font-size: 18px;
            line-height: 1.6em;
            color: #666;
        }

        #main img {
            max-width: 100%;
            height: auto;
        }

        .main-col {
            float: left;
            width: 63%;
            padding: 0 0 40px 0;
            margin: 0 2% 0 0;
        }

        .side-col {
            float: left;
            width: 30%;
            padding: 0 0 40px 0;
            margin: 0 5% 0 0;
        }

        .main-col a {
            color: #e8491d;
            text-decoration: none;
        }

        .main-col a:hover {
            text-decoration: underline;
        }

        .side-col img {
            border: #ddd 1px solid;
            border-radius: 5px;
            padding: 5px;
        }

        .container {
            clear: both;
            overflow: hidden;
        }

        .footer {
            width: 100%;
            height: 60px;
            background: #333;
            color: #fff;
            text-align: center;
            padding-top: 20px;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div id="branding">
                {{-- <img src="{{ asset('front_assets/images/logo.png') }}" alt="" title="Tronis"> --}}
                <h1><span class="">Indus Hotel</span></h1>
            </div>
        </div>
    </header>

    <div class="container">
        <div id="main" class="main-col">
            <h1>roomsrequest Form Submission</h1>
            {{-- <p><strong>Title:</strong> {{ $roomsrequest['title'] }}</p> --}}
            <p><strong>Name:</strong> {{ $roomsrequest['first_name'] }}</p>
            <p><strong>Room Name:</strong> {{ $roomsrequest['room'] }}</p>
            <p><strong>Adults:</strong> {{ $roomsrequest['adults'] }}</p>
            <p><strong>Chlidren:</strong> {{ $roomsrequest['children'] }}</p>
            <p><strong>Email:</strong> {{ $roomsrequest['email'] }}</p>
            <p><strong>Phone:</strong> {{ $roomsrequest['phone'] }}</p>
            <p><strong>Country:</strong> {{ $roomsrequest['country'] }}</p>
            <p><strong>Check in:</strong> {{ $roomsrequest['checkin'] }}</p>
            <p><strong>Check Out:</strong> {{ $roomsrequest['checkout'] }}</p>

            <p><strong>Special Arrangments:</strong>{{ $roomsrequest['special_arrangments'] }}</p>
            <p></p>
            {{-- <p>Thank you for reaching out! We will get back to you as soon as possible.</p> --}}
        </div>
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Indus Hotel. All Rights Reserved.</p>
    </footer>

</body>

</html>
