<div class="accordion wow fadeInUp delay-0-4s" id="faq-accordion">
    @isset($faqs)
        @foreach ($faqs as $faq)
        <div class="accordion-item">
            <h5 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                    {{ $faq->question }}
                </button>
            </h5>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                <div class="accordion-body">
                    <p>{{ $faq->answer }}</p>
                </div>
            </div>
        </div>
        @endforeach
    @endisset
</div>
