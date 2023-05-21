<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prince Portfolio</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">





  

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick"> <b>E L A V A R A S A N</b> </h1>

          <p class="title">🟢 <b>Student</b> </p>
         
        </div>
        
       
        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:elavarasa.003@gmail.com" class="contact-link">elavarasa.003@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">              <p class="contact-title">Phone</p>

              <a href="tel:+919500103471" class="contact-link">+91 95001 03471</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Birthday</p>

              <time datetime="2001-05-27">May 27, 2001  (22)</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Chennai, India</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">
          <a target="_blank">
            <button class="glow-on-hover" type="button" onclick="setTimeout(function(){ window.location.href = 'https://drive.google.com/file/d/1UgSKwvZhqB48rnGxtgl5PQvsU1P9jAGz/view?usp=share_link'; }, 2000);">
                RESUME
            </button>
        </a>

          <li class="social-item">
            <a href="https://github.com/follow-prince" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://twitter.com/follow_prince_" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.instagram.com/follow.prince" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li class="social-item">
            <a href="https://www.linkedin.com/in/elavarasa003" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>


             
       
        


        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

     

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            My name is  <b>ELAVARASAN</b> and I'm a Web Developer and open-source enthusiast  from Chennai, India.
          </p>

          <p>
            I am a web development beginner studying MCA. Even though I have a B.Com degree, web development is my true passion, and I'm determined to make it my career. I love learning and coming up with new ideas, and I've gained valuable open-source skills from spending a lot of time on the internet.

          
        

          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">
            What i'm doing..</h3>

          <ul class="service-list">




            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/hacker-svg.svg" alt="camera icon" width="100">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Junior CyberSecurity Analyst</h4>

                <p class="service-item-text">
                  I perform beginner-level cyber security analyses of various categories on an average basis.</p>
              </div>

            </li>


            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="100">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="100">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  The most modern and high-quality design made at a professional level.
                </p>
              </div>

            </li>


            
            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/data-report.svg" alt="design icon" width="100">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Data Analyst</h4>

                <p class="service-item-text">
                  As a beginner Data Analyst, you can use Numpy for data manipulation and analysis
                </p>
              </div>

            </li>


          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Experience</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/python-machine-learning.svg" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Machine Learning Intern</h4>
                <time datetime="2023-04-05">Apr 2023 - May 2023</time>


                <div class="testimonials-text" data-testimonials-text>
                  
                  <p>
                    <b>DLK TECHNOLOGIES · Internship</b> <b>Apr 2023 - Present <br/>  Chennai, India · On-site</b> <br/>
                    During my 2-month internship training, I gained extensive experience in machine learning, data analytics, Pythonization on development, and data visualization. Throughout the internship, I proficiently utilized a wide range of tools including Python, NumPy, Pandas, Scikit-Learn, TensorFlow, SQL, and Tableau. Jupyter Notebooks served as a valuable platform for developing, documenting, and presenting my work. <br/>
                    <b>Skills: Python (Programming Language) · Anaconda · Machine Learning · Jupiter · Linux</b>
                    <br/>
                    <br/>
                    
                    <figure>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d485.84860406194645!2d80.20742420779163!3d13.04910921894164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267770c8ad3a3%3A0xdbc356312594c38b!2sDLK%20career%20development!5e0!3m2!1sen!2sin!4v1683440708216!5m2!1sen!2sin" width="350" height="150" style="border:20; 
                     " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </p>
                </div>

              </div>
            </li>

          

         

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/freelance.svg" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Website Developer - Freelance</h4>
                <time datetime="2023-02-25">Feb 2023 - Present </time>


                <div class="testimonials-text" data-testimonials-text>

                  <p>
                    <b>Fiverr · FreelanceFiverr · Feb 2023 - Present</b> <br/> <b>India · Remote</b> <br/>
                    As a portfolio website freelancer, I designed and developed websites for clients, offering three distinct packages - Simple, Advanced, and Premium. Using HTML & CSS, JavaScript, PHP, Python, and TypeScript, I created stunning websites with various features such as payment integration, forum setup, social media integration, analytics setup, video embedding, events listing, music integration, chat integration, FAQ section, and gallery display.

                    The Premium package, in particular, offered unlimited revisions, full e-commerce functionality, and premium hosting setup, ensuring a seamless user experience for customers. Additionally, I provided an About section to introduce myself and showcase my skills and experience in the field. <br/>
                    <b>Skills: portfolio · Linux · Front-End Development · Web Design · Web Applications · Website Monetization</b>
                    <br/>
                    <br/>
                    
                    <figure>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248755.79476166767!2d80.04419851228997!3d13.047807812075972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1683442973053!5m2!1sen!2sin"  width="350" height="150" style="border:20; 
                      " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </p>
                </div>

              </div>
            </li>

          





        

          </ul>

        </section>


        <!-- 
          - testimonials modal -- -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon" width="32">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <!-- <time datetime="2023-04-05">Apr 2023 - Present</time> -->

              <div data-modal-text>
               
                <p>
                  As a current intern, I am exploring the exciting field of machine learning and deep learning using Python. My focus is on data mining and analysis, and I am gaining experience with various data mining techniques and algorithms. Through my internship, I have been exposed to real-world data challenges, which have helped me develop my problem-solving skills and apply my knowledge to practical situations. I am eager to continue learning and applying my skills to make an impact in the field of data science.
                </p>
              </div>

            </div>

          </section>

        </div> 


        <!--
          - clients
        -->
        <section class="clients">

          <h3 class="h3 clients-title">Badges</h3>

          <ul class="clients-list has-scrollbar">


            <li class="clients-item">
              
                <img src="./assets/images/cyberSecurity.svg" alt="client logo">
            </li>     

            <li class="clients-item">
             
                <img src="./assets/images/EndpointSecurity.svg" alt="client logo">
            </li>

         



           

            <li class="clients-item">
                <img src="./assets/images/networking-badges.svg" alt="client logo">
            </li>


          </ul>

        </section> 








      </article>










      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Dr MGR Educational and Research Institute · Jul 2022 - Jul 2024 </h4>

              <span>Master of Computer Applications - MCA <br> Grade: Pursuing 1st year</span>

              <p class="timeline-text">
                • First-year PG MCA student with a strong foundation in computer science and programming. <br><br>
                • Expertise in Java, Python, research methodology, full stack development, and intellectual property rights. <br><br>
                • Proficient in object-oriented programming, data structures, and algorithms. <br><br>
                • Building a strong foundation in computer science and preparing for a successful career in the field.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">University of Madras · Jun 2018 - May 2021</h4>

              <span>Bachelor of Commerce - B.Com <br> Grade: First Class</span>

              <p class="timeline-text">
                • Graduated with first-class honors in B.Com with a specialization in accounting and corporate accounting.<br><br>
                • Acquired key skills in financial statement analysis, cost accounting, and budgeting.<br><br>
                • Developed a basic understanding of the legal and regulatory frameworks that businesses operate within through courses in income tax and business law.<br><br>
                • Excited to leverage the knowledge and skills gained during studies to pursue a successful career in the accounting and finance industry.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">HSC - Higher Secondary School Certificate - 2018 </h4>

              <span>Govt Hr Sec school · Percentage: 67%</span>

              
            </li>

          </ol>

        </section>











        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Machine Learning  · Apr 2023 - May 2023</h4>

              <span>DLK TECHNOLOGIES · Internship · On-site</span>

              <p class="timeline-text">
                
During my 2-month internship training, I gained extensive experience in machine learning, data analytics, Pythonization on development, and data visualization. I successfully developed and trained machine learning models, deploying them to production environments. Throughout the internship, I proficiently utilized a wide range of tools including Python, NumPy, Pandas, Scikit-Learn, TensorFlow, SQL, and Tableau. Jupyter Notebooks served as a valuable platform for developing, documenting, and presenting my work.
<br><br>
Moreover, I demonstrated my skills in automating tasks and enhancing development workflows using Python, Git, and GitHub. These abilities allowed me to improve efficiency and streamline processes. Additionally, I showcased my expertise in creating visually appealing charts, graphs, and other visualizations to effectively communicate data insights. Python, Matplotlib, and Seaborn were my go-to tools for this purpose.
                <br><b>Skills: Django · Python (Programming Language) · Anaconda · Machine Learning · Jupiter · Linux</b>
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Website Developer · Feb 2023 - Present</h4>

              <span>Fiverr · Freelance · Remote</span>

              <p class="timeline-text">
                As a portfolio website freelancer, I designed and developed websites for clients, offering three distinct packages - Simple, Advanced, and Premium. Using HTML & CSS, JavaScript, PHP, Python, and TypeScript, I created stunning websites with various features such as payment integration, forum setup, social media integration, analytics setup, video embedding, events listing, music integration, chat integration, FAQ section, and gallery display. <br><br>

                The Premium package, in particular, offered unlimited revisions, full e-commerce functionality, and premium hosting setup, ensuring a seamless user experience for customers. Additionally, I provided an About section to introduce myself and showcase my skills and experience in the field.
                <br>
                <b>Skills: portfolio · Linux · Front-End Development · Web Design · Web Applications · Website Monetization</b>
              </p>

            </li>

          

          </ol>












          






        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web design</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Web Development</h5>
                <data value="70">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Fundamentals of Computer Networking </h5>
                <data value="90">40%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">WordPress</h5>
                <data value="50">30%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 30%;"></div>
              </div>
              


            </li>
            <li class="skills-item">
    
              <div class="title-wrapper">
                <h5 class="h5">Machine Learning </h5>
                <data value="50">40%</data>
              </div>
    
              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>
              
             
    
            </li>
    


             

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Junior CyberSecurity Analyst</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>
              
             

            </li>



            
          </li>
          <li class="skills-item">

            <div class="title-wrapper">
              <h5 class="h5">Data Analyst</h5>
              <data value="50">40%</data>
            </div>

            <div class="skill-progress-bg">
              <div class="skill-progress-fill" style="width: 40%;"></div>
            </div>
            
           

          </li>




   





          

          


          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Applications</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web design</button>
              </li>

              <li class="select-item">
                <button data-select-item>CyberSecurity Analyst</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>
              <li class="select-item">
                <button data-select-item>Data Analyst                </button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/coming-soon-svg.svg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">coming soon </h3>

                <p class="project-category">Exciting news! I'm excited to announce that I have a new website project coming soon!</p>

              </a>
            </li>




          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">








            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/Blog-posts-coming-soon.svg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category"> I'm Writing</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">coming soon</time>
                  </div>

                  <h3 class="h3 blog-item-title">Untitled </h3>

                  <p class="blog-text">
                    Exciting News for Tech Enthusiasts: Mobile Linux Setup Coming Soon..
                  </p>

                </div>

              </a>
            </li>




<!-- 



            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li> -->

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191085.9620897503!2d80.11902151802093!3d13.339938083390868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d81cfa1adae09%3A0xeca1060d7fe1fe9f!2sGummidipoondi%2C%20Tamil%20Nadu%20601201!5e0!3m2!1sen!2sin!4v1683343200073!5m2!1sen!2sin"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="./smtp-mail.php" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>