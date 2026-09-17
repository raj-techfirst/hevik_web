   <!-- Modern Footer -->
   <footer class="footer-modern">
       <div class="container-modern">
           <div class="footer-content">
               <div class="footer-section">
                   <div class="footer-brand">
                       <img src="images/logo.png" alt="Tiger Force" class="footer-logo">
                       <p class="footer-description">
                           TIGER FORCE Fence is one of the pioneer in manufacturing various solar fencing systems and solar based components in the Country like Solar Fencing System.
                       </p>
                   </div>
               </div>

               <div class="footer-section">
                   <h4 class="footer-title">Quick Links</h4>
                   <ul class="footer-links">
                       <li><a href="index.php" class="footer-link">Home</a></li>
                       <li><a href="about.php" class="footer-link">About Us</a></li>
                       <li><a href="products.php" class="footer-link">Products</a></li>
                       <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                   </ul>
               </div>

               <div class="footer-section">
                   <h4 class="footer-title">Contact Info</h4>
                   <div class="contact-info">
                       <div class="contact-item">
                           <i class="fas fa-map-marker-alt"></i>
                           <div class="contact-text">
                               <p>H V ENTERPRISE<br>
                                   Shop No. 30, Shashtrinagar(Ajmera),<br>
                                   Nana Mava Main Road, Rajkot-360005.</p>
                           </div>
                       </div>
                       <div class="contact-item">
                           <i class="fas fa-phone"></i>
                           <div class="contact-text">
                               <a href="tel:+919904927824">+91-9904927824</a>
                           </div>
                       </div>
                       <div class="contact-item">
                           <i class="fas fa-envelope"></i>
                           <div class="contact-text">
                               <a href="mailto:hventerprice10@gmail.com">hventerprice10@gmail.com</a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="footer-bottom">
               <div class="footer-bottom-content">
                   <p class="footer-copyright">
                       © 2025 Tiger Force. All rights reserved.
                   </p>
               </div>
           </div>
       </div>
   </footer>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/swiper-bundle.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script>
       // Mobile menu toggle
       const hamburger = document.querySelector(".hamburger-modern");
       const navMenu = document.querySelector(".nav-menu-modern");

       hamburger.addEventListener("click", () => {
           hamburger.classList.toggle("active");
           navMenu.classList.toggle("active");
       });

       // Close menu when clicking on links
       document.querySelectorAll(".nav-link-modern").forEach(n =>
           n.addEventListener("click", () => {
               hamburger.classList.remove("active");
               navMenu.classList.remove("active");
           })
       );

       // Smooth scrolling for anchor links
       document.querySelectorAll('a[href^="#"]').forEach(anchor => {
           anchor.addEventListener('click', function(e) {
               e.preventDefault();
               document.querySelector(this.getAttribute('href')).scrollIntoView({
                   behavior: 'smooth'
               });
           });
       });

       // Add scroll effect to header
       window.addEventListener('scroll', () => {
           const header = document.querySelector('.modern-header');
           if (window.scrollY > 100) {
               header.classList.add('scrolled');
           } else {
               header.classList.remove('scrolled');
           }
       });

       <?php if (isset($initHeroSlider) && $initHeroSlider): ?>
           // Initialize Hero Slider
           const heroSwiper = new Swiper('.hero-swiper', {
               loop: true,
               autoplay: {
                   delay: 5000,
                   disableOnInteraction: false,
               },
               speed: 1000,
               effect: 'fade',
               fadeEffect: {
                   crossFade: true,
               },
               navigation: {
                   nextEl: '.hero-btn-next',
                   prevEl: '.hero-btn-prev',
               },
               pagination: {
                   el: '.hero-pagination',
                   clickable: true,
                   renderBullet: function(index, className) {
                       return '<span class="' + className + '">' + (index + 1) + '</span>';
                   },
               },
           });
       <?php endif; ?>
   </script>
   </body>

   </html>