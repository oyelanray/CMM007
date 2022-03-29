<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="description" content="For tourist looking to visit owu waterfall">
    <title>Owu water fall</title>
    <link rel="icon" href="waterfall.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>

    <nav></nav>




    <header>
        <h1 id="title">WELCOME TO OWU WATERFALL TOUR</h1>




        <?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_destroy();
    header('Location: index.php');
}

if (!empty($_SESSION['id'])) {
    echo '<form   method="POST">
            <fieldset>
                <legend> Welcome ' . $_SESSION['name'] . '</legend>
                <p></p>

                <p>
                    <button type="submit">Logout</button>
                </p>
                </form>';

} else {
    echo '     <form action="login.php" method="POST">
            <fieldset>
                <legend>EXISTING USER LOGIN</legend>
                <p></p>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="username" required class="form-input">
                <p>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="Password" placeholder="type password" required
                        class="form-input">
                </p>
                <p>
                    <button type="submit">submit</button>
                    <button type="reset">reset</button>
                </p>

        </form>';
}
?>





        <nav>
    </header>

    <main>

        <nav class="navbar">
            <div class="burger">
                <div class="layer1"></div>
                <div class="layer2"></div>
                <div class="layer3"></div>
            </div>


            <div class="menubar">


                <ul class="list">

                    <li class="list-items"><a href="BookAtour.html">BOOK A TOUR</a>
                    </li>

                    <li class="list-items"><a href="package.html">TOUR PACKAGE</a>
                    </li>

                    <li class="list-items"><a href="Gallery.html">GALLERY</a>
                    </li>
                    <li class="list-items"><a href="Location.html">LOCATION</a>
                    </li>
                    <li class="list-items"><a href="Comment.php">COMMENT</a>
                    </li>
                    <li class="list-items"><a href="Contact.html">CONTACT</a>
                    </li>

                </ul>
            </div>
        </nav>
        <hr>
        <nav>
            <p>
                HOME PAGE NAVIGATION
            </p>
            <ul>
                <li class=""><a href="#about Owu waterfall">about Owu waterfall</a>
                </li>
                <p></p>
                <li><a href="#13 exciting things to know about owu waterfall">13 exciting things to know about owu
                        waterfall</a>
                </li>


            </ul>
        </nav>

        <section id="about Owu waterfall">
            <h2 class="subtitle">ABOUT OWU FALLS </h2>
            <p class="paratext">Owu falls, also known as Oowu by the locals, is one of West Africa’s tallest waterfalls.
                The water fall cascades 330 feet down an escarpment with rocky outcrops to a pool of ice cold water
                below which gives a beautiful landscape and offers visitors a refreshing atmosphere.</p>
            <p class="paratext">As a result of its breathtaking beauty, the Owu Waterfall has been dubbed Nigeria’s most
                stunning waterfall and called “wonder in the wilderness.” It is equally one of the top vacation spots in
                Nigeria.
                .</p>
            <p class="paratext">According to research, the waterfall flows 330 feet down the rock, providing a
                magnificent view for the visitors. It also has a lovely setting for people to take photographs</p>
            <p class="paratext">The waterfall is also said to respond to voices when you scream “Oowu,” the louder you
                yell, the greater the loudness of the water and the crazier the outpour becomes.</p>
            <p class="paratext">Owu Waterfall features a 10-meter-high smaller waterfall near to the main waterfall,
                where you can swim and relax before seeing the main waterfall. The main waterfall is 120 meters high
                above sea level.</p>
            <p class="paratext">To read more <a href="https://en.wikipedia.org/wiki/Owu_waterfalls">Click Here</a></p>
        </section>
        <figure>
            <img src="img/owu waterfall 3 img.jpeg" alt="Waterfall" title="Owu waterfall" id="owuwaterfallsimage">
            <figcaption>Owu waterfall</figcaption>
            <p></p>
            <img src="img/owu water fall 2 img.jpeg" alt="waterfall" title="owu waterfall" id="waterfallimage">
            <figcaption>Owu waterfall</figcaption>
            <p></p>
            <img src="img/owu waterfall 4.jpeg" alt="waterfall" title="owu waterfall" id="images">
            <figcaption>Owu waterfall</figcaption>
        </figure>
        <hr>
        <section id="13 exciting things to know about owu waterfall">
            <h2 class="subtitle">13 EXCITING THINGS TO KNOW ABOUT OWU WATERFALL</h2>
            <p class="paratext">&nbsp; 1.It is one among Nigeria’s top ten natural wonders</p>
            <p class="paratext">&nbsp; 2.The Journey from the village to the waterfall is about 1hour-45minutes, which
                you have to trek to</p>
            <p class="paratext">&nbsp; 3.During missionary work for the Sudan Interior Mission, now known as the
                Evangelical Church Winning All (ECWA), a missionary, Rev. Plafare Dui, discovered Owu Fall</p>
            <p class="paratext">&nbsp; 4.It is one of West Africa’s steepest types of falls.</p>
            <p class="paratext">&nbsp; 5.It is encircled by a thicket of lush rainforest.</p>
            <p class="paratext">&nbsp; 6.When you get to the waterfall, there is no network or phone signal but dont
                worry we at owu tours will provide you with intenet while at the waterfall</p>
            <p class="paratext">&nbsp; 7.It has a freezing pool.</p>
            <p class="paratext">&nbsp; 8.Owu Falls is bordered by mountains that span into the states of Ekiti and Kogi.
            </p>
            <p class="paratext">&nbsp; 9.According to legend, Owu Falls was formerly home to a gigantic snake and birds
                that threatened the people’ communal life. This condition remained until about 1940, when “God, in His
                immense mercies and love for His people, smote the snake with thunder, and miraculously sent the
                hazardous birds away,” according to the story.</p>
            <p class="paratext">&nbsp; 10.The true history and presence of Owu Waterfall, are unknown.</p>
            <p class="paratext">&nbsp; 11. History claims that the founding fathers of Owu, Owa-Kajola, and Owa Onire
                were Owa family siblings. Then, until the settlers moved to the current location (Owa-Kajola) in 1940,
                they lived on the hills above the falls, unaware of the existence of the waterfalls below., due to the
                lack of social amenities and the rough terrain, which made farming extremely difficult. One of the
                brothers, Owa Kajola, constructed his residence near the falls as a result of this shift, while Owa
                Onire relocated to the city border near Isanlu, in what is now Kogi State.</p>
            <p class="paratext">&nbsp; 12.The coolness of Owu Falls is one of its most appealing features, which can be
                felt even from a distance of roughly 10 kilometers away, especially during the rainy season. Though the
                fall is difficult to find because to the poor state of the road, the complication of the site added to
                the excitement.</p>
            <p class="paratext">&nbsp; 13.Owu Waterfall was named the top tourism destination in Nigeria in 2020.</p>
        </section>
        <!--
<figure>
<img src="img/owu waterfall 1 img.jpeg" alt="Waterfall" title="Owu waterfall" id="fall">
<figcaption>Owu waterfall</figcaption>
</figure>
-->


    </main>
    <hr>
    <footer>
        <p class="paratext">
            <a href="#title">Go to Home </a>
        </p>
    </footer>

</body>

</html>