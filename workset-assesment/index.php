<?php
$mess = "";
if (isset($_POST['name'])) {

    $server = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password);

    if (!$conn) {
        die("connection to this database failed <br> ERR :: " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message  = $_POST['message'];

    $sql = "INSERT INTO `contactus`.`contactus`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

    // echo $sql;

    if ($conn->query($sql) == true) {
        echo "<script>alert(`Successfully submitted`)</script>";
        $mess  = `<p class="submitmessage"> Thank you, you can login in now.</p>`;
    } else {
        echo `<script>console.log("error::  $conn->error")</script>`;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- font-family: 'Roboto Condensed', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;700&display=swap" rel="stylesheet">
    <!-- font-family: 'Oxygen', sans-serif; -->
    <link rel="stylesheet" type="text/css" href="portstyle.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <title>Himanshu K.</title>
</head>

<body>
    <!-- .site-header -->
    <div class="container">
        <nav class="site-header">
            <div class="nav-logo">
                <a href="#">
                    <img src="HIMKOTLOGO.png" alt="logo" data-aos="fade">
                </a>
            </div>
            <button class="hamburger"><img id="ham" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Hamburger_icon_white.svg/1024px-Hamburger_icon_white.svg.png" style="font-size:12px; height:20px; width:20px; color: white;" alt="menu toggle icon"></button>
            <div class="nav-links">
                <ul>
                    <!-- <li><a href="index.html">Home</a></li> -->
                    <li><a data-aos="zoom-in-left" data-aos-duration="1500" href="#about">About Me</a></li>
                    <li><a data-aos="zoom-in-left" data-aos-duration="1500" href="#skill">Skills</a></li>
                    <li><a data-aos="zoom-in-left" data-aos-duration="1500" href="#portfolio">Portfolio</a></li>
                    <li><a data-aos="zoom-in-left" data-aos-duration="1500" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <section class="banner">
            <div class="banner--content">
                <h2 class="name" data-aos="fade">HIMANSHU KOTHARI</h2>
                <h1 class="designation" data-aos="fade">Developer <span id="line">|</span> Programmer </h1>
                <!-- <p class="tagline">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, voluptas.</p> -->
            </div>
        </section><!-- .banner -->
        <section class="promo">
            <div class="content">
                <h2 data-aos="zoom-in"> Bringing <span class="bold">ideas</span> to life<span class="orange">.</span>
                </h2>
                <p data-aos="zoom-in">Great ideas, beautifully executed & commercially sound.</p>
            </div>
        </section>

        <!-- about  -->
        <section id="about">
            <div class="content">
                <div class="about-container">
                    <div data-aos="fade-up">
                        <h2>About Me</h2>
                        <p>Education : <br>
                            Pursuing B.Tech in Computer Engineering
                            (to be completed in 2025)
                            <br>
                            <br>
                        </p>
                        <h3>As a Developer : </h3>
                        <ul>
                            <li>Designed and developed multiple frontend webpages and templates.</li>
                            <li>Developed code following common porfessional practices and development design patterns.
                            </li>
                            <li>Applied backend/server-side code to various projects.</li>
                        </ul>
                        <h3>As a Programmer : </h3>
                        <ul>
                            <li>Learned/learning Programming langugages like C++, Java, Python.</li>
                            <li>Solved Numerous questions over various data strutures. </li>
                            <li>Participated in programming conquests on various platforms.</li>
                        </ul>
                    </div>
                    <!-- <p>Fugiat ratione laboriosam nostrum atque. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h4>Atque lccusantium molestias amet</h4>
                    <p>Auam illo porro cupiditate repellendus explicabo ducimus esse. Dupiditate repellendus explicabo
                        sunt natus voluptate fugit ducimus esse</p> -->
                </div>

            </div>
        </section><!-- #about -->
        <!-- skills  -->
        <section id="skill">
            <div class="content skill--content" data-aos="fade-up">
                <div class="left">
                    <h2>My skills & expertise</h2>
                    <!-- <p> Technologies. </p> -->
                </div>
                <div class="right">
                    <div class="item">
                        <img src="https://cdn-icons-png.flaticon.com/512/5986/5986024.png" alt="Photoshop">
                        <h3>Programming</h3>
                        <p>C, C++ <br> Java, Javascript <br> Python </p>
                    </div>
                    <div class="item">
                        <img src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png" alt="Illustrator">
                        <h3>Front-End Development</h3>
                        <p>Framework : ReactJS <br> HTML, CSS, TAILWINDCSS </p>
                    </div>
                    <div class="item">
                        <img src="https://www.excelsiortechnologies.com/img/about/node-js.png" alt="InDesign">
                        <h3>Back-end Development</h3>
                        <p>NodeJS, MongoDB, ExpresJS <br>
                            PHP, MySQL</p>
                    </div>
                </div>
            </div>
        </section><!-- #skill -->


        <section id="portfolio">
            <h2 class="center">Projects - My past work </h2>
            <div class="content portfolio--content">
                <div class="item" data-aos="fade-down" data-aos-offset="270">
                    <h3>Bibliotek - Online Bookshelf</h3>
                    <img src="proj1.png" alt="logo design">
                </div>
                <div class="item" data-aos="fade-left" data-aos-offset="270">
                    <h3>Weather App</h3>
                    <img src="proj2.png" alt="logo design" data-aos-offset="270">
                </div>

                <div class="item" data-aos="fade-up" data-aos-offset="170">
                    <h3>Project Quote</h3><img src="proj4.png" alt="logo design">
                </div>

                <div class="item" data-aos="fade-right" data-aos-offset="270">
                    <h3>Project Academy</h3><img src="proj6.png" alt="logo design">
                </div>

                <div class="item" data-aos="fade-right" data-aos-offset="270">
                    <h3>Pokedex Online</h3><img src="proj5.png" alt="logo design">
                </div>

                <div class="item" data-aos="fade-right" data-aos-offset="270">
                    <h3>Various templates and designs</h3>
                    <img src="proj3.png" alt="logo design">
                </div>
            </div>
        </section><!-- portfolio -->



        <section id="contact">
            <div class="content">
                <h2 class="center">Contact Me</h2>
                <div class="contact_form">
                    <form method="post">
                        <div class="inps">
                            <input type="text" name="name" placeholder="Enter your name">
                            <input type="email" name="email" placeholder="Enter your email">
                            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea>
                            <button id="himbtn" style="background-color: #FFF;
    color: #003d86;
    padding: 10px 20px;
    border: none;
    font-family: 'Baloo Bhai 2';
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    border-radius: 20px ;
    cursor : pointer;
    font-size: 22px;">Submit</button>
                        </div>
                    </form>
                </div>
                <p class="center contact-detail">
                    Will be glad to work over all kinds of services based on my skills.
                    <br> Feel free to contact anytime.
                </p>
            </div>
            <div class="cont">
                <a id="lk" href="https://www.linkedin.com/in/himanshu-kothari-a62413243/"><img src="https://logos-download.com/wp-content/uploads/2016/03/LinkedIn_Logo_2019-700x175.png" alt="LinkedIN"></a>
                <p>Email <span>:</span> <a href="mailto:hkothar247@gmail.com">hkothar247@gmail.com</a></p>
            </div>

        </section>


    </div>


    <script>
        const hamburger = document.getElementsByClassName("hamburger")[0]
        const mobileNavs = document.getElementsByClassName("nav-links")[0]

        var x = document.getElementById("ham").src;
        hamburger.addEventListener("click", () => {
            mobileNavs.classList.toggle("active");
        })
    </script>

</body>

</html>