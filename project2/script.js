
    var countDownDate = new Date("Mar 30, 2024 14:37:25").getTime();
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("demo").innerHTML = days + " يوم " + hours + " ساعة " + minutes + " دقيقة " + seconds + " ثانية ";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "تأخرت";
        }
    }, 1000);


    const alti = document.querySelector("#winner");
    const cards = document.querySelector("#cards");

alti.addEventListener('click',function(){
cards.style.display ='flex';
});

var myModal = new bootstrap.myModal(document.getElementById('modal'),{
    keybord: false
})
alti.addEventListener('click', function(){
    setTimeout(function(){
        myModal.show();
    }, 1000)
});