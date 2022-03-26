<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="css/styles.css">

    <title>Hary | Portfolio Laravel</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">Hary</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">
                    <li class="nav_item">
                        <a href="#home" class="nav_link">
                            <i class="uil uil-estate nav_icon"></i> Home
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#about" class="nav_link">
                            <i class="uil uil-user nav_icon"></i> About
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#skills" class="nav_link">
                            <i class="uil uil-file-alt nav_icon"></i> Skill
                        </a>
                    </li>
                    
                    <li class="nav_item">
                        <a href="#services" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Service
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#portfolio" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Portfolio
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="#contact" class="nav_link">
                            <i class="uil uil-message nav_icon"></i> Contactme
                        </a>
                    </li>
                </ul>
                <i class="uil uil-times nav_close" id="nav-close"></i>
            </div>
            <div class="nav_btns">
                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">

                        <a href="" target="_blank" class="home_social-icon">
                            <i class="uil uil-linkedin"></i>
                        </a>

                        <a href="https://www.instagram.com/arikkmahayana/?utm_medium=copy_link" target="_blank" class="home_social-icon">
                            <i class="uil uil-instagram-alt"></i>
                        </a>

                        <a href="" target="_blank" class="home_social-icon">
                            <i class="uil uil-github"></i>
                        </a>

                    </div>

                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z" />
                                <image class="home_blob-img" x='20' y='10' xlink:href="img/hary1.png" />
                            </g>
                        </svg>
                    </div>
                    <div class="home_data">
                        <h1 class="home_title">Hi, I'am Hary</h1>
                        <h3 class="home_subtitle">Frontend & Backend developer Pemula</h3>
                        <p class="home_description">"Takdir tidak selalu sesuai dengan rencana , itulah mengapa di setiap doa ada semoga"</p>
                        <a href="#contact" class="button button--flex">
                            Contact Me
                            <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button--flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>

                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <h2 class="section_title">About Me</h2>
            <span class="section_subtitle">My introduction</span>

            <div class="about_container container grid">
                <img src="img/about.jpg" alt="" class="about_img">
                <div class="about_data">
                    <p class="about_description">Web developer pemula yang ingin memiliki pengalaman dibidang teknologi ini. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore repellendus itaque rerum!</p>
                    <div class="about_info">
                        <div>
                            <span class="about_info-title">08+</span>
                            <span class="about_info-name">Years <br> experience</span>
                        </div>

                        <div>
                            <span class="about_info-title">20+</span>
                            <span class="about_info-name">completed <br> Project</span>
                        </div>

                        <div>
                            <span class="about_info-title">05+</span>
                            <span class="about_info-name">Companies <br> Worked</span>
                        </div>
                    </div>
                    <div class="about_buttons">
                        <a download="" href="pdf/Alexa-Cv.pdf" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section_title">Skills</h2>
            <span class="section_subtitle">My Technical Level</span>

            <div class="skills_container container grid">
                <div>
                    <!--==================== SKILLS 1 ====================-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>
                            <div>
                                <h1 class="skills_title">Frontend developer</h1>
                                <span class="skills_subtitle">More than 4 years</span>
                            </div>
                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_number">86%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">JavaScript</h3>
                                    <span class="skills_number">74%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_js"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">React</h3>
                                    <span class="skills_number">40%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_react"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--==================== SKILLS 2 ====================-->
                    <div class="skills_content skills_close">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>
                            <div>
                                <h1 class="skills_title">Backend developer</h1>
                                <span class="skills_subtitle">More than 2 years</span>
                            </div>
                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_php"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Java</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_java"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Node Js</h3>
                                    <span class="skills_number">44%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_node"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Phyton</h3>
                                    <span class="skills_number">40%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_python"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                     <!--==================== SKILLS 3 ====================-->
                     <div class="skills_content skills_close">
                        <div class="skills_header">
                            <i class="uil uil-swatchbook skills_icon"></i>
                            <div>
                                <h1 class="skills_title">Designer</h1>
                                <span class="skills_subtitle">More than 1 years</span>
                            </div>
                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Adobe Photoshop</h3>
                                    <span class="skills_number">70%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_photoshop"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Canva</h3>
                                    <span class="skills_number">70%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_canva"></span>
                                </div>
                            </div>

                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Adobe Illustrator</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_illustrator"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section">
            <h2 class="section_title">Qualification</h2>
        </section>

        <!--==================== SERVICES ====================-->
        <section class="services section" id="services">

        </section>

        <!--==================== PORTFOLIO ====================-->
        <section class="portfolio section" id="portfolio">

        </section>

        <!--==================== PROJECT IN MIND ====================-->
        <section class="project section">

        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section">

        </section>

        <!--==================== CONTACT ME ====================-->
        <section class="contact section" id="contact">

        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">

    </footer>

    <!--==================== SCROLL TOP ====================-->


    <!--==================== SWIPER JS ====================-->
    <script src="js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="js/main.js"></script>
</body>

</html>