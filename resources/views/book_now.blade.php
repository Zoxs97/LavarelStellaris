<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head title="Stellaris - Book Now"/>
    <body>
        <img class="bg-image" id="dynamicImage" src="{{ asset('images/planet-image.jpg') }}" alt="Changing Image">
        <x-navbar />

        <div class="title-container-middle">
            <h1 class="header-anim"> Book Your Interstellar Journey </h1>
        </div>

        <!-- Booking Section -->
        <section class="booking-container">
            <div class="booking-card">
                <h2>Reserve Your Seat to the Stars</h2>
                <p>Embark on an unforgettable journey beyond the limits of our solar system. Choose your destination and prepare for a once-in-a-lifetime adventure.</p>
                
                <!-- Empty form parameters so it doesnt trigger the sumbition-->
                <form class="booking-form">
                    <div class="input-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" placeholder="Enter your name" required>
                    </div>

                    <div class="input-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-group">
                        <label for="destination">Select Destination</label>
                        <select id="destination" required>
                            <option value="mars">Mars Expedition</option>
                            <option value="titan">Titan Exploration</option>
                            <option value="exoplanet">Exoplanet Discovery</option>
                            <option value="andromeda">Andromeda Voyage</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="departure">Departure Date</label>
                        <input type="date" id="departure" required>
                    </div>

                    <button type="submit" class="booking-btn">Confirm Booking</button>
                </form>
            </div>
        </section>
    </body>
</html>
