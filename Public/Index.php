<link rel="stylesheet" type="text/css" href="Stylesheet/Stylesheet.css">
    <div id="container">
        <div id="topbar">
            <div id="Text-align">
                <a id="hyperlink-Home" href="Index.php">Home</a>
                <a id="hyperlink-Menu" href="Index.php">Profiel</a>
                <a id="hyperlink-Inloggen" href="Login.php">Login</a>
            </div>
        </div>
        <style>
            * {box-sizing: border-box}
            body {font-family: Verdana, sans-serif; margin:0}
            .mySlides {display: none}
            img {vertical-align: middle;}

            .Slideshow-background {
                max-width: 100%;
                height: 500px;
                background-color: #4E4E4E;
            }

            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
            }

            /* Next & previous buttons */
            .prev, .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                margin-top: -22px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
            }

            /* Caption text */
            .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
            }

            /* Number text (1/3 etc) */
            .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
            }

            /* The dots/bullets/indicators */
            .dot {
                cursor: pointer;
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
                transition: background-color 0.6s ease;
            }

            .active, .dot:hover {
                background-color: #717171;
            }

            /* Fading animation */
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
            }

            @-webkit-keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
            }

            @keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
            }

            /* On smaller screens, decrease text size */
            @media only screen and (max-width: 300px) {
                .prev, .next,.text {font-size: 11px}
            }
        </style>

        <div class="Slideshow-background">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="Images/show1.jfif" style="width:100%" height="500px">
                <div class="text">Slide 1</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="Images/show2.jfif" style="width:100%" height="500px">
                <div class="text">Slide 2</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="Images/show3.jfif" style="width:100%" height="500px">
                <div class="text">Slide 3</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        </div>
        <div id="Text-middle"></div>
        <br>


        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
            }
        </script>
</div>

