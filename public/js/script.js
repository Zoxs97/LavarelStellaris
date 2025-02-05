let timer;
$(document).ready(function() { 
    resetTimer(); updateTime(); 
});

function changeImage(direction) {
    $.post("{{ route('change.image') }}", {
        _token: "{{ csrf_token() }}",
        direction: direction
    })
    .done(function(response) {
        // Smoothly transition to the new image
        $("#dynamicImage").fadeOut(300, function() {
            $(this).attr("src", response.image).fadeIn(300);
        });
        resetTimer();
    })
    .fail(function() {
        console.error("Error changing image");
    });
}

function resetTimer() {
    clearInterval(timer); // Stop the current timer
    timer = setInterval(function() {
        changeImage(1); // Move to the next image automatically
    }, 5000); // Restart the timer
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