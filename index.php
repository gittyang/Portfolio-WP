

<?php get_header(); ?>
  
  <!-- Main Content -->
  <main>

    <!-- ***Home Section*** -->
    <section id="home">
      <div class="home-title">
        <h1>Tou Toua Yang</h1>
        <p>Front End Developer</p>
        <div class="cta">
          <a href="#projects" class="nav-link">
          Check out my work
          </a>
          <a href="#contact" class="nav-link">
          Let's work together
          </a>
          </div>
      </div>
    </section> <!-- End of Home Section -->


    <!-- ***About Section*** -->
    <section id="about">
      <div class="about-wrapper container">
        <div class="about-head">
          <img class="ah-image" src=<?php echo get_template_directory_uri() . "/img/about.jpg"?> alt="">
        </div>
        <div class="about-description">
          <h2>Front End Developer</h2>
          <h3>Results oriented and an agile collaborator</h3>
          <p>I'm a motivated self-taught developer looking to build relationships, continue developing my skillset and solve real problems for clients and businesses.</p>
          <h3>My Motto</h3>
          <p>Openness to constructive feedback + desire for growth = <br> personal fulfillment & better developmental progress.</p>
          <p>Mutual respect + collaboration = an efficient and healthy team.</p>
          <p>Learn, share, teach. That's how we become better - individually & collectively.</p>
          <h3>Personal Interests</h3>
          <p>Exploring the outdoors, Netflix (TWD, Black Mirror, etc.), Catan, COD Warzone, volleyball, disc golf, etc.</p>     
        </div>  
      </div>
    </section> <!-- End of About Section -->


    <!-- ***Skills*** -->
    <section id="skills">
      <div class="skills-container">
        <div class="skills-top">
          <div class="st-header">
            <h1>Skills</h1>                         
          </div>
          <div class="st-body">

            <div class="st-wrapper-fe">
              <div class="div st-items">
                <i class="fab fa-html5 fa-2x" id="htmlP"></i>
                <p>HTML5</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-css3-alt fa-2x" id="cssP"></i>
                <p>CSS3</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-js-square fa-2x" id="jsP"></i>
                <p>Javascript</p>
              </div>
              <div class="div st-items">
                <img src="img/jquery.png" id="jqueryP" alt="">
                <p>Jquery</p>
              </div>
              <div class="div st-items">
                <i class="far fa-object-group fa-2x" id="designP"></i>
                <p>Responsive <br> Web Design</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-sass fa-2x" id="sassP"></i>
                <p>Sass</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-bootstrap fa-2x" id="bootstrapP"></i>
                <p>Bootstrap</p>
              </div>
            </div>

            <div class="st-wrapper-beo">
              <div class="div st-items">
                <i class="fab fa-node-js fa-2x" id="nodeP"></i>
                <p>NodeJs</p>
              </div>
              <div class="div st-items">
                <img src="img/json.png" id="jsonP" alt="">
                <p>JSON</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-php fa-2x" id="phpP"></i>
                <p>PHP</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-wordpress fa-2x" id="wordpressP"></i>
                <p>Wordpress</p>
              </div>
              <div class="div st-items">
                <i class="fab fa-git-alt fa-2x" id="gitP"></i>
                <p>Github</p>
              </div>
            </div>
          </div>
        </div>
        <div class="skills-process">
          <div class="sp-header">
            <h1>My Process</h1>                      
          </div>
          <div class="sp-body">
            <div class="div sp-items" id="discoverP">
              <i class="far fa-comments fa-2x"></i>
              <p>Discovery</p>
            </div>
            <div class="div sp-items" id="ideaP">
              <i class="far fa-lightbulb fa-2x"></i>
              <p>Idea</p>
            </div>
            <div class="div sp-items" id="uxP">
              <i class="fas fa-pencil-ruler fa-2x"></i>
              <p>UX/UI Design</p>
            </div>
            <div class="div sp-items" id="developP">
              <i class="fas fa-laptop-code fa-2x"></i>
              <p>Develop</p>
            </div>
            <div class="div sp-items" id="testP">
              <i class="fas fa-tasks fa-2x"></i>
              <p>Test</p>
            </div>
            <div class="div sp-items" id="launchP">
              <i class="fas fa-rocket fa-2x"></i>
              <p>Launch</p>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- End of Skills -->


    <!-- ***Projects Section*** -->
    <section id="projects">

      <!-- project container -->
      <div class="projects-container">
        <div class="project-1">
          <div class="project-item-wrap">

            <div class="project-head"></div>

            <div class="project-body">
              <div class="pb-wrapper">
                <div class="pb-top">
                  <h2>GymFitness</h2>
                </div>
                <div class="pb-bottom">
                  <p>A fully dynamic website built on WordPress CMS.</p>
                </div>
                <div class="pb-button">
                  <a href="https://dev-gymfitness.pantheonsite.io/" target="_blank">
                    View Website
                  </a>
                  <a href="https://github.com/gittyang/Gym-WordPress-Theme" target="_blank">
                    View Github
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="project-2">
          <div class="project-item-wrap">

            <div class="project-head"></div>

            <div class="project-body">
              <div class="pb-wrapper">
                <div class="pb-top">
                  <h2>Fangtastic Brows LLC</h2>
                </div>
                <div class="pb-bottom"><p>
                  A website built for a local small business.</p>
                </div>
                <div class="pb-button">
                    <a href="https://fangtasticbrows.netlify.com" target="_blank">
                      View Website
                    </a>
                    <a href="https://github.com/gittyang/Fangtastic-Brows" target="_blank">
                      View Github
                    </a>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div class="project-3">
          <div class="project-item-wrap">

            <div class="project-head">
            </div>

            <div class="project-body">
              <div class="pb-wrapper">
                <div class="pb-top">
                  <h2>Toyota 4Runner</h2>
                </div>
                <div class="pb-bottom"><p>
                  Simple landing page featuring the Toyota 4Runner.</p>
                </div>
                <div class="pb-button">
                    <a href="https://4runner.netlify.com" target="_blank">
                      View Website
                    </a> 
                    <a href="https://github.com/gittyang/Toyota-4runner" target="_blank">
                      View Github
                    </a>
                </div>
              </div>
            </div>

          </div>
        </div>
        
      </div><!-- end of project container -->
    </section><!-- End of Projects Section -->


    <!-- ***Contact Me*** -->
    <section id="contact">
      <div class="contact-content container">
        <div class="contact-text">
          <h2>
            Contact
          </h2>

          <p>
            Please feel free to connect with me on LinkedIn:
          </p>
          <a href="https://www.linkedin.com/in/toutouayang/" target="_blank">
            <b>linkedin.com/toutouayang</b>
            <i class="fas fa-external-link-alt"></i>
          </a>

          <br>
          <br>
          <p>
            You can also contact me at:
          </p>
          <a href="mailto:ttyang251@gmail.com" target="_blank">
            <b>ttyang251@gmail.com</b>
            <i class="fas fa-external-link-alt"></i>
          </a>

          <br>
          <br>
          <br>

          <h3>
            Hope to hear from you!
          </h3>
        </div>

        <div class="contact-svg">
          <img src="<?php echo get_template_directory_uri() . 'img/contact.svg' ?>" alt="">
        </div>
      </div>

    </section> <!-- Contact Me -->

<?php get_footer(); ?>