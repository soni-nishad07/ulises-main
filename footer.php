

<head>

<style>

    .copy_section
    {
        background-color: #00B0EF;
    }

.copyright {
    margin: auto;
    padding: 20px 1px;
    text-align: center; /* Center text */
}

 .fa-whatsapp {
         position: relative;
    font-size: 30px;
    color: white;
    left: 33px;
    }

.floating-icons {
    position: fixed;
    bottom: 20%;
    right: 20px;
    z-index: 1000;
    display: flex;
    flex-direction: column; /* Stack icons vertically */
}

.floating-icon {
    position: relative;
    width: 40px;
    height: 40px;
    background-color: #25D366;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 24px;
    transition: background-color 0.3s, transform 0.3s;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 10px;
}

/* Add responsiveness */
@media (max-width: 768px) {
    .floating-icons {
        right: 10px; /* Adjust position for smaller screens */
    }

    .copyright {
        font-size: 14px; /* Smaller font size on mobile */
        padding: 15px 5px; /* Adjust padding */
    }

    .fa-whatsapp {
        font-size: 20px; /* Adjust icon size for smaller screens */
    }
}

 

</style>

</head>


<footer>
    <div class="container footer-sec">

        <div class="footer-logo">
            <!-- <img src="./images/footerlogo.png" alt="Logo"> -->
             <img src="images/logo-ulises.png" alt="logo">
            <p>2nd Floor, Thimmaiah Complex, <br>Immadihali main road, Whitefiled, <br>Bengaluru - 560066</p>

            <div class="footer-logos">
            <span class="f_link">
                <a href="https://www.linkedin.com/company/ulises-facility-management-services-pvt-ltd/" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
                </a>
            </span>

            <!-- <span class="f_link">
                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                </a>
            </span> -->

            </div>        

        </div>

        <div class="quick">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">HR Services</a></li>
                <li><a href="soft_service.php">Soft Service</a></li>
                    <li><a href="contact.php">Contact us</a></li>
            </ul>
        </div>



    </div>
</footer>

<div class="copy_section">
    <div class="container ">
                        <h6 class="text-center copyright" style="color: #000;">COPYRIGHT @ 2024 ULISES CONSULTANCY SERVICES PVT LTD, ALL RIGHTS RESERVED! Designed by 
                        <span><a style="text-decoration: none; color: #000; font-weight: 500;" href="https://www.rpinfocare.com/">RIPL</a></span>
                    </h6>
    
    </div>
</div>

<div class="floating-icons">
               <a href="https://wa.me/+919164535154" class="floating-icon whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Join WhatsApp Group">
        <i class="fab fa-whatsapp"></i>
        <span class="tooltip">
            
        Join WhatsApp Group</span>
    </a>

    </div>



<script src="./js/script.js"></script>


