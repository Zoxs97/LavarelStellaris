
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head title="Stellaris - Missions"/>

    <body>
        <img class="bg-image" id="dynamicImage" src="{{ "images/alien-base-image.jpg" }}" alt="Changing Image">
        <!--Navbar component-->
        <x-navbar />
        <div class="title-container-middle">
            <h1 class="header-anim"> Our Completed Missions </h1>
        </div>

        <!-- list of mission made with my components-->
        <section class="mission-section">
            <x-mission-display title="An Arctic Crash Site" desc="We discovered the wreckage of an unidentified spacecraft deep in the frozen Arctic. Strange energy signatures pulse from beneath the ice, hinting at secrets buried for centuries." src="images/missions/arctic-mission.jpg"/>
            <x-mission-display title="A Gaseous Alien Planet" desc="We encountered a massive gas giant with swirling storms and an eerie luminescent atmosphere. Scans reveal signs of life—creatures unlike anything we've seen before, thriving in the dense, toxic clouds." src="images/missions/alien-planet-mission.jpg"/>
            <x-mission-display title="A Fiery Fury" desc="We arrived at a planet consumed by volcanic fury. Rivers of lava carve through the landscape, and plumes of fire erupt unpredictably. But amidst the inferno, something—or someone—seems to be watching us." src="images/missions/volcano-mission.jpg"/>
            <x-mission-display title="A Multi-Planet Mystery" desc="We discovered a system of interconnected planets, each harboring remnants of an ancient civilization. The same cryptic markings appear across multiple worlds—evidence of a forgotten galactic empire, or a warning?" src="images/missions/multiplanet-mission.jpg"/>
        </section>


    </body>
</html>
