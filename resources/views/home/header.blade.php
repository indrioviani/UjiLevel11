<header class="header_section fixed-top">
   <!-- Letakkan skrip JavaScript di sini -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            // Smooth scroll for menu links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 1000);
                }
            });

            // Toggle menu function
            $('.layout-menu-toggle').on('click', function(){
                // Tambahkan fungsi toggle menu di sini
            });
        });
    </script>
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="75" src="images/logoo.png" alt="#" />
                  <span class="brand-name">Samudra Rasa</span></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="responsive-navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="#home-section">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#about-section">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#product-section">Menu</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#ContactPage">Contact</a>
                        </li>
                        
                        @if (Route::has('login'))

                        @auth

                        <li class="nav-item">
                        <x-app-layout>
    
                        </x-app-layout>
                        </li>

                        @else
                        <li class="nav-item">
                           <a class="btn btn-RL" id="logincss" href="{{ route('login') }}">Masuk</a>
                        </li>
                        @endauth

                        @endif
                     </ul>
                  </div>
               </nav>
            </div>
            <!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

         </header>