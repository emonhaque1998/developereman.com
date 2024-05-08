<!-- main header -->
<header class="main-header menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="index.html"><img src="assets/images/logos/logo.png" alt="Logo" title="Logo"></a></div>
                </div>

                <div class="nav-outer clearfix mx-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                           <div class="mobile-logo my-15">
                               <a href="index.html">
                                    <img src="assets/images/logos/logo.png" alt="Logo" title="Logo">
                               </a>
                           </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}" wire:navigate>Home</a>
                                </li>
                                <li><a href="/about" wire:navigate>about</a></li>
                                <li><a href="{{ url("/service") }}" wire:navigate>services</a></li>
                                <li><a href="{{ url("/project") }}" wire:navigate>projects</a>
                                </li>
                                <li><a href="{{ url("/blogs") }}" wire:navigate>blog</a>
                                </li>
                                <li><a href="{{ url("/contact") }}" wire:navigate>Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Menu Button -->
                <div class="menu-btns">
                    <!-- menu sidbar -->
                    <div class="menu-sidebar">
                        <button>
                            <img src="assets/images/shape/sidebar-tottler.svg" alt="Toggler">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
