<div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('frontend.index') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('frontend.index', ['q' => 'about']) }}" class="nav-item nav-link">About</a>
                    <a href="{{ route('frontend.index', ['q' => 'news']) }}" class="nav-item nav-link">Activities</a>
                   <a href="{{ route('frontend.index', ['q' => 'contact']) }}" class="nav-item nav-link">Contact</a>
                    {{-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div> --}}
                    
                </div>
        
</div>