 <!--- Footer Section --->
 <!--- Footer Section --->
 <footer class="sec-space footer-sec  sec-space-m">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-5 col-lg-12 col-12  mb-lg-3 mb-xl-0 mb-3">
                <div class="footer-description">
                    <img src="{{asset('frontend')}}/images/logo white.png" alt="footer-logo" class="mb-3">
                    <div class="footer-copyright mt-2">
                        <p class="mb-0 text-white">&copy; 2024 Kaykewalk. All rights reserved.</p>
                    </div>
                    <div class="space mt-4">

                        <p class="mb-0 mt-3">Introducing Kaykewalk: Your ultimate project management buddy, making
                            work as refreshing as a sip of 7UP! Say goodbye to chaos and hello to smooth sailing
                            with our super-cool tool. From managing tasks to collaborating with clients, Kaykewalk
                            turns every project into a piece of cake.</p>
                    </div>
                </div>
            </div>
         <div class="col-md-12 col-xl-7 col-lg-12 col-12">
               <div class="row pb-md-0 pb-3">
                    <div class="col-md-12 col-xl-5 col-lg-12 col-12">
                        <div class="footer-list">
                            <h5>Newsletter Signup</h5>
                            <p>Sign up to our exclusive marketing newsletter!</p>
                        </div>
                    </div>         
                    <div class="col-md-12 col-xl-7 col-lg-12 col-12">
                        <form class="row  align-items-center news-letter" method="post" action="{{route('news.store')}}">
                            @csrf
                            <div class="col-md-12 col-xl-7 col-lg-12 col-12 mb-md-0 mb-xl-0 mb-3 mb-md-3 mb-lg-0">
                                <input type="email" class="form-control " id="" name="newsletter_email" placeholder="Enter Your Email Address" required>
                                </div>
                            <div class="col-md-12 col-xl-5 col-lg-12 col-12 mb-lg-3 mb-xl-0 mb-3">
                                <button type="submit" class="btn btn-primary btn-subscribe">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-xl-5 col-lg-12 col-12">
                        <div class="footer-list">
                            <h5 class="mb-0 pb-3">Follow Us</h5>
                            <ul class="list-unstyled social-icon footer-icon">
                                <li><a href="#"><span class='bx bxl-facebook'></span></a></li>
                                <li><a href="#"><span class='bx bxl-instagram'></span></a></li>
                                <li><a href="#"><span class='bx bxl-twitter'></span></a></li>
                                <li><a href="#"><span class='bx bxl-linkedin'></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4 col-lg-12 col-12">
                        <div class="footer-list">
                          <h5 class="mb-0 pb-3">Connect Us</h5>
                            <ul class="list-unstyled footer-icon footer-icon-connect">
                                <li><a href="tel:+1(647)8748762"><span class='bx bx-phone'></span> +1 (647) 874 8762</a></li>
                                <li><a href="mailto:hello@kaykewalk.com"><span class='bx bx-envelope'></span> hello@kaykewalk.com</a></li>
                                <li><a href="#" class="mb-0 pb-0"><span class='bx bx-map'></span>  250 Consumers Road North York, ON M2J 4V6 Canada</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-3 col-lg-12 col-12">
                        <div class="footer-list">
                            <h5 class="mb-0 pb-3">Other Link</h5>
                            <ul class="list-unstyled footer-icon footer-icon-connect">
                                <li><a href="{{route('viewBlog')}}"><span class='bx bx-chevrons-right'></span>Blog</a></li>
                                <li><a href="{{route('viewContactUsPage')}}"><span class='bx bx-chevrons-right'></span>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
               </div>
               </div>
              
         </div>

        </div>


    </div>
</footer>

<!--- Bootstrap Js --->
