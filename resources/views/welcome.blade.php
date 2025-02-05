@php
    $images = [
        asset('images/alien-base-image.jpg'),
        asset('images/alien-planet.jpg'),
        asset('images/planet-image.jpg'),
        asset('images/starship-image.jpg'),
    ];

    // the iamge from the session
    $imgIndex = session('image_index', 0);

    // the iamge url with the index
    $imgUrl = $images[$imgIndex];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head title="Stellaris - Welcome!"/>

    <body style="background-color: black;">
        <!-- Image bg because i had to reload the website to change the img and it was clunky-->
        <img class="bg-image" id="dynamicImage" src="{{ $imgUrl }}" alt="Changing Image">

        <!-- Navbar component-->
        <x-navbar />

        <div class="welcome-container ">
            <div class="welcome-card">
                <h1 class="header-anim"> A SIGNAL FROM THE STARS </h1>
                <P>You have been chosen for a journey beyond the boundaries of time and space.</P>
                <p>A mission unlike any other, where the very fabric of reality bends to the will of the unknown.</P>
                <p>Beyond the stars, beyond the reach of history, lies a destination shrouded in secrecy—an expedition into the undiscovered.</p>
                <P>The mission is classified. The details are restricted. All that is known is that you were chosen for a reason.</P>
                <button onclick="changeImage(1)" class="welcome-btn">Join Mission</button>
            </div>
        </div>

        <!-- This is Live Stream Section -->
        <div class="video-wrapper">
            <div class="live-stream-title">LIVE STREAM - MISSION 497f5</div>
            <div class="video-container">
                <video autoplay loop muted>
                    <source src="{{ asset('videos/mars-exploration.mp4') }}" type="video/mp4">
                    Your browser does not support the video.
                </video>
            </div>
            <div class="display-time">
                <p id="time"></p>
            </div>
        </div>



<!-- Script to change the background of the page -->
<!-- I had added button to skip the image but it wasnt nice with the layout-->
    <script>
    let timer;
    $(document).ready(function() { resetTimer(); updateTime(); });

    // function to change image - direction is -1 +1 depedning to go back to previous image or go to the next one
    function changeImage(direction) {
        $.post("{{ route('change.image') }}", {
            _token: "{{ csrf_token() }}",
            direction: direction
        })
        .done(function(response) {
            $("#dynamicImage").fadeOut(300, function() {
                $(this).attr("src", response.image).fadeIn(300);
            });
            resetTimer();
        })
        .fail(function() {
            console.error("Error changing image");
        });
    }

    // if chagne the picture reset the timer
    function resetTimer() {
        clearInterval(timer);
        timer = setInterval(function() {
            changeImage(1); 
        }, 5000); 
    }

    // for 24h format
    function updateTime() {
    let now = new Date();
    let timeString = now.getHours().toString().padStart(2, '0') + ":" + 
                     now.getMinutes().toString().padStart(2, '0') + ":" + 
                     now.getSeconds().toString().padStart(2, '0');
    document.getElementById("time").innerHTML = "Local time : " + timeString;
    }
    setInterval(updateTime, 1000);
    updateTime();
</script>

</body>

</html>
