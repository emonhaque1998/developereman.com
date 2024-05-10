<section class="contact-area pt-95 pb-130 rpt-70 rpb-100 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-content-part pt-5 rpt-0 rmb-55 wow fadeInUp delay-0-2s">
                    <div class="section-title mb-40">
                        <span class="sub-title mb-15">Get In Touch</span>
                        <h2>{!! $contact->title ?? "Let’s Talk For your <span>Next Projects" !!}</span></h2>
                        <p>{{ $contact->description ?? "Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis" }}</p>
                    </div>
                    <ul class="list-style-two">
                        @isset($contact->why_chosse_me)
                            @foreach ($contact->why_chosse_me as $chosse)
                                <li>{{ $chosse }}</li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form contact-form-wrap form-style-one wow fadeInUp delay-0-4s">
                    <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" value="" placeholder="Richard D. Hammond" required data-error="Please enter your Name">
                                    <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                                    <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="+880 (123) 456 88" required data-error="Please enter your Phone Number">
                                    <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                    <label for="subject" class="for-icon"><i class="far fa-text"></i></label>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="write message" required data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <button type="submit" class="theme-btn">Send Us Message <i class="far fa-angle-right"></i></button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-lines">
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
    </div>
</section>
