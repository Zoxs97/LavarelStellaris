<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <x-head title="Stellaris - Contact"/>
</head>
<body>
    <img class="bg-image" id="dynamicImage" src="{{ asset('images/alien-planet.jpg') }}" alt="Changing Image">
    
    <!-- Navbar section with components-->
    <x-navbar />

    <div class="title-container-middle">
            <h1 class="header-anim"> Contact Us </h1>
        </div>


    <!-- The contact section -->
    <section class="contact-container">
        <div class="contact-card">
            <h2>Reach Out to Stellaris</h2>
            <p>Embark on an interstellar journey with us. Contact our team to plan your next cosmic adventure.</p>
            
            <!-- Empty form parameters so it doesnt trigger the sumbition-->
            <form class="contact-form">
                <div class="input-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>

                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" placeholder="What do you want to explore?" required></textarea>
                </div>

                <button type="submit" class="contact-btn">Launch Message</button>
            </form>
        </div>
    </section>
</body>
</html>
