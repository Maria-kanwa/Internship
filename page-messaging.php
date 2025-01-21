<?php
/*
Template Name: Messaging
*/

get_header(); ?>

<div class="messaging-system">
    <h2>Messaging</h2>
    <form method="post" id="message-form">
        <textarea name="message_content" placeholder="Type your message" required></textarea>
        <input type="hidden" name="receiver_id" value="" /> <!-- Set this to the receiver's user ID -->
        <input type="submit" value="Send Message">
    </form>
    
    <div class="messages">
        <?php
        // Fetch messages for the logged-in user
        $current_user_id = get_current_user_id();
        $messages = get_messages_for_user($current_user_id); // Implement this function
        if ($messages) {
            foreach ($messages as $message) {
                echo '<div class="message"><strong>' . esc_html($message->sender) . ':</strong> ' . esc_html($message->content) . '</div>';
            }
        } else {
            echo '<p>No messages found.</p>'; // Message if there are no messages
        }
        ?>
    </div>
</div>

<?php
// Process form submission for sending messages
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Add code to save the message in the database
    // Make sure to handle sanitization and validation
}

get_footer(); // Ensure this is called last
?>
