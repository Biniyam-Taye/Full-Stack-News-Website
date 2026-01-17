<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fana News - Your trusted source for international news, politics, technology, and sports.">
    <title>Fana News | International News & Perspectives</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="assets/logo.png" alt="Fana News Logo" class="logo-img">
            </a>

            <div class="nav-search">
                <i class="fas fa-search search-icon"></i>
                <input type="text" placeholder="Search news..." class="search-input">
            </div>

            <div class="nav-links">
                <a href="index.php" class="nav-item active">Home</a>
                <a href="world.html" class="nav-item">World</a>
                <a href="politics.html" class="nav-item">Politics</a>
                <a href="tech.html" class="nav-item">Technology</a>
                <a href="sports.html" class="nav-item">Sports</a>
            </div>

            <a href="#" class="nav-cta">Subscribe</a>

            <div class="mobile-menu-btn"><i class="fas fa-bars"></i></div>
        </div>
    </nav>

    <!-- Mobile Nav Drawer -->
    <div class="mobile-nav-overlay"></div>
    <div class="mobile-nav-drawer">
        <div class="mobile-nav-header">
            <a href="index.php" class="logo">fana<span>news.</span></a>
            <div class="close-menu-btn"><i class="fas fa-times"></i></div>
        </div>
        <div class="mobile-links">
            <a href="index.php" class="active">Home</a>
            <a href="world.html">World</a>
            <a href="politics.html">Politics</a>
            <a href="tech.html">Technology</a>
            <a href="sports.html">Sports</a>
        </div>
        <div class="mobile-cta-container">
            <a href="#" class="nav-cta">Subscribe</a>
        </div>
    </div>

    <!-- Hero Section -->
    <header class="hero">
        <!-- Background Icons Decoration -->
        <div class="hero-bg-icons">
            <i class="fas fa-globe-americas"></i>
            <i class="far fa-newspaper"></i>
            <i class="fas fa-satellite-dish"></i>
            <i class="fas fa-wifi"></i>
            <i class="fas fa-chart-line"></i>
            <i class="fas fa-landmark"></i>
            <i class="fas fa-bullhorn"></i>
            <i class="fas fa-video"></i>
            <i class="fas fa-pen-fancy"></i>
            <i class="fas fa-comments"></i>
            <i class="fas fa-mobile-alt"></i>
            <i class="far fa-eye"></i>
            <i class="fas fa-microphone-alt"></i>
            <i class="fas fa-camera"></i>
            <i class="far fa-clock"></i>
            <i class="fas fa-hashtag"></i>
            <i class="fas fa-laptop"></i>
            <i class="fas fa-search"></i>
        </div>

        <div class="hero-content">

            <!-- Hero Header: Split Layout -->
            <div class="hero-header">
                <!-- Left Side: Text Content -->
                <div class="hero-text-content">
                    <!-- Card Background Pattern -->
                    <div class="card-bg-icons">
                        <i class="fas fa-feather-alt"></i>
                        <i class="fas fa-quote-right"></i>
                        <i class="fas fa-bolt"></i>
                        <i class="far fa-lightbulb"></i>
                        <i class="fas fa-fire"></i>
                        <i class="fas fa-globe-americas"></i>
                        <i class="far fa-newspaper"></i>
                        <i class="fas fa-bullhorn"></i>
                        <i class="fas fa-pen-fancy"></i>
                        <i class="fas fa-video"></i>
                        <i class="fas fa-camera"></i>
                        <i class="fas fa-microphone"></i>
                        <i class="fas fa-laptop"></i>
                        <i class="far fa-comments"></i>
                        <i class="fas fa-hashtag"></i>
                        <i class="fas fa-satellite"></i>
                        <i class="fas fa-wifi"></i>
                        <i class="far fa-eye"></i>
                        <i class="fas fa-share-alt"></i>
                        <i class="fas fa-star"></i>
                    </div>

                    <div class="hero-top-badge">
                        <div class="badge-item live">
                            <span class="pulse-dot"></span>
                            <span class="badge-text">LIVE UPDATES</span>
                        </div>
                        <div class="badge-item location">
                            <i class="fas fa-map-marker-alt"></i>
                            <span class="badge-text">GENEVA, SWITZERLAND</span>
                        </div>
                        <div class="badge-item trending">
                            <i class="fas fa-hashtag"></i>
                            <span class="badge-text">TRENDING NOW</span>
                        </div>
                        <div class="badge-item views">
                            <i class="far fa-eye"></i>
                            <span class="badge-text">1.2M WATCHING</span>
                        </div>
                    </div>

                    <h1 class="hero-title-large">
                        <div class="text-slider">
                            <span class="text-yellow slide-item">GLOBAL SUMMIT</span>
                            <span class="text-yellow slide-item">BREAKING NEWS</span>
                            <span class="text-yellow slide-item">WORLD UPDATE</span>
                            <span class="text-yellow slide-item">LATEST STORY</span>
                        </div>
                        <span class="text-black">REACHES HISTORIC AGREEMENT</span>
                    </h1>

                    <!-- Nested Mini Card -->
                    <div class="hero-mini-card">
                        <p class="hero-desc">World leaders unite to sign the new framework for renewable energy
                            transition
                            by 2030, marking a turning point in global environmental policy.</p>
                        <a href="#" class="btn-black">Read Full Story</a>
                    </div>
                </div>

                <!-- Right Side: Fade Photo Grid -->
                <!-- Use picsum seeds to match the generic 'dog, furniture, face, etc' vibe if needed, or unsplash source for variety -->
                <div class="hero-fade-grid">
                    <div class="fade-col">
                        <img src="assets/hero-new-3.jpg" alt="Political Figure" class="fade-edge-top">
                        <img src="assets/hero-new-4.jpg" alt="Parliament Hall">
                    </div>
                    <div class="fade-col">
                        <img src="assets/hero-new-1.jpg" alt="Global Conflict">
                        <img src="assets/hero-new-2.jpg" alt="Award Ceremony" class="fade-edge-bottom">
                    </div>
                </div>
            </div>


            <!-- Visuals Grid (3 Item Layout) -->
            <div class="hero-visuals-grid">
                <!-- Card 1 -->
                <div class="hero-card-visual">
                    <img src="assets/visual-1.jpg" alt="Netflix Building">
                    <div class="visual-overlay">
                        <div class="visual-info">
                            <h3>Entertainment</h3>
                            <div class="desc-card">
                                <p>Netflix announces groundbreaking new series lineup for 2026, featuring exclusive
                                    content
                                    from award-winning directors and a revolutionary approach to interactive
                                    storytelling
                                    that will transform how audiences experience entertainment.</p>
                            </div>
                            <span>Read More</span>
                        </div>
                        <div class="circle-arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

                <!-- Card 2 (Wide) -->
                <div class="hero-card-visual">
                    <img src="assets/visual-2.jpg" alt="Elon Musk Tesla Robot">
                    <div class="visual-overlay">
                        <div class="visual-info">
                            <h3>Technology</h3>
                            <div class="desc-card">
                                <p>Elon Musk unveils Tesla's latest AI-powered humanoid robot breakthrough, showcasing
                                    advanced capabilities in manufacturing automation and household assistance. The
                                    innovation marks a significant leap forward in robotics and artificial intelligence
                                    integration.</p>
                            </div>
                            <span>Explore Innovation</span>
                        </div>
                        <div class="circle-arrow"><i class="fas fa-microchip"></i></div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="hero-card-visual">
                    <img src="assets/visual-3.jpg" alt="Athletes Track">
                    <div class="visual-overlay">
                        <div class="visual-info">
                            <h3>Sports</h3>
                            <div class="desc-card">
                                <p>Olympic athletes prepare for historic 2026 championship races, training at peak
                                    performance levels. The upcoming games promise record-breaking performances and
                                    unforgettable moments as competitors from around the world gather to compete for
                                    glory.
                                </p>
                            </div>
                            <span>View Results</span>
                        </div>
                        <div class="circle-arrow"><i class="fas fa-trophy"></i></div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- Top Stories Grid -->
    <section class="section-container">
        <div class="section-header latest-news-header">
            <div class="header-title-wrapper">
                <div class="yellow-accent-bar"></div>
                <h2 class="section-title latest-news-title">Today's Latest News</h2>
                <!-- Link to Admin Dashboard for easy access during development -->
                 <a href="admin/index.php" style="margin-left: 20px; font-size: 0.8rem; color: #666; text-decoration: underline;" target="_blank">[Admin Dashboard]</a>
            </div>
            <a href="world.html" class="view-all-btn">
                View All
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>

        <div class="news-grid">
            <?php
            $sql = "SELECT * FROM news ORDER BY publish_date DESC LIMIT 6"; // Keep limit 6 to match layout
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // Calculate relative time (e.g., "2 hours ago")
                    $time_ago = "";
                    $publish_time = strtotime($row['publish_date']);
                    $current_time = time();
                    $time_diff = $current_time - $publish_time;
                    
                    if($time_diff < 3600) {
                        $mins = floor($time_diff / 60);
                        $time_ago = ($mins <= 1) ? "Just now" : $mins . " mins ago";
                    } else if($time_diff < 86400) {
                        $hours = floor($time_diff / 3600);
                        $time_ago = $hours . " hours ago";
                    } else {
                        $days = floor($time_diff / 86400);
                        $time_ago = $days . " days ago";
                    }
                    
                    // Fallback image if needed
                    $imgSrc = !empty($row['image_path']) ? $row['image_path'] : 'assets/logo.png';
            ?>
            
            <article class="news-card">
                <img src="<?php echo $imgSrc; ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="card-image">
                <div class="card-content">
                    <div class="card-meta">
                        <span><i class="far fa-clock"></i> <?php echo $time_ago; ?></span>
                        <span><?php echo htmlspecialchars($row['category']); ?></span>
                    </div>
                    <h3 class="card-title"><a href="#"><?php echo htmlspecialchars($row['title']); ?></a></h3>
                    <p class="card-excerpt"><?php echo htmlspecialchars($row['description']); ?></p>
                    <a href="#" class="read-more">Read Article <span>&rarr;</span></a>
                </div>
            </article>

            <?php
                }
            } else {
                echo "<p>No news available at the moment.</p>";
            }
            ?>
        </div>
    </section>

    <!-- Editor's Picks -->
    <section class="section-container">
        <div class="section-header">
            <h2 class="section-title">Editor's Picks</h2>
        </div>

        <div class="news-grid">
            <!-- Article 4 -->
            <article class="news-card">
                <img src="https://picsum.photos/seed/news_sport/600/400" alt="News Image" class="card-image">
                <div class="card-content">
                    <div class="card-meta">
                        <span><i class="far fa-clock"></i> 1 day ago</span>
                        <span>Sports</span>
                    </div>
                    <h3 class="card-title"><a href="#">The Championship Finals: A Match to Remember</a></h3>
                    <p class="card-excerpt">Relive the highlights of last night's game where history was made in the
                        final minutes.</p>
                    <a href="#" class="read-more">Read Article <span>&rarr;</span></a>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="news-card">
                <img src="https://picsum.photos/seed/news_art/600/400" alt="News Image" class="card-image">
                <div class="card-content">
                    <div class="card-meta">
                        <span><i class="far fa-clock"></i> 2 days ago</span>
                        <span>Culture</span>
                    </div>
                    <h3 class="card-title"><a href="#">Modern Art Exhibition Opens in London</a></h3>
                    <p class="card-excerpt">Critics praise the bold new direction of contemporary artists featured in
                        this year's gallery showcase.</p>
                    <a href="#" class="read-more">Read Article <span>&rarr;</span></a>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="news-card">
                <img src="https://picsum.photos/seed/news_travel/600/400" alt="News Image" class="card-image">
                <div class="card-content">
                    <div class="card-meta">
                        <span><i class="far fa-clock"></i> 3 days ago</span>
                        <span>Travel</span>
                    </div>
                    <h3 class="card-title"><a href="#">Top 10 Hidden Gems in Southeast Asia</a></h3>
                    <p class="card-excerpt">Escape the crowds and discover the pristine beaches and ancient temples that
                        tourists miss.</p>
                    <a href="#" class="read-more">Read Article <span>&rarr;</span></a>
                </div>
            </article>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-container">
            <!-- Background Decorative Icons -->
            <div class="cta-bg-icons">
                <i class="fas fa-bell"></i>
                <i class="far fa-envelope"></i>
                <i class="fas fa-rss"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-newspaper"></i>
                <i class="fas fa-bolt"></i>
            </div>

            <div class="cta-content">
                <div class="cta-text">
                    <span class="cta-badge">Stay Informed</span>
                    <h2 class="cta-title">Never Miss a Story</h2>
                    <p class="cta-description">Subscribe to our newsletter and get the latest news, exclusive insights,
                        and breaking stories delivered straight to your inbox every day.</p>
                </div>

                <div class="cta-form-wrapper">
                    <form class="cta-form">
                        <div class="input-group">
                            <i class="far fa-envelope input-icon"></i>
                            <input type="email" placeholder="Enter your email address" required>
                            <button type="submit" class="cta-btn">
                                Subscribe Now
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                    <p class="cta-privacy">We respect your privacy. Unsubscribe at any time.</p>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="cta-stats">
                <div class="stat-item">
                    <i class="fas fa-users"></i>
                    <div class="stat-content">
                        <h3>500K+</h3>
                        <p>Active Readers</p>
                    </div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-globe"></i>
                    <div class="stat-content">
                        <h3>150+</h3>
                        <p>Countries Reached</p>
                    </div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-newspaper"></i>
                    <div class="stat-content">
                        <h3>Daily</h3>
                        <p>News Updates</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-col">
                <div class="logo">
                    <img src="assets/logo.png" alt="Fana News Logo" class="logo-img">
                </div>
                <p>Delivering the truth, every day. Fana News is your premier source for unbiased international
                    reporting.</p>
                <div style="display: flex; gap: 10px; margin-top: 1rem;">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>Categories</h4>
                <ul class="footer-links">
                    <li><a href="world.html">World News</a></li>
                    <li><a href="politics.html">Politics</a></li>
                    <li><a href="tech.html">Technology</a></li>
                    <li><a href="sports.html">Sports</a></li>
                    <li><a href="#">Entertainment</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Newsletter</h4>
                <p style="margin-bottom: 1rem;">Subscribe to get the latest news updates.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <span id="year">2026</span> Fana News. All rights reserved.</p>
            <div style="display: flex; gap: 20px;">
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Sitemap</a>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>
