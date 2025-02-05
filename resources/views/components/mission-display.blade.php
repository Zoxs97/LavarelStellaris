@props(["src" => "images/missions/arctic-mission.jpg", "title" => "Change the title", "desc" => "Change the description"])
<div class="mission-banner">
    <div class="mission-image-container">
        <img class="bg-image" src="{{ asset($src) }}" alt="Mission Image">
        <div class="overlay"></div>
        <div class="mission-description">
            <p class="title-mission">{{$title}}</p>
            <p class="desc">{{$desc}}</p>
        </div>
    </div>
</div>
