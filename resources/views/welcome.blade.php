@extends('layouts.theme_home')

<body>
    @section ('content')

    <main>
        <section class="our-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="left-content">
                            <br>
                            <h4>About Parkplanet</h4>
                            <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst. Vel sequi odit similique repudiandae ipsum iste, quidem tenetur id impedit, eaque et, aliquam quod.</p>
                            <div class="blue-button">
                                <a href="about-us.html">Discover More</a>
                            </div>

                            <br>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <img src="img/about-1-720x480.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section id="video-container">
            <div class="video-overlay"></div>
            <div class="video-content">
                <div class="inner">
                      <div class="section-heading">
                          <span>Contact Us</span>
                          <h2>Vivamus nec vehicula felis</h2>
                      </div>
                      <!-- Modal button -->

                      <div class="blue-button">
                        <a href="contact.html">Talk to us</a>
                      </div>
                </div>
            </div>
        </section>
    </main>
    @endsection

</body>
</html>