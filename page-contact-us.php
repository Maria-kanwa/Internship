<?php 
get_header();
?>



    <div class="background-image"></div>

    <div class="content">
        <h1>Contact Us</h1>
        <p>We'd love to hear from you! Please fill out the form below to get in touch.</p>
        
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>
    </div>




    <?php 
get_footer();
?>


