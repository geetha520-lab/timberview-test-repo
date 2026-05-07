<style>
footer {
    background-color: #113553; /* Blue background */
    color: white;
    padding: 1rem 0; /* Reduced height */
    font-size: 0.9rem;
}

/* SECTION TITLES (like "ABOUT US", "CONTACT", etc.) */
.section-title {
    color: #2DB354;
    font-weight: bold;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
    display: inline-block;

    /* Remove any unwanted lines */
    border: none;
    padding: 0;
}

/* Also make sure no pseudo-elements are adding lines */
.section-title::before,
.section-title::after {
    content: none !important;
}

/* Contact list reset */
.contact-list {
    padding-left: 0;
    margin: 0;
}

/* Contact item spacing */
.contact-item {
    margin-bottom: 0.5rem;
}

/* Icon + text wrapper */
.item-inner {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    justify-content: flex-start;
}

/* Icon styling */
.item-inner i {
    width: 20px;
    text-align: center;
}

/* Responsive (center on mobile) */
@media (max-width: 767.98px) {
    .item-inner {
        justify-content: center;
        text-align: center;
    }
}

</style>



<footer class="custom-footer py-5">
    <div class="container">
        <div class="row text-center text-md-start justify-content-between gx-5 gy-4">
            <!-- About Us -->
            <div class="col-12 col-md-4">
                <h5 class="section-title">ABOUT US</h5>
                <p class="small">
                    Timberview Golf Club is a premier destination for golf enthusiasts, offering world-class facilities and a picturesque environment for all skill levels.
                </p>
            </div>

           <!-- Contact Info -->
<div class="col-12 col-md-4 text-center text-md-start">
    <h5 class="section-title">Contact</h5>
    <ul class="list-unstyled contact-list ">
        <li class="contact-item">
            <div class="item-inner">
                <i class="fas fa-map-marker-alt"></i>
                <span>1107 London Ave, Marysville, OH</span>
            </div>
        </li>
        <li class="contact-item">
            <div class="item-inner">
                <i class="fas fa-phone-alt"></i>
                <span>937-644-GOLF</span>
            </div>
        </li>
        <li class="contact-item">
            <div class="item-inner">
                <i class="far fa-envelope"></i>
                <span>timberviewgolfoh@gmail.com</span>
            </div>
        </li>
    </ul>
</div>



            <!-- Social Media -->
            <div class="col-12 col-md-4">
                <h5 class="section-title">SOCIAL MEDIA</h5>
                <div class="d-flex justify-content-md-start justify-content-center gap-3 mt-2 social-icons">
                    <a href="https://www.facebook.com/people/The-17th-Bar-and-Grill-Timberview/100091324215370/" class="text-white" target="_blank">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="#" class="text-white" target="_blank">
                        <i class="fab fa-twitter fa-lg"></i>
                    </a>
                    <a href="#" class="text-white" target="_blank">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/timberview-golf-club/posts/?feedView=all" class="text-white" target="_blank">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <hr class="border-light mt-5">
        <div class="text-center">
            <p class="small mb-0">&copy; <span id="year"></span> Timberview Golf Club. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>