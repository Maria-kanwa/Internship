<?php
/*
Template Name: Registration
*/
get_header(); ?>

<div class="registration-form">
    <h2>Register as a Farmer</h2>
    <form method="post" id="farmer-registration-form">
        <input type="text" name="farmer_username" placeholder="Username" required>
        <input type="email" name="farmer_email" placeholder="Email" required>
        <input type="password" name="farmer_password" placeholder="Password" required>
        <input type="submit" name="register_farmer" value="Register">
    </form>

    <h2>Register as a Business</h2>
    <form method="post" id="business-registration-form">
        <input type="text" name="business_username" placeholder="Username" required>
        <input type="email" name="business_email" placeholder="Email" required>
        <input type="password" name="business_password" placeholder="Password" required>
        <input type="submit" name="register_business" value="Register">
    </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['register_farmer'])) {
        // Farmer registration logic
        $username = sanitize_user($_POST['farmer_username']);
        $email = sanitize_email($_POST['farmer_email']);
        $password = $_POST['farmer_password'];

        $user_id = wp_create_user($username, $password, $email);
        if (!is_wp_error($user_id)) {
            $user = new WP_User($user_id);
            $user->set_role('farmer');
            echo 'Farmer registered successfully!';
        } else {
            echo 'Error: ' . $user_id->get_error_message();
        }
    }

    if (isset($_POST['register_business'])) {
        // Business registration logic
        $username = sanitize_user($_POST['business_username']);
        $email = sanitize_email($_POST['business_email']);
        $password = $_POST['business_password'];

        $user_id = wp_create_user($username, $password, $email);
        if (!is_wp_error($user_id)) {
            $user = new WP_User($user_id);
            $user->set_role('business');
            echo 'Business registered successfully!';
        } else {
            echo 'Error: ' . $user_id->get_error_message();
        }
    }
}

get_footer();
