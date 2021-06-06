//Blodguide 
let timeoutHandle;
function countdown(minutes) {
    let seconds = 15;
    let mins = minutes;
    function tick() {
        let counter = document.querySelector("#timer-strigl");
        let current_minutes = mins - 2;
        seconds--;
        counter.innerHTML =
            current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
        if (seconds > 0) {
            timeoutHandle = setTimeout(tick, 1000);
        } else {

            if (mins > 1) {

                const locationObj = document.location;
                document.location = 'strigleGuide-betalt.php';

            }
        }
    }
    tick();
}

countdown(2);