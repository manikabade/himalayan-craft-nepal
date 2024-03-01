<section class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="index.html" class="navbar-brand" href="#"><img src="{{asset('front/images/2.jpg')}}" alt="" height="40px" width="100%"></a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
{{--                @php--}}
{{--                $url =env('APP_URL')--}}
{{--                @endphp--}}
                <li><a href="{{request()->is('/')?"#top":$_url."#top"}}" class="smoothScroll">Home</a></li>
                <li><a href="{{request()->is('/')?"#about":$_url."#about"}}" class="smoothScroll">About Us</a></li>
                <li><a href="{{request()->is('/')?"#gallery":$_url."#gallery"}}" class="smoothScroll">Gallery</a></li> 
                <li><a href="{{request()->is('/')?"#team":$_url."#team"}}"class="smoothScroll">Items</a></li>
                <li><a href="{{request()->is('/')?"#news":$_url."#news"}}" class="smoothScroll">News</a></li>
                <li><a href="{{request()->is('/')?"#contact":$_url."#contact"}}" class="smoothScroll">Contact</a></li>
                <li class="appointment-btn"><a href="{{request()->is('/')?"#appointment":$_url."#appointment"}}">Order The Item</a></li>

            </ul>
        </div>

    </div>
</section>
