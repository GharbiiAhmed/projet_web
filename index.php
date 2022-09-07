<?php

include "./php/like.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Organizer</title>
    <link rel="icon" type="image/x-icon" href="images/icon.ico" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>


<style>
    /* .container .post {
        display: none;
    }

    .container .text {
        font-size: 25px;
        color: #666;
        font-weight: 500;
    }

    .container .edit {
        position: absolute;
        right: 10px;
        top: 5px;
        font-size: 16px;
        color: #666;
        font-weight: 500;
        cursor: pointer;
    }

    .container .edit:hover {
        text-decoration: underline;
    }

    .container .star-widget input {
        display: none;
    }

    .star-widget label {
        font-size: 40px;
        color: #444;
        padding: 10px;
        float: right;
        transition: all 0.2s ease;
    }

    input:not(:checked)~label:hover,
    input:not(:checked)~label:hover~label {
        color: #fd4;
    }

    input:checked~label {
        color: #fd4;
    }

    input#rate-5:checked~label {
        color: #fe7;
        text-shadow: 0 0 20px #952;
    }

    #rate-1:checked~form header:before {
        content: "I just hate it ";
    }

    #rate-2:checked~form header:before {
        content: "I don't like it ";
    }

    #rate-3:checked~form header:before {
        content: "It is awesome ";
    }

    #rate-4:checked~form header:before {
        content: "I just like it ";
    }

    #rate-5:checked~form header:before {
        content: "I just love it ";
    }

    .container form {
        display: none;
    }

    input:checked~form {
        display: block;
    }

    form header {
        width: 100%;
        font-size: 25px;
        color: #fe7;
        font-weight: 500;
        margin: 5px 0 20px 0;
        text-align: center;
        transition: all 0.2s ease;
    }

    form .textarea {
        height: 100px;
        width: 100%;
        overflow: hidden;
    }

    form .textarea textarea {
        height: 100%;
        width: 100%;
        outline: none;
        color: #eee;
        border: 1px solid #333;
        background: #222;
        padding: 10px;
        font-size: 17px;
        resize: none;
    }

    .textarea textarea:focus {
        border-color: #444;
    }

    form .btn {
        height: 45px;
        width: 100%;
        margin: 15px 0;
    }

    form .btn button {
        height: 100%;
        width: 100%;
        border: 1px solid #444;
        outline: none;
        background: #222;
        color: #999;
        font-size: 17px;
        font-weight: 500;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    form .btn button:hover {
        background: #1b1b1b;
    }  */

    .f3 {
        width: 80%;
        display: flex;
        flex-direction: column;
        margin: 0 auto;
    }

    .f3 .etoile {
        margin: 5px auto;
        font-size: 50px;
        color: gold;
    }

    .f3 textarea {
        border-radius: 12px;
        height: 100px;
        width: 70%;
        margin: 5px auto;
        background-color: gray;
        color: white;
        font-size: 18px;
        opacity: 0.5;
        color: white;

    }

    .f3 button {
        width: 30%;
        margin: 12px auto;
    }

    .user-info-1 {
        padding-left: 50px;
    }

    .et {
        color: gold;
    }
</style>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="#" class="logo"><span>e</span>vento</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#service">service</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#price">price</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="http://localhost/login%20system/login_form.php">login</a>
        </nav>

        <div id="menu-bars" class="fas fa-bars"></div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>its time to celebrate! the best <span> event organizers </span></h3>
            <a href="#contact" class="btn">contact us</a>
        </div>

        <div class="swiper-container home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
                <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
            </div>
        </div>

    </section>

    <!-- home section ends -->

    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading"> our <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>venue selection</h3>
                <div class="icons">
                    <form action="php/user_event.php" method="POST">
                        <input type="submit" name="btn20" value="add event" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn21" value="remove event" style="cursor: pointer;" class="btn">
                    </form>
                </div>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>invitation card</h3>
                <form action="php/user_event.php" method="POST">
                    <input type="submit" name="btn22" value="add event" style="cursor: pointer;" class="btn">
                    <input type="submit" name="btn23" value="remove event" style="cursor: pointer;" class="btn">
                </form>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-music"></i>
                <h3>entertainment</h3>
                <form action="php/user_event.php" method="POST">
                    <input type="submit" name="btn24" value="add event" style="cursor: pointer;" class="btn">
                    <input type="submit" name="btn25" value="remove event" style="cursor: pointer;" class="btn">
                </form>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <form action="php/user_event.php" method="POST">
                    <input type="submit" name="btn26" value="add event" style="cursor: pointer;" class="btn">
                    <input type="submit" name="btn27" value="remove event" style="cursor: pointer;" class="btn">
                </form>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-photo-video"></i>
                <h3>photos and videos</h3>
                <form action="php/user_event.php" method="POST">
                    <input type="submit" name="btn28" value="add event" style="cursor: pointer;" class="btn">
                    <input type="submit" name="btn29" value="remove event" style="cursor: pointer;" class="btn">
                </form>
                <p></p>
            </div>

            <div class="box">
                <i class="fas fa-birthday-cake"></i>
                <h3>custom food</h3>
                <form action="php/user_event.php" method="POST">
                    <input type="submit" name="btn30" value="add event" style="cursor: pointer;" class="btn">
                    <input type="submit" name="btn31" value="remove event" style="cursor: pointer;" class="btn">
                </form>
                <p></p>
            </div>

        </div>

    </section>

    <!-- service section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>we will give a very special celebration for you</h3>
                <p></p>
                <p></p>
                <a href="#contact" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery" action="php/like.php">

        <h1 class="heading">our <span>gallery</span></h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn1" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn2" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn3" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn4" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn5" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn6" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn7" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn8" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn9" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn10" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn11" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn12" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn13" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn14" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn15" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <h3 class="title">photos and events</h3>
                <div class="icons">
                    <form action="php/like.php" method="POST">
                        <input type="submit" name="btn16" value="like" style="cursor: pointer;" class="btn">
                        <input type="submit" name="btn17" value="dislike" style="cursor: pointer;" class="btn">
                    </form>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- price section starts  -->

    <section class="price" id="price">

        <h1 class="heading"> our <span>price</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">for birthdays</h3>
                <h3 class="amount">$250.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for weddings</h3>
                <h3 class="amount">$450.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for concerts</h3>
                <h3 class="amount">$650.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for others</h3>
                <h3 class="amount">$850.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

        </div>


    </section>
    <form action="php/rating.php" method="POST" class="f3">
        <div class="etoile">
            <input type="radio" name="note" value="1"> <span class="etoile">★</span>
            <input type="radio" name="note" value="2"> <span class="etoile">★</span>
            <input type="radio" name="note" value="3"> <span class="etoile">★</span>
            <input type="radio" name="note" value="4"> <span class="etoile">★</span>
            <input type="radio" name="note" value="5"> <span class="etoile">★</span>
        </div>
        <textarea name="post" id="post" rows="10" class="msgg"></textarea>
        <button type="submit" name="check" class="btn">rate</button>
    </form>
    <!-- price section ends -->

    <!-- review section starts  -->
    <!-- <section class="rate" id="rate">
        <div class="container">

            <div class="post">
                <div class="text">Thanks for rating us!</div>
                <div class="edit">EDIT</div>
            </div>

            <div class="star-widget">
                <input type="radio" name="rate-5" id="rate-5">
                <label for="rate-5" class="fas fa-star"></label>
                <input type="radio" name="rate-4" id="rate-4">
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="rate-3" id="rate-3">
                <label for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="rate-2" id="rate-2">
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="rate-1" id="rate-1">
                <label for="rate-1" class="fas fa-star"></label>
                <form name="myForm">
                    <header name="titre" id="titre"> </header>
                    <div class="textarea">
                        <textarea cols="30" placeholder="Describe your experience.." name="message" id="message"></textarea>
                    </div>
                    <div class="btn">
                        <button type="submit" id="rate" name="submit" value="submit"></button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            const btn = document.getElementById("rate");
            const post = document.querySelector("post");
            const widget = document.querySelector("star-widget");
            const editBtn = document.querySelector("edit");
            const titre = document.getElementById("titre").innerHTML;
            const message = document.getElementById("message").innerHTML;
            btn.onclick = () => {
                widget.style.display = "none";
                post.style.display = "block";
                // editBtn.onclick = () => {
                //     widget.style.display = "block";
                //     post.style.display = "none";
                //     $.ajax({
                //         url: "./php/rating.php",
                //         type: 'post',
                //         data: {
                //             titre: titre,
                //             message: message
                //         },
                //         success: function(result) {
                //             console.log(result);
                //         },
                //         error: function() {
                //             console.log('error');
                //         }
                //     })
                // 
                // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //     $titre = $_POST['titre'];
                //     $message = $_POST['message'];
                //     $sql = "INSERT into rating(titre,message) values('$titre','$message') ";

                //     if ($connect->query($sql) === TRUE) {
                //         echo "New record created successfully";
                //     } else {
                //         echo "Error: " . $sql .
                //             "<br>" . $connect->error;
                //     }
                // }

                // ?>

                return false;
            }
        </script>
    </section> -->

    <section class="reivew" id="review">


        <h1 class="heading">client's <span>review</span></h1>

        <div class="review-slider swiper-container">

            <div class="swiper-slide box">
                <?php
                $result = mysqli_query($connect, 'SELECT * FROM rating');

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="swiper-wrapper">


                        <i class="fas fa-quote-right"></i>

                        <div class="user" id="<?php echo $row['id']; ?>">
                            <img src=" images/pic-1.png" alt="">

                            <div class="user-info">
                                <h3>user</h3>
                                <p> <?php echo $row['message']; ?> </p>
                            </div>
                        </div>
                        <p class="user-info-1"><?php
                                                $nb = $row['nb'];
                                                if ($nb == 1) {
                                                    echo "very bad";
                                                ?>
                                <span class="et">★</span>
                            <?php
                                                } elseif ($nb == 2) {
                                                    echo "bad";
                            ?>
                                <span class="et">★★</span>
                            <?php
                                                } elseif ($nb == 3) {
                                                    echo "good";
                            ?>
                                <span class="et">★★★</span>
                            <?php
                                                } elseif ($nb == 4) {
                                                    echo "very good";
                            ?>
                                <span class="et">★★★★</span>
                            <?php
                                                } else {
                                                    echo "fantastic";
                            ?>
                                <span class="et">★★★★★</span>
                            <?php
                                                }


                            ?>
                        </p>

                    </div>

                <?php
                }
                ?>



                <!-- <div class=" swiper-wrapper">

                                <div class="swiper-slide box">
                                    <i class="fas fa-quote-right"></i>
                                    <div class="user">
                                        <img src="images/pic-1.png" alt="">
                                        <div class="user-info">
                                            <h3>john deo</h3>
                                            <span>happy clients</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae
                                        eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis
                                        voluptatibus nihil.</p>
                                </div>

                                <div class="swiper-slide box">
                                    <i class="fas fa-quote-right"></i>
                                    <div class="user">
                                        <img src="images/pic-2.png" alt="">
                                        <div class="user-info">
                                            <h3>john deo</h3>
                                            <span>happy clients</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae
                                        eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis
                                        voluptatibus nihil.</p>
                                </div>

                                <div class="swiper-slide box">
                                    <i class="fas fa-quote-right"></i>
                                    <div class="user">
                                        <img src="images/pic-3.png" alt="">
                                        <div class="user-info">
                                            <h3>john deo</h3>
                                            <span>happy clients</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae
                                        eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis
                                        voluptatibus nihil.</p>
                                </div>

                                <div class="swiper-slide box">
                                    <i class="fas fa-quote-right"></i>
                                    <div class="user">
                                        <img src="images/pic-4.png" alt="">
                                        <div class="user-info">
                                            <h3>john deo</h3>
                                            <span>happy clients</span>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae
                                        eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis
                                        voluptatibus nihil.</p>
                                </div>
                            </div> -->






            </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <form action="./php/envoyer.php" method="POST">
            <div class="inputBox">
                <input type="text" placeholder="name" name="name">
                <input type="email" placeholder="email" name="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" name="number">
            </div>
            <textarea name="" placeholder="your message" id="" cols="30" rows="10" name="message"></textarea>
            <input type="submit" value="send message" class="btn" name="button">
        </form>

    </section>

    <!-- contact section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>branches</h3>
                <a href="https://www.google.tn/maps/place/Les+Grottes+bizerte/@37.3109472,9.8570294,13z/data=!4m5!3m4!1s0x12e31dbf2734d351:0x827598519e3d2b67!8m2!3d37.3322709!4d9.8550743?hl=fr"> <i class="fas fa-map-marker-alt"></i> TUNISIA </a>
                <a href="https://www.google.tn/maps/place/Japon/@32.1573814,118.9311518,4z/data=!3m1!4b1!4m5!3m4!1s0x34674e0fd77f192f:0xf54275d47c665244!8m2!3d36.204824!4d138.252924?hl=fr"> <i class="fas fa-map-marker-alt"></i> JAPON </a>
                <a href="https://www.google.tn/maps/place/États-Unis/@36.1962794,-113.8142703,4z/data=!3m1!4b1!4m5!3m4!1s0x54eab584e432360b:0x1c3bb99243deb742!8m2!3d37.09024!4d-95.712891?hl=fr"> <i class="fas fa-map-marker-alt"></i> USA </a>
                <a href="https://www.google.tn/maps/place/Émirats+arabes+unis/@24.3374019,51.7053576,7z/data=!3m1!4b1!4m5!3m4!1s0x3e5e48dfb1ab12bd:0x33d32f56c0080aa7!8m2!3d23.424076!4d53.847818?hl=fr"> <i class="fas fa-map-marker-alt"></i> UAE </a>
                <a href="https://www.google.tn/maps/place/Hongrie/@47.1391482,17.2559251,7z/data=!3m1!4b1!4m5!3m4!1s0x4741837bdf37e4c3:0xc4290c1e1010!8m2!3d47.162494!4d19.5033041?hl=fr"> <i class="fas fa-map-marker-alt"></i> HUNGARY </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
                <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
                <a href="#price"> <i class="fas fa-arrow-right"></i> price </a>
                <a href="#review"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>

            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href=""> <i class="fas fa-phone"></i> +216 54 612 783 </a>

                <a href="https://mail.google.com/mail/u/0/#inbox?compose=new"> <i class="fas fa-envelope"></i> aghx01@gmail.com </a>

                <a href="https://www.google.tn/maps/place/Les+Grottes+bizerte/@37.3109472,9.8570294,13z/data=!4m5!3m4!1s0x12e31dbf2734d351:0x827598519e3d2b67!8m2!3d37.3322709!4d9.8550743?hl=fr"> <i class="fas fa-map-marker-alt"></i> Bizerte, TUNISIA - 7002 </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/profile.php?id=100055147321358"> <i class="fab fa-facebook-f"></i> facebook </a>
                <!-- <a href="#"> <i class="fab fa-twitter"></i> twitter </a> -->
                <a href="https://www.instagram.com/_ahmed_gharbi_/"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="https://www.linkedin.com/in/ahmed-gharbi-48b68724b/"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>Mr agh web designer</span> | all rights reserved || 2022 </div>

    </section>

    <!-- footer section ends -->

    <!-- theme toggler  -->

    <div class="theme-toggler">

        <div class="toggle-btn">
            <i class="fas fa-cog"></i>
        </div>

        <h3>choose color</h3>

        <div class="buttons">
            <div class="theme-btn" style="background: #3867d6;"></div>
            <div class="theme-btn" style="background: #f7b731;"></div>
            <div class="theme-btn" style="background: #ff0033;"></div>
            <div class="theme-btn" style="background: #20bf6b;"></div>
            <div class="theme-btn" style="background: #fa8231;"></div>
            <div class="theme-btn" style="background: #FC427B;"></div>
        </div>

    </div>



    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // when the user clicks on like
            $('.like').on('click', function() {
                var postid = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'index.php',
                    type: 'post',
                    data: {
                        'liked': 1,
                        'postid': postid
                    },
                    success: function(response) {
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });

            // when the user clicks on unlike
            $('.unlike').on('click', function() {
                var postid = $(this).data('id');
                $post = $(this);

                $.ajax({
                    url: 'index.php',
                    type: 'post',
                    data: {
                        'unliked': 1,
                        'postid': postid
                    },
                    success: function(response) {
                        $post.parent().find('span.likes_count').text(response + " likes");
                        $post.addClass('hide');
                        $post.siblings().removeClass('hide');
                    }
                });
            });
        });
    </script>

















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>