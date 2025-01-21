<?php

get_header();


?>
<div class="featured-section">
    <h2>Welcome to Our Site!</h2>
    <p>Discover amazing content and explore various topics.</p>
    <a href="your-link-here" class="cta-button">Learn More</a>
</div>



<div class="flex-boxes">
    <div class="box">
        <h2>Rice Crop</h2>
        <img src="<?php echo get_theme_file_uri('images/rice.jpg'); ?>" alt="Image 1">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis corrupti velit, quis nostrum nisi est vel minus. Ut, modi autem!</p>
    </div>
    <div class="box">
        <h2>Corn Crop</h2>
        <img src="<?php echo get_theme_file_uri('images/corn.jpeg'); ?>" alt="Image 2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ipsam non at illo, reprehenderit voluptatem repellat obcaecati error cum sed.</p>
    </div>
    <div class="box">
        <h2>Sugarcane Crop</h2>
        <img src="<?php echo get_theme_file_uri('images/sugarcane.jpg'); ?>" alt="Image 3">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptatum similique facilis eaque voluptatibus dolorum suscipit consequuntur odit est laudantium!</p>
    </div>
</div>


<div class="about-container">
    <div class="about-content">
        <h2>About Us</h2>
        <p>Welcome to our website! We are dedicated to providing the best services to our customers. Our team works tirelessly to ensure customer satisfaction through quality products and exceptional service.</p>
        <p>Our mission is to support the farming community by offering innovative solutions and tools to enhance productivity and sustainability.</p>
    </div>
    <div class="about-image">
        <img src="<?php echo get_theme_file_uri('images/abt.PNG'); ?>" alt="About Us Image">
    </div>
</div>

<div class="talk-to-us">
    <h2>Talk to Us</h2>
    <p>We’re here to help! If you have any questions, feel free to reach out to us.</p>
    <a href="your-link-here" class="read-more-button">Read More</a>
</div>











<?php
get_footer( 'shop' );
