<?php
$pageTitle = 'Home';
$currentPage = 'home';
$initHeroSlider = true;
require_once 'includes/header.php';
?>

<!-- Modern Hero Slider -->
<section class="hero-slider-modern">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide hero-slide" style="background-image: url('images/slider-1.png');">
                <div class="hero-overlay"></div>
                <div class="hero-container">
                    <div class="hero-content-slider">
                        <div class="hero-text-slider">
                            <span class="hero-badge-slider">Leading Solar Fencing Solutions</span>
                            <h1 class="hero-title-slider">
                                TIGER FORCE<br>
                                <span class="hero-highlight-slider">SOLAR FENCING SYSTEM</span>
                            </h1>
                            <p class="hero-subtitle-slider">Powered by H V ENTERPRISE</p>
                            <div class="hero-buttons-slider">
                                <a href="products.php" class="btn-modern btn-primary-modern btn-large">
                                    <i class="fas fa-solar-panel"></i>
                                    View Products
                                </a>
                                <a href="contact.php" class="btn-modern btn-secondary-modern btn-large">
                                    <i class="fas fa-phone"></i>
                                    Contact Us
                                </a>
                            </div>
                        </div>
                        <div class="hero-image-slider">
                            <div class="hero-card-slider">
                                <img src="images/index-img.jpeg" alt="Solar Fencing System" class="hero-img-slider">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-decoration-slider">
                    <div class="hero-shape-slider shape-1"></div>
                    <div class="hero-shape-slider shape-2"></div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide hero-slide" style="background-image: url('images/slider-2.png');">
                <div class="hero-overlay"></div>
                <div class="hero-container">
                    <div class="hero-content-slider">
                        <div class="hero-text-slider">
                            <span class="hero-badge-slider">Advanced Security Technology</span>
                            <h1 class="hero-title-slider">
                                SECURE YOUR<br>
                                <span class="hero-highlight-slider">PROPERTY TODAY</span>
                            </h1>
                            <p class="hero-subtitle-slider">Professional Installation & Support</p>
                            <div class="hero-buttons-slider">
                                <a href="contact.php" class="btn-modern btn-primary-modern btn-large">
                                    <i class="fas fa-phone"></i>
                                    Get Quote
                                </a>
                                <a href="about.php" class="btn-modern btn-secondary-modern btn-large">
                                    <i class="fas fa-info-circle"></i>
                                    Learn More
                                </a>
                            </div>
                        </div>
                        <div class="hero-image-slider">
                            <div class="hero-features-grid">
                                <div class="hero-feature-item">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Maximum Security</span>
                                </div>
                                <div class="hero-feature-item">
                                    <i class="fas fa-solar-panel"></i>
                                    <span>Solar Powered</span>
                                </div>
                                <div class="hero-feature-item">
                                    <i class="fas fa-clock"></i>
                                    <span>24/7 Protection</span>
                                </div>
                                <div class="hero-feature-item">
                                    <i class="fas fa-leaf"></i>
                                    <span>Eco-Friendly</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-decoration-slider">
                    <div class="hero-shape-slider shape-3"></div>
                    <div class="hero-shape-slider shape-4"></div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="hero-navigation">
            <div class="swiper-button-next hero-btn-next">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev hero-btn-prev">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>

        <!-- Pagination -->

    </div>
</section>
<!-- Modern About Section -->
<section class="about-modern">
    <div class="container-modern">
        <div class="section-header">
            <span class="section-badge">About Tiger Force</span>
            <h2 class="section-title">Leading Solar Fencing Innovation</h2>
        </div>

        <div class="about-grid">
            <div class="about-content">
                <div class="about-text">
                    <p class="about-description">
                        TIGER FORCE Fence is one of the pioneer in manufacturing various solar fencing systems and solar based components in the Country like Solar Fencing System. Due to the changing scenario of security threats worldwide, the time has come to think differently in protecting your family and properties.
                    </p>
                    <p class="about-description">
                        Solar Fencing Perimeter Protection is the modern day need to the growing security threat in denying, detecting while having the inbuilt capability to serve as a deterrent.
                    </p>
                    <div class="about-stats">
                        <div class="stat-item">
                            <div class="stat-number">1000+</div>
                            <div class="stat-label">Installations</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Products Section -->
<section class="products-modern">
    <div class="container-modern">
        <div class="section-header">
            <span class="section-badge">Our Products</span>
            <h2 class="section-title">Premium Solar Fencing Solutions</h2>
            <p class="section-description">High quality, tailored solar fencing systems for corporate, residential and local authority sectors.</p>
        </div>

        <div class="products-grid">
            <div class="product-card-modern">
                <div class="product-image">
                    <img src="images/Tiger-250.jpeg" alt="Tiger-250" class="product-img">
                    <div class="product-overlay">
                        <a href="products.php" class="product-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Tiger-250</h3>
                    <p class="product-description">
                        Our high quality, tailored solar fencing Systems are used by corporate, residential and local authority sectors throughout the country.
                    </p>
                    <a href="products.php" class="product-cta">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="product-card-modern">
                <div class="product-image">
                    <img src="images/Tiger-500.jpeg" alt="Tiger-500" class="product-img">
                    <div class="product-overlay">
                        <a href="products.php" class="product-link">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="product-title">Tiger-500</h3>
                    <p class="product-description">
                        Our high quality, tailored solar fencing Systems are used by corporate, residential and local authority sectors throughout the country.
                    </p>
                    <a href="products.php" class="product-cta">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Features Section -->
<section class="features-modern">
    <div class="container-modern">
        <div class="section-header">
            <span class="section-badge">Why Choose Us</span>
            <h2 class="section-title">Why Our Products Are Better?</h2>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <div class="feature-content">
                    <h3 class="feature-title">Robust Production Capacity</h3>
                    <p class="feature-description">State-of-the-art manufacturing facilities ensuring consistent quality and timely delivery.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <div class="feature-content">
                    <h3 class="feature-title">Complete Safe</h3>
                    <p class="feature-description">Advanced safety features and rigorous testing ensure maximum protection for your property.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <div class="feature-content">
                    <h3 class="feature-title">Wide Distribution Network</h3>
                    <p class="feature-description">Extensive network across the country for seamless installation and support services.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <div class="feature-content">
                    <h3 class="feature-title">Easy Installation</h3>
                    <p class="feature-description">Simple installation process with comprehensive support and guidance from our experts.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="feature-content">
                    <h3 class="feature-title">Longer Life</h3>
                    <p class="feature-description">Durable components and weather-resistant design ensure long-lasting performance.</p>
                </div>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
                <div class="feature-content">
                    <h3 class="feature-title">Excellent Quality</h3>
                    <p class="feature-description">Premium materials and stringent quality control deliver superior performance and reliability.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>