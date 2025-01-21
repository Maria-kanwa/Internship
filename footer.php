<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>Quick Links</h3>
          
            <?php

wp_nav_menu(array(
  'theme_location' => 'secondary',
//   'menu_class' => 'navbar-2',//got the registration of class for styling navbar in style.css
 
))
?>
        </div>
        
        <div class="footer-section">
            <h3>Contact Us</h3>
            <i class="fa-solid fa-envelope"></i>&nbsp; Email: info@example.com<br>
<i class="fa-solid fa-phone"></i> &nbsp; Phone: (123) 456-7890


           
        </div>
        
        <div class="footer-section">
            <h3>Follow Us</h3>
            <ul class="social-media">
                <li><a href=""><i class="fa-brands fa-facebook"></i>Facebook</i> </a></li><br>
                <li><a href="#"><i class="fa-brands fa-twitter"></i>Twitter</i></a></li><br>
                <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin"></i>LinkedIn</i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Your Company Name. All rights reserved.</p>
    </div>



</footer>
