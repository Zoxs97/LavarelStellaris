<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-head title="Stellaris - About Us"/>
</head>
<body>
    <img class="bg-image" id="dynamicImage" src="{{ asset('images/starship-image.jpg') }}" alt="Changing Image">
    
    <x-navbar />
    <div class="title-container-middle">
            <h1 class="header-anim"> About Us </h1>
        </div>
    <!-- About Section -->
    <section class="about-container">
        <div class="about-card">
            <h2>Our Mission</h2>
            <p>
                Stellaris is dedicated to interstellar discovery, pushing the boundaries of space exploration. 
                From distant exoplanets to unknown galaxies, we provide state-of-the-art missions for those who dare to dream beyond Earth.
            </p>
        </div>
        <!-- Timeline of achievement -->
        <div class="about-timeline">
            <div class="timeline-item">
                <h3>2050 - Founded</h3>
                <p>Stellaris was established with a vision to take humanity beyond the stars.</p>
            </div>
            <div class="timeline-item">
                <h3>2065 - First Interstellar Probe</h3>
                <p>We launched the first deep-space probe to explore exoplanetary systems.</p>
            </div>
            <div class="timeline-item">
                <h3>2080 - Hyperwarp Technology</h3>
                <p>Developed groundbreaking hyperwarp drives, making interstellar travel possible.</p>
            </div>
            <div class="timeline-item">
                <h3>2095 - First Manned Mission</h3>
                <p>Humanity's first steps beyond our solar system became a reality.</p>
            </div>
        </div>
    </section>
</body>
</html>
