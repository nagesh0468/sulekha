<?php
session_start();
isset($_SESSION['name']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sulekha</title>
    <link rel="stylesheet" href="/Frented/styles/style.css">
    <script src="https://kit.fontawesome.com/2565579308.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="main">
        <header id="h-container">
            <div class="h-container box">
                <div class="logo box">
                    <div class="logo_img">
                    </div>
                    <div class="country_list box">
                        <ul class="c_lists box">
                            <li><img src="/Frented/images/us.svg" alt="" width="30%" height="20px"> US </li>
                            <li> <img src="/Frented/images/ca.svg" alt="" width="30%" height="20px"> CA</li>
                            <li> <img src="/Frented/images/ae.svg" alt="" width="30%" height="20px"> UAE</li>
                            <li><img src="/Frented/images/gb.svg" alt="" width="30%" height="20px"> UK</li>
                        </ul>

                    </div>
                </div>
                <nav class="nav_list box">
                    <ul class="lists box">
                        <a href="./business.php">
                            <li>List Your Business</li>
                        </a>
                        <a href="./free_add.php">
                            <li>Post a Free Ad</li>
                        </a>

                        <?php
                        $name = $_SESSION['name'] ?? '';
                        if ($name) {
                            echo "
                             <a href='./notification.php'><li><i class='fa-regular fa-bell'></i></li></a>
                             <li class='drop'>{$name}<i class='fa-solid fa-angle-down'></i></li>
                             <ul class='settings toggle'>
                             <a href='./account.php'><li>Account Setting</li></a>
                             <a href='./dashboard.php'><li>My Dashboard</li></a>
                             <a href='/Backend/logout.php'><li>Logout</li></a>
                             </ul>
                            ";
                        } else {
                            echo " <a href='/Frented/componets/signin.php'>
                                <li>Sign Up / Sign In</li>
                        </a>   ";
                        }


                        ?>

                    </ul>
                </nav>


            </div>

        </header>
        <section id="banner">
            <div class="banner_bg box">
            
                <div class="bg_content box">
                
                    <div class="text box">
                        <p class="bg_text">Fast, FREE way to get experts.</p>
                    </div>
                    
                        <div class="search box">

                            <div class="city">
                                <input id="citySearch" type="text" placeholder="Hyderabad" class="inp">
                                <div class="result">

                                </div>
                            </div>
                            <div class="services">
                                <input type="text" id="service" placeholder="Find your service here" class="inp">
                                <div class="service_result">

                                </div>
                            </div>
                            <div class="bg_btn">
                                <input type="button" value="Get Experts" class="btn" id="btn">
                            </div>

                        </div>
                    
                </div>
                
            </div>
            
        </section>
        <section id="users" class="box">
            <div class="users box">
                <div class="user box">
                    <h2  ><span class="num" data-value="300" >0</span>+ M </h2>
                    <p>Happy Users</p>
                </div>
                <div class="user box">
                    <h2 > <span class="num" data-value="200" >0</span>+  K </h2>
                    <p>Verified Experts
                    </p>
                </div>
                <div class="user box">
                    <h2 > <span class="num" data-value="200" >0</span>+ </h2>
                    <p>Categories</p>
                </div>

            </div>

        </section>
        <section id="categories">
            <div class="categories box">
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/home n Office.jfif" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>home & Office</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/home n improvement.png" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>home & improvements</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/rent.png" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>Properties and Rentals</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/education.jfif" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>Education & Training</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/services.png" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>Professional & Services</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/transport.jfif" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>Travel and Transport</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/wealth.png" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>Helth & Wellness</p>
                    </div>
                </div>
                <div class="category box">
                    <div class="c_img box">
                        <img src="/Frented/images/evnts.png!f305cw" alt="" width="80%" height="80px">
                    </div>
                    <div class="c_title box">
                        <p>Events</p>
                    </div>
                </div>


            </div>

        </section>
        <section id="types">
            <div class="type box">
                <div class="t_title box">
                    <h1>Education & Training</h1>
                </div>
                <div class="slider box" id="container">
                </div>
            </div>

            <div class="type box">
                <div class="t_title box">
                    <h1>Home Services</h1>
                </div>
                <div class="slider box" id="h_services">

                </div>
            </div>

            <div class="type box">
                <div class="t_title box">
                    <h1>Business Services</h1>
                </div>
                <div class="slider box" id="b_services">

                </div>
            </div>

            <div class="type box">
                <div class="t_title box">
                    <h1>Properties - Buy, Rent and PG</h1>
                </div>
                <div class="slider box" id="properties">

                </div>
            </div>

            <div class="type box">
                <div class="t_title box">
                    <h1>IT Training</h1>
                </div>
                <div class="slider box" id="training">

                </div>
            </div>

            <div class="type box">
                <div class="t_title box">
                    <h1>Health & Wellness</h1>
                </div>
                <div class="slider box" id="health">

                </div>
            </div>

        </section>

        <section id="albume">
            <div class="albume">
                <div class="row box">
                    <div class="col_1 img1 box">
                        <div class="in_box box">

                            <div class="con">
                                <p class="yellow">Wedding Services</p>
                            </div>
                            <div class="con">

                                <h2>All your wedding needs
                                    at your fingertips!</h2>
                            </div>
                            <div class="con">

                                <p>Weddings are synonymous with a lot of excitement and making the best memories. That being said, creating that fairytale wedding requires months of planning and lots of effort!</p>
                            </div>
                            <div class="con">
                                <button>EXPLORE NOW</button>
                            </div>
                        </div>
                    </div>

                    <div class="col_1 img2">
                        <div class="in_box box">
                            <div class="con">
                                <p class="yellow">Home Improvement</p>
                            </div>
                            <div class="con">

                                <h2>One-stop destination for all your
                                    home improvement needs!</h2>
                            </div>

                            <div class="con">

                                <p>Fantasizing about that beautiful home? Don't stop at just dreaming! Choose from our exclusive services from the best professionals in town and settle down in a niche of your choice.</p>
                            </div>

                            <div class="con">

                                <button>EXPLORE NOW</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="study">
            <div class="study box">
                <div class="s_title box">
                    <h2>Study Abroad Guide</h2>
                </div>
                <div class="s_para box">
                    <p>Top Country Guide, specially crafted for Indian students who aspire to study abroad</p>
                </div>
                <div class="s_cards box" id="cards">
                    <!-- <div class="s_card">
                        <div class="s_img box">
                           <div class="s_round">
                            <img src="/Frented/images/usa.png" alt="" height="100%" width="100%" class="m_round">
                           </div>

                        </div>
                        <div class="s_name box">
                            <p>study in USA</p>
                        </div>
                    </div> -->

                </div>

            </div>

        </section>

        <section id="blog_container">
            <div class="blog_container box">
                <div class="s_title box">
                    <h2>We've got it blogged</h2>
                </div>
                <div class="s_para box">
                    <p>Your Best Practices Guide for all your local service needs</p>
                </div>
                <div class="blogs box">
                    <div class="b_cards">
                        <div class="b_card">
                            <img src="/Frented/images/blog1.png" alt="" width="100%" height="100%">
                        </div>
                        <div class="profile box">
                            <p><i class="fa-regular fa-user"></i>Subhashini</p>
                        </div>
                        <div class="b_title box">
                            <h3>How to Clear the DELF French Certification Exam : Tips ...</h3>
                        </div>
                        <div class="b_content box">
                            <p>A widely accepted French language certification for non-native speakers is the DELF (Diplôme d'Études en Langue Française). Based on the Common European Framework of Reference for Languages (CEFR), it evaluates your French competence at four levels......</p>
                        </div>
                        <div class="b_button box">
                            <button>READ MORE</button>
                        </div>
                    </div>

                    <div class="b_cards">
                        <div class="b_card">
                            <img src="/Frented/images/blog1.png" alt="" width="100%" height="100%">
                        </div>
                        <div class="profile box">
                            <p><i class="fa-regular fa-user"></i>Subhashini</p>
                        </div>
                        <div class="b_title box">
                            <h3>How to Clear the DELF French Certification Exam : Tips ...</h3>
                        </div>
                        <div class="b_content box">
                            <p>A widely accepted French language certification for non-native speakers is the DELF (Diplôme d'Études en Langue Française). Based on the Common European Framework of Reference for Languages (CEFR), it evaluates your French competence at four levels......</p>
                        </div>
                        <div class="b_button box">
                            <button>READ MORE</button>
                        </div>
                    </div>

                    <div class="b_cards">
                        <div class="b_card">
                            <img src="/Frented/images/blog1.png" alt="" width="100%" height="100%">
                        </div>
                        <div class="profile box">
                            <p><i class="fa-regular fa-user"></i>Subhashini</p>
                        </div>
                        <div class="b_title box">
                            <h3>How to Clear the DELF French Certification Exam : Tips ...</h3>
                        </div>
                        <div class="b_content box">
                            <p>A widely accepted French language certification for non-native speakers is the DELF (Diplôme d'Études en Langue Française). Based on the Common European Framework of Reference for Languages (CEFR), it evaluates your French competence at four levels......</p>
                        </div>
                        <div class="b_button box">
                            <button>READ MORE</button>
                        </div>
                    </div>

                    <div class="b_cards">
                        <div class="b_card">
                            <img src="/Frented/images/blog1.png" alt="" width="100%" height="100%">
                        </div>
                        <div class="profile box">
                            <p><i class="fa-regular fa-user"></i>Subhashini</p>
                        </div>
                        <div class="b_title box">
                            <h3>How to Clear the DELF French Certification Exam : Tips ...</h3>
                        </div>
                        <div class="b_content box">
                            <p>A widely accepted French language certification for non-native speakers is the DELF (Diplôme d'Études en Langue Française). Based on the Common European Framework of Reference for Languages (CEFR), it evaluates your French competence at four levels......</p>
                        </div>
                        <div class="b_button box">
                            <button>READ MORE</button>
                        </div>
                    </div>


                </div>



            </div>
            </div>

        </section>

        <section id="review">
            <div class="review box">
                <div class="re_title box">
                    <p>Our user reviews</p>
                </div>
                <div class="search box">
                    <div>
                        <input class="re_search" type="search" placeholder="Search for your categories" />
                    </div>


                </div>
                <div class="re_container box">
                    <div class="re_cards">
                        <div class="icon box">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="re_title_u box">
                            <p>vs vadivelan</p>
                        </div>
                        <div class="update box">
                            <p>Reviewed</p>
                        </div>
                        <div class="re_title_2 box">
                            <p>Suresh Prajapathi</p>
                        </div>
                        <div class="place box">
                            <p>Hyderabad</p>
                        </div>
                        <div class="address box">
                            <p>Massage Centres</p>
                            <span> Communication 5/5 responsiveness 5/5 </span>
                            <span>good price 5/5 ontime services 5/5</span>
                            <span> Service Quality 5/5 </span>
                        </div>
                        <div class="re_button box">
                            <p>READ ALL REVIEWS</p>
                        </div>
                        <div class="rate box">
                            <span>5 <i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                    <div class="re_cards">
                        <div class="icon box">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="re_title_u box">
                            <p>vs vadivelan</p>
                        </div>
                        <div class="update box">
                            <p>Reviewed</p>
                        </div>
                        <div class="re_title_2 box">
                            <p>Suresh Prajapathi</p>
                        </div>
                        <div class="place box">
                            <p>Hyderabad</p>
                        </div>
                        <div class="address box">
                            <p>Massage Centres</p>
                            <span> Communication 5/5 responsiveness 5/5 </span>
                            <span>good price 5/5 ontime services 5/5</span>
                            <span> Service Quality 5/5 </span>
                        </div>
                        <div class="re_button box">
                            <p>READ ALL REVIEWS</p>
                        </div>
                        <div class="rate box">
                            <span>5 <i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                    <div class="re_cards">
                        <div class="icon box">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="re_title_u box">
                            <p>vs vadivelan</p>
                        </div>
                        <div class="update box">
                            <p>Reviewed</p>
                        </div>
                        <div class="re_title_2 box">
                            <p>Suresh Prajapathi</p>
                        </div>
                        <div class="place box">
                            <p>Hyderabad</p>
                        </div>
                        <div class="address box">
                            <p>Massage Centres</p>
                            <span> Communication 5/5 responsiveness 5/5 </span>
                            <span>good price 5/5 ontime services 5/5</span>
                            <span> Service Quality 5/5 </span>
                        </div>
                        <div class="re_button box">
                            <p>READ ALL REVIEWS</p>
                        </div>
                        <div class="rate box">
                            <span>5 <i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                    <div class="re_cards">
                        <div class="icon box">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="re_title_u box">
                            <p>vs vadivelan</p>
                        </div>
                        <div class="update box">
                            <p>Reviewed</p>
                        </div>
                        <div class="re_title_2 box">
                            <p>Suresh Prajapathi</p>
                        </div>
                        <div class="place box">
                            <p>Hyderabad</p>
                        </div>
                        <div class="address box">
                            <p>Massage Centres</p>
                            <span> Communication 5/5 responsiveness 5/5 </span>
                            <span>good price 5/5 ontime services 5/5</span>
                            <span> Service Quality 5/5 </span>
                        </div>
                        <div class="re_button box">
                            <p>READ ALL REVIEWS</p>
                        </div>
                        <div class="rate box">
                            <span>5 <i class="fa-solid fa-star"></i></span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <?php

        include './footer.php'
        ?>
    </main>
    <script type="module" src="/Frented/js/index.js"></script>
    <script type="module" src="/Frented/js/popularCities.js"></script>
    <script type="module" src="/Frented/js/services.js"></script>
    <script type="module" src="/Frented/js/searchDir.js"></script>
    <script>
        
       
    </script>
</body>

</html>