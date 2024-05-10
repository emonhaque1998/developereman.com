<div class="widget widget-category wow fadeInUp delay-0-4s">
    <h4 class="widget-title">Category</h4>
    <ul>
        @isset($categories)
            @foreach ($categories as $category)
                <li><i class="far fa-angle-right"></i> <a href="blog.html">{{ $category->category_name }}</a></li>        
            @endforeach
        @endisset
    </ul>
</div>