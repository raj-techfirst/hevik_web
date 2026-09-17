<?php
$pageTitle = 'Contact Us';
$currentPage = 'contact';
require_once 'includes/header.php';
?>

<!-- Hero Section -->
<section class="page-hero">
    <div class="page-hero-content">
        <div class="container-modern">
            <div class="page-hero-text">
                <span class="hero-badge">Get In Touch</span>
                <h1 class="page-hero-title">Contact Us</h1>
                <p class="page-hero-subtitle">Ready to secure your property with our solar fencing solutions?</p>
            </div>
        </div>
    </div>
    <div class="page-hero-image">
        <img src="images/contact.png" alt="Contact Tiger Force" class="hero-bg-img">
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container-modern">
        <div class="contact-wrapper">
            <!-- Contact Information -->
            <div class="contact-info-modern">
                <div class="contact-header">
                    <h2 class="contact-title">Let's Get In Touch</h2>
                    <p class="contact-description">
                        TIGER FORCE Fence is one of the pioneer in manufacturing various solar fencing systems and solar based components in the Country like Solar Fencing System.
                    </p>
                </div>

                <div class="contact-details">
                    <div class="contact-detail-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text-pg">
                            <h4 class="contact-label">Visit Us</h4>
                            <p class="contact-value">
                                H V ENTERPRISE<br>
                                Shop No. 30, Shashtrinagar(Ajmera),<br>
                                Nana Mava Main Road, Rajkot-360005
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4 class="contact-label">Call Us</h4>
                            <p class="contact-value">
                                <a href="tel:+919904927824">+91-9904927824</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-detail-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4 class="contact-label">Email Us</h4>
                            <p class="contact-value">
                                <a href="mailto:hventerprice10@gmail.com">hventerprice10@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="social-section">
                    <h4 class="social-title">Connect With Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/TigerforceFenceEnergize" target="_blank" class="social-link">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/tigerforcefence/" target="_blank" class="social-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/tigerforcefence/" target="_blank" class="social-link">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.youtube.com/@tigerforcefence" target="_blank" class="social-link">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>


                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-modern">
                <div class="form-header">
                    <h3 class="form-title">Our Location</h3>
                    <p class="form-description">Find us on the map below</p>
                </div>

                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.1234567890123!2d70.8023456789012!3d22.3034567890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0123456789012%3A0xabcdef1234567890!2sH%20V%20Enterprise!5e0!3m2!1sen!2sin!4v1691234567890!5m2!1sen!2sin"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="contact-cta">
    <div class="container-modern">
        <div class="cta-content">
            <div class="cta-text">
                <h2 class="cta-title">Ready to Secure Your Property?</h2>
                <p class="cta-description">Get expert consultation and free installation quotes for your solar fencing needs.</p>
            </div>
            <div class="cta-actions">
                <a href="tel:+919904927824" class="btn-modern btn-primary-modern btn-large">
                    <i class="fas fa-phone"></i>
                    Call Now
                </a>
                <a href="mailto:hventerprice10@gmail.com" class="btn-modern btn-secondary-modern btn-large">
                    <i class="fas fa-envelope"></i>
                    Email Us
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', async function(e) {
        e.preventDefault();

        // Clear previous messages
        document.getElementById('successMessage').style.display = 'none';
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        // Get the submit button
        const submitBtn = this.querySelector('.form-submit');
        const originalBtnText = submitBtn.innerHTML;

        try {
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            // Send the form data
            const formData = new FormData(this);
            const response = await fetch(this.action, {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (result.status === 'success') {
                // Show success message
                const successMessage = document.getElementById('successMessage');
                successMessage.textContent = result.message;
                successMessage.style.display = 'block';

                // Clear the form
                this.reset();

                // Scroll to success message
                successMessage.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            } else {
                throw new Error(result.message || 'An error occurred');
            }
        } catch (error) {
            // Show error message
            document.getElementById('nameError').textContent = error.message;
        } finally {
            // Restore submit button
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
        }
    });
</script>

<?php require_once 'includes/footer.php'; ?>