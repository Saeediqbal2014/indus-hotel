<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
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

        header #main .button {
            float: left;
            display: inline;
            padding: 10px;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
            border-radius: 5px;
            background-color: #e8491d;
        }

        header #main .button:hover {
            background-color: #333;
            color: #fff;
        }

        header #main #logout {
            float: left;
            display: inline;
            padding: 10px;
            margin-top: 10px;
            color: #333;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
            border-radius: 5px;
            background-color: #e8491d;
        }

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
                <h1><span class="highlight">Indus Hotel</span></h1>
            </div>

        </div>
    </header>

    <div class="container">
        <div id="main" class="main-col">
            <h1>Contact Form Submission</h1>

            <p><strong>Name:</strong> {{ $contact['name'] }}</p>
            <p><strong>Email:</strong> {{ $contact['email'] }}</p>
            <p><strong>Message:</strong> {{ $contact['message'] }}</p>

            {{-- <p>Thank you for reaching out! We will get back to you as soon as possible.</p> --}}
        </div>
    </div>

    <footer class="footer">
        <p>&copy; {{ date('Y') }} Indus Hotel. All Rights Reserved.</p>
    </footer>

</body>

</html>
