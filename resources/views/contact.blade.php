<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/css/style.css">
    <link rel="stylesheet" href="../resources/css/contact.css">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body>
    <nav>
        <div class="container lime pullUp">
            <a href="../public">HOME</a>
            <a href="../public/work">PORTFOLIO</a>
            <a href="../public/about">ABOUT</a>
            <a href="../public/contact">CONTACT</a>
        </div>
    </nav>
    <div class="backgr">
        <div class="stars"></div>
        <div class="twinkling"></div>
    </div>
    <div class="contactp">

        <div class="container">
            <h3>Contact Form</h3>

            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">


                <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email..">


                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39158.95174040079!2d4.965433180065759!3d52.162793465398344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6718364619bb7%3A0xc8d579e72d8dc203!2sBreukelen!5e0!3m2!1snl!2snl!4v1612186428447!5m2!1snl!2snl" width="425" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
    <footer>
        &copy 2021 Daphne Mol - Contact me at me@daphne.network
    </footer>
</body>

</html>