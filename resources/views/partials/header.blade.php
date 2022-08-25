<section>

    <div class="top-header-text">
        <span>dc power visa &#174;</span>
        <span>additional dc sites 🔽</span>
    </div>

    <div class="container">
        <!-- Logo container -->
        <div class="logo">
            <img src="../images/dc-logo.png" alt="dc comics logo">
        </div>
    
        <!-- Header navigation area -->
        <div class="links">
            <nav>
                <ul>
                    <!-- Create a link for every object in the linksArray - different urls and texts -->
                    <li class="{{ Route::current()->getName() === 'home' ? 'active' : '' }}">
                        <a href="{{ route('home')}}"> home </a>
                    </li>
        
                    <li class="{{ Route::current()->getName() === 'comics' ? 'active' : '' }}">
                        <a href="{{ route('comics')}}"> comics </a>
                    </li>
        
                    <li class="{{ Route::current()->getName() === 'movies' ? 'active' : '' }}">
                        <a href="{{ route('movies')}}"> movies </a>
                    </li>
        
                    <li class="{{ Route::current()->getName() === 'tv' ? 'active' : '' }}">
                        <a href="{{ route('tv')}}"> tv </a>
                    </li>

                    <li>
                        <a> games </a>
                    </li>
        
                    <li>
                        <a> collectibles </a>
                    </li>

                    <li>
                        <a> videos </a>
                    </li>

                    <li>
                        <a> fans </a>
                    </li>
        
                    <li>
                        <a> news </a>
                    </li>
                </ul>
            </nav>
        </div>
    
        <div class="input">
            <input type="search" placeholder="search">
        </div>
    </div>
    
    <div class="banner"></div>
</section>