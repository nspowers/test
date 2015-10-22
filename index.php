<?php include 'homeHeadPartial.php'; ?>
<link rel="stylesheet" href="css/remove-sidebar.css" />

<body>

<?php include 'sidebarMenuPartial.php'; ?>

    <!-- Home Section -->
    <section id="home" class="indexHome">
        <div id="particles-js">

            <div class="row full-width">
                <article class="homeTitleBlock">
                    <h2 id="top" class="homeName text-center">Nathaniel Powers</h2>
                    <h2 class="homeSub text-center">Design <span>+</span> Marketing</h2>
                </article>
            </div>
        </div>
    </section>

   <div class="wrapper">
    <!-- Work Section -->
    <section id="work" class="indexWork">
        <div class="row full-width">
            <article>
                <div class="row">
                    <div class="small-12 columns">
                        <h2 class="selectedWork">Selected Work</h2>

                        <hr class="dotted">
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <ul class="gs-grid small-block-grid-1 medium-block-grid-3 large-block-grid-3 gridWork">
<!--                           <div class="gridBlock">-->
                            <li>
                                <a class="workLink" href="./college-of-science.php">
                                    <div class="thumbnail">
                                        <div class="workLinkImg">
                                            <img class="gs-icon" src="img/links/cos-link-img-400x375.jpg" alt="" width="400" height="375">
                                        </div>
                                    </div>
                                    <h3>NGU College of Science</h3>
                                  <span  class="subheader">Web Design // Development</p>
                                    <p>A comprehensive update for the College of Science website at North Greenville University</p>
                                    <p class="learnMore">Learn More<span class="learnMoreArrow"> →</span>
                                    </p>
                                </a>
                            </li>
<!--                            </div>-->
                            <li>
                                <a class="workLink" href="./prospective-folder.php">
               <div class="thumbnail">
<div class="workLinkImg">
                                        <img class="gs-icon" src="img/links/sptm-link-img-400x375.jpg" alt="" width="400" height="375">
                                    </div>
                                  </div>
                                    <h3>Sport Presentation Folder</h3>
                                    <span class="subheader">Print Design</p>
                                    <p>A professional medium to deliver program information to prospective students.</p>
                                    <p class="learnMore">Learn More<span class="learnMoreArrow"> →</span>
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a class="workLink" href="./allens-ridge.php">
                                                                     <div class="thumbnail">

                                  <div class="workLinkImg">
                                    <img class="gs-icon" src="img/links/arr-link-img-400x375.jpg" alt="">
                                    </div>
                                  </div>
                                    <h3>Allen's Ridge Ranch</h3>
                                    <span class="subheader">Branding // Print Design</p>
                                    <p>Crafting a brand for a premium ranch offering alpaca, Friesian sport horses, Dexter Cattle, and Great Danes</p>
                                    <p class="learnMore">Learn More<span class="learnMoreArrow"> →</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>


    <!-- About Section -->

    <section id="about" class="indexAbout">
                  <div class="aboutImg"></div>

        <div class="row full-width">
            <article>
                <div class="row">
<!--
                    <div class="small-12 columns">
                        <h2 id="contact">About</h2>
                        <hr class="dotted">

                    </div>
-->
                    <!-- twoColumns -->
                    <div class="">
                        <div class="small-12 medium-8 medium-centered columns">
                            <div class="twoColumnText textLeft bodyCopy">
                                <h3 class="twoColumnTitle">About Nathaniel</h3>

                                <p>I am designer. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                            </div>
                        </div>

<!--
                        <div class="small-12 medium-6 columns">

                            <div class="twoColumnText textRight bodyCopy">
                                <h3 class="twoColumnTitle">My Roles</h3>
                                <p>I completed the graphic design, coordinated photography, and wrote copy for a selection of the folder's program content. I also presented the design and printing process to North Greenville University's Sport Marketing class as part of a course section on marketing, print, and web design the professor invited me to teach.</p>
                            </div>
                        </div>
-->
                    </div>
            </article>
            </div>
    </section>

    <!-- Contact Section -->

    <section id="form" class="indexForm">
        <div class="row full-width">
            <article>
                <div class="row">
                    <div class="small-12 columns">
                        <h2 id="contact">Say Hello</h2>
                        <hr class="dotted">

                    </div>
                    <div class="">
                       <form action="contact_us_send.php" method="post">

                        <div class="input-field small-12 medium-6 columns">
                            <input placeholder="Your Name" id="name" name="name" type="text" class="validate">
<!--                            <label for="name"></label>-->
                        </div>

                            <div class="input-field small-12 medium-6 columns">
                                <input placeholder="Your Email"  id="email" name="email" type="email" class="validate">
<!--                                <label for="email"></label>-->
                            </div>
                            <div class="input-field small-12 medium-12 columns">
<!--        <label for="name">Your Message</label>-->
      <textarea placeholder="Your Message" type="text" id="comment" name="comment"></textarea>
<!--
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Textarea</label>
-->
                        </div>
                        <div class="">
                             <div class="small-12 columns">
                              <button type="submit" id="contactFormSubmit" name="submit" value="Submit">Submit</button>
                          </div>
                         </div>
                                                    </form>

                      </div>
            </article>
            </div>
    </section>


    </div>
    
     </div> <!-- end wrapper -->
    <?php include 'footerPartial.php'; ?>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/foundation.sidebar.js"></script>
    <script src="js/app.js"></script>
    <script src="js/gumshoe.js"></script>


    <?php include 'sidebarMenuScriptPartial.php'; ?>

    <?php include 'particlesScriptPartial.php'; ?>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script> 
<script src="js/jquery.localscroll.js" type="text/javascript"></script> 

<script src="//cdn.jsdelivr.net/jquery.localscroll/1.4.0/jquery.localScroll.min.js"></script>
<script src="js/jquery.scrollTo.js" type="text/javascript"></script> 

<script src="//cdn.jsdelivr.net/jquery.scrollto/2.1.2/jquery.scrollTo.min.js"></script>


</body>

</html>
