<!-- resources/views/welcome.blade.php -->

@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">George Mutembei</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=georgemutembei9@gmail.com&su=SUBJECT&body=BODY" class="menu-btn">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/me.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm George and I'm a <span class="typing-2"></span></div>
                    <p> Am a students at <b>University of Eastern Africa, Baraton,</b> taking <b>Bachelor of Science in Software Engineering.</b>
                        I am a Passionate software engineering student with a hands-on, high-energy approach, well-developed skills in Agile methodology, 
                       Web development, web Design and an unapologetically user focused philosophy. Have developed several web projects working in a team 
                       with other students and other alone, including my own portfolio, hotel management system and a point-of-sale system for a clinic.
                       For More information you can check my Curriculum Vitae (CV) from the link Below: 
                    </p>
                    <a href="https://drive.google.com/file/d/1tRO_t3Mpy2azul-_Ox9eHqcaDR82Lu10/view?usp=sharing">Download Resume</a>
                    <a href="https://drive.google.com/file/d/1BByVKbfOS5m_NV7dvkL0kHpup3qZ2Elp/view?usp=sharing">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>I have more than one year experience as a web Designer and i offer quality service.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Web development </div>
                        <p>With knowledge web development tool and skills over time i offer this service</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>Using UI lends itself to the overall style of the app,
                         UX focuses on the actual functionality and usability.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My skills and  experiences.</div>
                    <p>As a web developer i have the following <b>personal skills.</b>
                        <li>Good communication skill both written and verbal</li>
                        <li>Good listener</li>
                        <li>Analytical skills</li>
                        <li>Interpersonal skills</li>
                        <li>Negotiation skills</li>  
                        <li>Presentation Skills</li>                     

                    </p>

                    <a href="https://www.linkedin.com/in/george-mutembei-559363177/">Linkedin</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="text">As a web developer i have the following <b>Professional  skills.</b></div>
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Referees</h2>
            <div class="carousel owl-carousel">
                <!--
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>-->
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Roseline Wangui</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Elphas Sagas</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Pius Kiriaki Kobia</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>To get in Touch with me I preffer Email or Phone Call</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name:</div>
                                <div class="sub-title">George Mutembei</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa-solid fa-phone"></i>
                            <div class="info">
                                <div class="head">Tel:</div>
                                <div class="sub-title">+254-702-650-590</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email:</div>
                                <div class="sub-title">georgemutembei9@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection