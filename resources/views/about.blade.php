@extends('layouts.master')

@section('content')
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About</h2>
      <p>I am currently in my third year, pursuing a degree in Computer Science and Engineering. Over the course of my academic tenure, I have acquired a robust proficiency in various programming languages, including Java, C, React, and Python. Additionally, I have gained expertise in web development technologies such as HTML, CSS, and JavaScript. As part of a collaborative effort with my team, I successfully created an Android Application designed for online appointment management. Furthermore, we collectively developed an E-commerce website, showcasing our practical application of skills in real-world projects.
      </p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="images/portfolio.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>Web Design &amp; Developer.</h3>
        <p class="fst-italic">
          Personal Details
        </p>
        <p>Hello, I am Moshiur Rahman, a passionate and dedicated student based in Dhaka, Bangladesh. Currently pursuing my degree in Computer Science and Engineering (CSE) at Sonargaon University, I am enthusiastic about exploring the dynamic world of technology. Throughout my academic journey, I have gained a solid foundation in programming languages such as Java, C, and Python. I have developed a strong understanding of data structures, algorithms, and software development principles. I enjoy solving complex problems and leveraging my skills to create innovative and efficient solutions.

          If you're interested in collaboration or have any inquiries, feel free to explore my Facebook at https://www.facebook.com/creativemoshiur. I'm available for freelance opportunities and can be reached at creativemoshiur@gmail.com or by phone at +8801853836164. Looking forward to connecting with you!





        </p>

      </div>
    </div>

  </div>
</section>


<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
  <div class="container">

    <div class="section-title">
      <h2>Skill</h2>
      <p>As a beginner, i have gathered the following skills.Still now,I'm learning to improve skills.</p>
    </div>

    <div class="row skills-content">

      <div class="col-lg-6" data-aos="fade-up">

        <div class="progress">
          <span class="skill">JavaScript <i class="val">75%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="progress">
          <span class="skill">PHP <i class="val">80%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="progress">
          <span class="skill">WordPress <i class="val">90%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
            
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <div class="progress">
          <span class="skill">HTML <i class="val">100%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>


        <div class="progress">
          <span class="skill">CSS <i class="val">90%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="progress">
          <span class="skill">Bootstrap <i class="val">80%</i></span>
          <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  
        </div>

      </div>

    </div>

  </div>
</section><!-- End Skills Section -->

<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
    </div>

    <div class="row">
      <div class="col-lg-6" data-aos="fade-up">

        <div class="resume-item pb-0">
          <h4>Moshiur Rahman </h4>
          <p><em>I'm a student and a Beginner Web Developer.</em></p>
          <ul>
            <li>Dhaka, Bangladesh</li>

          </ul>
        </div>

        <h3 class="resume-title">Education</h3>
        <div class="resume-item">
          <h4>B.Sc in CSE</h4>
          <h5>2019 - 2023</h5>
          <p><em>Sonargaon University,Bangladesh</em></p>
        </div>
        <div class="resume-item">
          <h4>HSC</h4>
          <h5>2014 - 2018</h5>
          <p><em>Dhaka Polytechnic Institute <br>Dhaka, bangladesh</em></p>


        </div>
        <div class="resume-item">
          <h4>SSC</h4>
          <h5>2013 - 2014</h5>
          <p><em>Jamalpur High School <br> Jamalpur</em></p>
        </div>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

        <h3 class="resume-title">Working Experience</h3>
        <div class="resume-item">
          <h4>Support Engineer</h4>
          <h5>ITOOLAPK</h5>
          <ul>
            <li>As a Support Engineer,Our primary focus is to provide a user-friendly interface that ensures a seamless experience for our visitors. We understand the importance of convenience and accessibility, and our platform is designed to cater to the needs and preferences of different users.With a diverse collection of APK files available on our platform, we aim to offer a wide range of choices to our users. Whether they are looking for popular applications or niche games, our goal is to meet their demands and provide them with the APKs they seek.<a href="https://itoolapk.com">Click here</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Resume Section -->
@endsection