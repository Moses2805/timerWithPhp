

(function() {
    const second = 1000,
    minute = second*60,
    hour = minute*60,
    day=hour*24;

    let countDown = new Date(myTime).getTime(),
    x = setInterval(function(){
        let now = new Date().getTime(),
        ferq = countDown - now;
        document.getElementById("days").innerText = Math.floor(ferq / day);
        document.getElementById("hours").innerText = Math.floor((ferq % day) / hour);
        document.getElementById("minutes").innerText = Math.floor((ferq % hour) / minute);
        document.getElementById("seconds").innerText = Math.floor((ferq % minute) / second);

        if(ferq <= 0){
            clearInterval();
            document.getElementById("countdown").innerHTML = '<span style = "font-weight:bold; font-size:22px;">Zaman bitib</span>';

        }
    }, 0)

}());