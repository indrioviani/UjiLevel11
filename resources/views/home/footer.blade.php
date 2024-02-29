<div class="container-bg" id="ContactPage">
    <div class="contact-container">
        <div class="contact-form">
            <h2>Contact</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />

                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="map">
            <!-- Tempat untuk menyematkan peta (gunakan iframe atau komponen peta React) -->
            <?php
            $google_map_embed_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.489424438151!2d106.7562394747538!3d-6.585920893407668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5457e0e3bcf%3A0x58481d58737539c0!2sSMK%20Negeri%201%20Ciomas!5e0!3m2!1sid!2sid!4v1705037488596!5m2!1sid!2sid";
            ?>
            <iframe title="Google Map" src="<?php echo $google_map_embed_url; ?>" frameborder="0" allowfullscreen="" loading="lazy"></iframe>
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
                        <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                        <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                        <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
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
                        <li><a href="#home-section">Home</a></li>
                           <li><a href="#about-section">About</a></li>
                           <li><a href="#product-section">Product</a></li>
                           <li><a href="#ContactPage">Contact</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>Account</h3>
                        <ul>
                           <li><a href="#">Account</a></li>
                           <li><a href="#">Checkout</a></li>
                           <li><a href="#">Login</a></li>
                           <li><a href="#">Register</a></li>
                           <li><a href="#">Shopping</a></li>
                           <li><a href="#">Widget</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
               <div class="col-md-3">
               <div class="sosmed">
               <h3>Account</h3>
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