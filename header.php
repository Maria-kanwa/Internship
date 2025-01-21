



<body>
    <header>
    
        <div class="container1">
        <div class="logo">
        <?php
    echo get_custom_logo();
    ?>
    <div class="site title">
        <h1><?php
    echo bloginfo('name');
    ?></h1>
     </div>
     
    
</div>

<?php
if (isset($_GET['subscription']) && $_GET['subscription'] == 'success') {
    echo '<p>Thank you for subscribing to our newsletter!</p>';
}


wp_nav_menu(array(
  'theme_location' => 'primary',
  'menu_class' => 'navbar-2',//got the registration of class for styling navbar in style.css
 
))
?>
</div>
           
</div>



<!-- fot tagline -->


<div class="tagline">
<p><?php
    echo bloginfo('description');
    ?></p>

</div>
</div>
        </div>
    



</div>









<?php
 wp_head();
  ?>
  