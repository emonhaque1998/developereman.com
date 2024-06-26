<section class="about-area rel z-1">
    <div class="for-bgc-black py-130 rpy-100">
        <div class="container">
            <div class="row gap-100 align-items-center">
                <div class="col-lg-7">
                    <div class="about-content-part rel z-2 rmb-55">
                        <div class="section-title mb-35 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">About Me</span>
                            <h2>{!! $about->title ?? "Title Not Found" !!}</h2>
                            <p>{{ $about->description ?? "No Description" }}</p>
                        </div>
                        <ul class="list-style-one two-column wow fadeInUp delay-0-2s">
                            @isset($about->service)
                                @foreach ($about->service as $service)
                                    <li>{{ $service }}</li>
                                @endforeach
                            @endisset
                        </ul>
                        <div class="about-info-box mt-25 wow fadeInUp delay-0-2s">
                            <div class="info-box-item">
                                <i class="far fa-envelope"></i>
                                <div class="content">
                                    <span>Email Us</span><br>
                                    <a href="mailto:{{ $about->email ?? "" }}">{{ $about->email ?? "No Email" }}</a>
                                </div>
                            </div>
                            <div class="info-box-item">
                                <i class="far fa-phone"></i>
                                <div class="content">
                                    <span>Make A Call</span><br>
                                    <a href="callto:+000(123)45688">{{ $about->number ?? "No Number" }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-image-part wow fadeInUp delay-0-3s">
                        @isset($about)
                        <img src="{{ asset("storage/$about->author_image") }}" alt="About Me">
                        @endisset
                        <div class="about-btn btn-one wow fadeInRight delay-0-4s">
                            <img src="assets/images/about/btn-image1.png" alt="Image">
                            <h6>{{ $about->experience ?? "" }}</h6>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="about-btn btn-two wow fadeInRight delay-0-5s">
                            @isset($about)
                            <img height="40" width="40" src="{{ asset("storage/$about->avater") }}" alt="Image">
                            @endisset
                            <h6>{{ $about->author ?? ""}}</h6>
                            <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="dot-shape">
                            <img src="assets/images/shape/about-dot.png" alt="Shape">
                        </div>
                    </div>
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
