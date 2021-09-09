<!-- 
    Notes:

    https://www.careers.telstra.com/home
    We offer full-time and trainee positions

    If you're passionate about tech,

    apply with cv and expression of interest

    we look for people who are into technology, and latest stuffs

 -->


 <!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <title>BIZCOMM | Terms and Privacy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <link rel="icon" href="assets/images/BIZCOMM Logo Black&White.png">
    <script src="assets/index.js"></script>
    <script src="assets/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            var sections = [],
                index = 0;

            sections.push("terms-home");
            sections.push("about-terms");
            sections.push("tnc");
            sections.push("privacy");
            sections.push("footer");

            var sectNum = 0;

            $("#down-scroll-button").click(function() {
                if (sectNum < sections.length) {
                    sectNum += 1;
                    $('html, body').stop().animate({
                        scrollTop: $("#" + sections[sectNum]).offset().top
                    }, 1500);
                }
            });

            $("#up-scroll-button").click(function() {
                if (sectNum > 0) {
                    sectNum -= 1;
                    $('html, body').stop().animate({
                        scrollTop: $("#" + sections[sectNum]).offset().top
                    }, 1500);
                }
            });
        })
    </script>

</head>

<body>

    <header>
        <div id="logo">

            <div id="logo-img">

                <img id="logo-image" src="assets/images/BIZCOMM Logo Black&White.png" alt="BIZCOMM Logo">

            </div>

            <div id="logo-text">

                <h1 id="logo-upper-text">BIZCOMM</h1>
                <h2 id="logo-lower-text">TECH SOLUTIONS</h2>

            </div>

        </div>

        <nav>

            <ul id="nav-links">
                <li><a class="nav-link" href="index.html">Home</a></li>
                <li><a class="nav-link" href="knowledge.html">Knowledge Base</a></li>
                <li><a class="nav-link" href="careers.html">Careers</a></li>
                <li><a class="nav-link" href="terms.html">Terms & Privacy</a></li>
            </ul>

        </nav>

    </header>

    <div id="scroll-buttons">

        <button id="up-scroll-button" class="scroll-button">↑</button>

        <button id="down-scroll-button" class="scroll-button">↓</button>

    </div>

    <div id="content">

        <div id="terms-home" class="card">
            <div class="BIZCOMM">

                <p>Our team is </p>
                <b>
                    <div class="innerBIZCOMM">
                        [Agile]<br />
                        [Creative]<br />
                        [Innovative]<br />
                        [Elevative]<br />
                        [Effective]<br />
                        [Reliable]<br />
                        [Sophisticated]<br />
                        [Systematic]<br />
                        [Productive]<br />
                        [Practical]
                    </div>
                </b>
            </div>
        </div>

        <div id="divider-one" class="divider">
            <h1>At BIZCOMM, we're adhere to our rules and morals.</h1>
        </div>

        <div id="about-terms" class="card">

            <div id="terms-header">

                <h2>OUR TERMS & CONDITIONS AND PRIVACY</h2>

                <h3>At BIZCOMM, we adhere to all standards set by the industry.</h3>

            </div>

        </div>

        <div id="divider-two" class="divider">
            <h1>TERMS AND CONDITIONS</h1>
        </div>

        <div id="tnc" class="card">

            <div class="info">

                <div class="actual-info">

                    <p><iframe class="info-iframe" src="assets/T&C.html" frameborder="0"></iframe></p>

                </div>

            </div>



        </div>

        <div id="divider-three" class="divider">

            <h1>Privacy</h1>

        </div>

        <div id="privacy" class="card text-wall">

            <div class="info">

                <div class="actual-info">

                    <p><iframe class="info-iframe" src="assets/Privacy.html" frameborder="0"></iframe></p>

                </div>

            </div>

        </div>

        <?php echo file_get_contents("assets/Footer.html"); ?>

    </div>

</body>

</html>