<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I'm a Web Developer, Web Designer and Photographer based in Dublin, Ireland. This is my portfolio website. Please contact me if you have any queries at ceo@kollk.com." />
    <link rel="apple-touch-icon" sizes="180x180" href="public/img//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/img/favicon-16x16.png">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="public/img/site.webmanifest">
    <link rel="stylesheet" href="public/css/all.css">
    <link rel="stylesheet" href="public/css/main.css">
    <title>Personal Portfolio / Web Development / Photography</title>
</head>

<body id="body">
    <div class="container" id="home-smooth">
        <header class="header">
            <nav class="nav">
                <ul>
                    <li><a href="#home-smooth">Home</a></li>
                    <li><a href="#portfolio-smooth">Portfolio</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <section class="header__photo" id="logo" onclick="click_logo()">
                <div id="IE-only" class="header__photo-logo"></div>
                <div class="logo-img"></div>
            </section>
            <section class="header__mindetails">
                <div class="header__mindetails-left">
                    <div class="left-shape"></div>
                    <p class="header-p">
                        “What lies before us and what lies behind us are tiny matters compared to what lies within
                        us.”&nbsp;<span>-Oliver Wendell Holmes</span>
                    </p>
                </div>
                <div class="header__mindetails-center">
                    <picture>
                        <source media="(min-width:650px)" srcset="public/img/me_01.png">
                        <img src="public/img/me_02.png" alt="My image" class="center-img">
                    </picture>
                </div>
                <div class="header__mindetails-right">
                    <div class="right-shape"></div>
                    <p class="header-p">
                        “What you get by achieving your goals is not as important as what you become by achieving your
                        goals.”&nbsp;<span>– Henry D. Thoreau</span>
                    </p>
                </div>
            </section>
        </header>
        <section class="section">
            <!--First header section -->
            <div class="section__top">
                <h1>Hi there,</h1>
                <h2>my name is Lukasz and this is my</h2>
                <h2>portfolio website</h2>
            </div>
            <div class="section__left">
                <p class="section-p">
                    This site is designed and coded by me. It's basically a testimonial of my skills as a web developer. What you will find here is a list of my skills followed by education and much more, including a gallery with my recent work as I am a passionate photographer in free time...
                </p>
            </div>
            <div class="section__left-btn">
                <a class="btn" href="#portfolio-smooth">portfolio</a>
            </div>
            <div class="section__center">
                <p class="section-p">
                    Here in this section you can find a gallery. A gallery of my pictures taken in different scenarios starting with a landscape, portrait continuing with a nature photography up to my favourite automotive...
                </p>
            </div>
            <div class="section__center-btn">
                <a class="btn" href="#gallery">Gallery</a>
            </div>
            <div class="section__right">
                <p class="section-p">
                    In this section you can contact me by simply sending me a query (connected to web development or photography) by filling the contact form. It's very short, it won't take much of your time and it can bring us fruitful cooperation in the future.
                </p>
            </div>
            <div class="section__right-btn">
                <a class="btn" href="#contact">contact</a>
            </div>
        </section>
        <section class="portfolio">
            <div class="portfolio__header">
                <h1 id="portfolio-smooth">~Portfolio~</h1>
            </div>
            <div class="portfolio__details">
                <h2>Details</h2>
                <table class="portfolio__details-table">
                    <tr>
                        <th>Name:</th>
                        <td>Lukasz Kolano</td>
                    </tr>
                    <tr>
                        <th>DOB:</th>
                        <td>1982.08</td>
                    </tr>
                    <tr>
                        <th>Location:</th>
                        <td>Dublin/Ireland</td>
                    </tr>
                </table>
            </div>
            <div class="portfolio__education">
                <h2>Education</h2>
                <table class="portfolio__education-table">
                    <tr>
                        <th>2020-2021</th>
                        <td>CCT Web Development</td>
                    </tr>
                    <tr>
                        <th>2019</th>
                        <td>CCT Python Programming</td>
                    </tr>
                    <tr>
                        <th>2014</th>
                        <td>IBAT Advanced Web Design</td>
                    </tr>
                    <tr>
                        <th>2013-2014</th>
                        <td>IBAT Advanced Web Design</td>
                    </tr>
                </table>
            </div>

            <div class="portfolio__skills">
                <h2>Skills</h2>
                <table class="portfolio__skills-table">
                    <tr>
                        <th>html</th>
                        <td class="html">100</td>
                    </tr>
                    <tr>
                        <th>css</th>
                        <td class="css">100</td>
                    </tr>
                    <tr>
                        <th>js</th>
                        <td class="js">50</td>
                    </tr>
                    <tr>
                        <th>php</th>
                        <td class="php">50</td>
                    </tr>
                </table>
                <table class="portfolio__skills-table lm">
                    <tr>
                        <th>mysql</th>
                        <td class="mysql">50</td>
                    </tr>
                    <tr>
                        <th>rwd</th>
                        <td class="rwd">90</td>
                    </tr>
                    <tr>
                        <th>python</th>
                        <td class="python">35</td>
                    </tr>
                    <tr>
                        <th>django</th>
                        <td class="django">20</td>
                    </tr>
                </table>
            </div>
            <div class="portfolio__tools">
                <h2>Tools</h2>
                <table class="portfolio__tools-table">
                    <tr>
                        <th>vscode</th>
                        <td class="vscode">90</td>
                    </tr>
                    <tr>
                        <th>sass</th>
                        <td class="sass">100</td>
                    </tr>
                    <tr>
                        <th class="smaller-font">photoshop</th>
                        <td class="phts">70</td>
                    </tr>
                    <tr>
                        <th>codepen</th>
                        <td class="codepen">100</td>
                    </tr>
                </table>
                <table class="portfolio__tools-table lm">
                    <tr>
                        <th>xampp</th>
                        <td class="xampp">70</td>
                    </tr>
                    <tr>
                        <th>bootstrap</th>
                        <td class="boot">90</td>
                    </tr>
                    <tr>
                        <th class="smaller-font">Lightroom</th>
                        <td class="ltr">100</td>
                    </tr>
                    <tr>
                        <th>CDT/FDT</th>
                        <td class="devTool">100</td>
                    </tr>
                </table>
            </div>
            <div class="portfolio__interests">
                <h2>Interests</h2>
                <table class="portfolio__interests-table">
                    <tr>
                        <td>Photography</td>
                    </tr>
                    <tr>
                        <td>Videography</td>
                    </tr>
                    <tr>
                        <td>Automotive</td>
                    </tr>
                    <tr>
                        <td>Car detailing</td>
                    </tr>
                </table>
                <table class="portfolio__interests-table lm">
                    <tr>
                        <td>Books</td>
                    </tr>
                    <tr>
                        <td>Swimming</td>
                    </tr>
                    <tr>
                        <td>Jogging</td>
                    </tr>
                    <tr>
                        <td>Cycling</td>
                    </tr>
                </table>
                <table class="portfolio__interests-table lm">
                    <tr>
                        <td>Traveling</td>
                    </tr>
                    <tr>
                        <td>Hiking</td>
                    </tr>
                    <tr>
                        <td>Netflix</td>
                    </tr>
                    <tr>
                        <td>Music</td>
                    </tr>
                </table>
            </div>
        </section>
        <section class="mywork">
            <div class="mywork__header">
                <h1>~My work~</h1>
            </div>
            <div class="mywork__links">
                <div class="mywork__links-one">
                    <a href="http://www.kollk.com/PhpMysqlSite" target="_blank">&nbsp;</a>
                </div>
                <div class="mywork__links-two">
                    <a href="http://www.kollk.com/web_site" target="_blank">&nbsp;</a>
                </div>
            </div>
        </section>
        <section class="gallery">
            <div class="gallery__header">
                <h1 id="gallery">~Gallery~</h1>
            </div>
            <div class="gallery__photos">
                <img src="public/img/Gallery/Image01.jpg" alt="picture1">
                <img src="public/img/Gallery/Image02.jpg" alt="picture2">
                <img src="public/img/Gallery/Image03.jpg" alt="picture3">
                <img src="public/img/Gallery/Image04.jpg" alt="picture4">
                <img src="public/img/Gallery/Image05.jpg" alt="picture5">
                <img src="public/img/Gallery/Image06.jpg" alt="picture6">
                <img src="public/img/Gallery/Image07.jpg" alt="picture7">
                <img src="public/img/Gallery/Image08.jpg" alt="picture8">
                <img src="public/img/Gallery/Image09.jpg" alt="picture9">
                <img src="public/img/Gallery/Image10.jpg" alt="picture10">
            </div>
        </section>
        <section class="contact">
            <div class="contact__header">
                <h1 id="contact">~Contact~</h1>
            </div>
            <div class="contact__form">
                <div class="contact__form-header" id="form">
                    <h2>~Form~</h2>
                </div>

                <?php include("private/php/validation.php") ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#form" class="form" method="POST" novalidate>
                    <label>Name *:</label>
                    <input id="name" type="text" placeholder="Name" name="name" value="<?php if (isset($_POST["name"])) echo $_POST['name']; ?>">
                    <?php echo "<div class='reqval'>" . $nameErr . "</div>" ?>
                    <label>Subject *:</label>
                    <input id="subject" type="text" placeholder="Subject" name="subject" value="<?php if (isset($_POST["subject"])) echo $_POST["subject"]; ?>">
                    <?php echo "<div class='reqval'>" . $subjectErr . "</div>" ?>
                    <label>Email *:</label>
                    <input id="email" type="email" placeholder="Email" name="email" value="<?php if (isset($_POST["email"])) echo $_POST['email']; ?>">
                    <?php echo "<div class='reqval'>" . $emailErr . "</div>" ?>
                    <label>Message *:</label>
                    <textarea id="content" placeholder="Your message..." name="content"></textarea>
                    <?php echo "<div class='reqval'>" . $contentErr . "</div>" ?>
                    <?php include("private/php//mail.php") ?><br>
                    <button class="btn" type="submit" name="submit">Submit</button>
                    <p>* required</p>
                </form>
                
            </div>
            <div class="contact__address">
                <div class="contact__address-header">
                    <h2>~Address~</h2>
                </div>
                <div class="contact__address-box">
                    <ul>
                        <li><a href="mailto:ceo@kollk.com"><i class="fas fa-envelope social-4"></i>ceo@kollk.com</a></li>
                        <li>&nbsp;<i class="fas fa-map-marker-alt social-4"></i>&nbsp;Ireland&nbsp;Co.&nbsp;Dublin</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="map">
            <div class="map__header">
                <h2>~Map~</h2>
            </div>
            <iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </section>
        <footer class="footer">
            <div class="footer__mail">
                <small><a href="mailto:ceo@kollk.com">Send email</a></small>
            </div>
            <div class="footer__social">
                <ul>
                    <li><a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook-square social-1"></i></a></li>
                    <li><a href="http://www.instagram.com/clashofcars182" target="_blank"><i class="fas fa-camera social-2"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCRz3qSzQEpXApP8uAkYVGRw" target="_blank"><i class="fas fa-video social-3"></i></a></li>
                    <li><a href="mailto:ceo@kollk.com"><i class="fas fa-envelope social-4"></i></a></li>
                </ul>
            </div>
            <div class="footer__copy">
                <small>&copy; 2021 Copyright kollk.com. All rights reserved.</small>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="public/js/code.js"></script>
</body>

</html>