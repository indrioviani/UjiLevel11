<div class="container-bg" id="ContactPage">
    <div class="contact-container">
        <div class="contact-form">
            <h2>Kontak</h2>
            <form method="POST" action="">
                @csrf
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />

                <label for="message">Pesan:</label>
                <textarea id="message" name="message"></textarea>

                <button type="submit">Kirim</button>
            </form>
        </div>
        <div class="map">
            <!-- Tempat untuk menyematkan peta (gunakan iframe atau komponen peta React) -->
            <iframe
                title="Google Map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.489424438151!2d106.7562394747538!3d-6.585920893407668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5457e0e3bcf%3A0x58481d58737539c0!2sSMK%20Negeri%201%20Ciomas!5e0!3m2!1sid!2sid!4v1705037488596!5m2!1sid!2sid" 
                frameborder="0"
                allowfullscreen=""
                loading="lazy"
            ></iframe>
        </div>
    </div>
</div>

<footer>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="80x" src="images/logoo.png" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong>ALAMAT:</strong> 28 White tower, Street Name New York City, USA</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> freyaanadeak@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Menu</h3>
                        <ul>
                        <li><a href="#home-section">Beranda</a></li>
                           <li><a href="#about-section">Tentang Kami</a></li>
                           <li><a href="#product-section">Menu</a></li>
                           <li><a href="#ContactPage">Kontak</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Akun</h3>
                        <ul>
                           <li><a href="{{ route('login') }}">Masuk</a></li>
                           <li><a href="{{ route('register') }}">Daftar</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
               <div class="col-md-3">
               <div class="sosmed">
               <h3>Sosial Media</h3>
               <ul>
                  <li><a href="https://wa.me/+62 897-5618-892" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a></li>
                  <li><a href="https://www.instagram.com/wtarsih?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
                  <li><a href="https://twitter.com/your_username" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                  <li><a href="https://www.facebook.com/your_page/" target="_blank"><i class="fab fa-facebook"></i> Facebook</a></li>
               </ul>
               </div>
                      </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
            <p class="mx-auto">© 2024 Team Samudra Rasa<br>         
            </p>
         </div>
      </footer>