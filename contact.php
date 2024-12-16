<?php
$title = "Ulises - Contct us";
include "head.php";
?>

<body>

<?php
include "nav.php"; 
?>

<section class="breadcrumbs" style="background-image: url('./images/contactus.png');">
    <div class="b_overlay" style="background-image: url('./images/layout.png');">
        <div class="brdcrm-content">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>





<section class="contact-section">
        <div class="container contact">
            <div class="form-wrapper">
                <h2>Please Get In Touch With Us</h2>
                <form  action="https://formsubmit.co/info@ulises.co.in"  method="POST" onsubmit="showSuccessMessage(event)">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter name ">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="email" id="email" name="email" placeholder="Email ID">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" name="address" placeholder="Type your address here">
                    </div>
                    <input type="hidden" name="_captcha" value="false">
                    <input type="hidden" name="_template" value="table">
                    <button type="submit">Send Message</button>
                </form>
            </div>

            <div class="contact-info">
                <ul>
                    <li>
                    <i class="fa-solid fa-tty"></i>
                        <a href="tel:+91-8041655788">
                        +91-8041655788 
                    </a>
                    </li>
                    <li>
                    <i class="fas fa-phone"></i>
                        <a  href="tel:+91-9164535154">
                            +91-9164535154
                        </a>
                    </li>

                    <a href="mailto:info@ulises.co.in">
                        <li><i class="fas fa-envelope"></i> info@ulises.co.in</li>
                    </a>
                    <li><i class="fas fa-map-marker-alt"></i> 2nd Floor, Thimmaiah Complex, Immadihalli main road, Whitefield, Bengaluru - 560066</li>
                </ul>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124418.07635151956!2d77.75832125168937!3d12.96769981965326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae0dfeba4898b5%3A0xb27d821b3090379e!2sULISES%20CONSULTANCY%20SERVICES%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1729759552586!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>






<?php
include('footer.php');
?>




<script>
    // Function to show success message and redirect
    function showSuccessMessage(event) {
        event.preventDefault(); // Prevent the form from submitting right away

        const form = event.target;
        const successMessage = document.getElementById('success-message');

        // Set the success message text
        successMessage.textContent = 'Message has been sent successfully!';
        successMessage.style.display = 'block'; // Show the success message

        // Submit the form immediately
        form.submit(); 

        // Clear the form fields
        form.reset(); // Reset the form fields

        // Hide success message after 5 seconds and redirect
        setTimeout(function() {
            successMessage.style.display = 'none'; // Hide the message
            window.location.href = 'contact.php'; // Redirect to the contact page
        }, 5000); // 5 seconds delay
    }
</script>

</body>
</html>

