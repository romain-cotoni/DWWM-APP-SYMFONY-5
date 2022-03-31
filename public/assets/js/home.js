var btn1 = document.getElementById("carousel1-prev");
    var btn2 = document.getElementById("carousel2-prev");
    var btn3 = document.getElementById("carousel3-prev");
    var btn4 = document.getElementById("carousel1-next");
    var btn5 = document.getElementById("carousel2-next");
    var btn6 = document.getElementById("carousel3-next");

    var btn7 = document.getElementById("carousel-all-prev");
    var btn8 = document.getElementById("carousel-all-next");

    //var btn10 = document.getElementById("btn10");

    btn7.addEventListener('click', slidecarouselprev, false);
    btn8.addEventListener('click', slidecarouselnext, false);  

    //btn10.addEventListener('click', slidecarouselnextmultipletimes, false);    

    function slidecarouselprev()
    {
        btn1.click();
        btn2.click();
        btn3.click();
    }

    function slidecarouselnext()
    {
        btn4.click();
        btn5.click();
        btn6.click();
    }

    function slidecarouselnextmultipletimes()
    {
        for(var i=0; i<3; i++)
        {
            slidecarouselnext();
        }
    }
    
    setInterval(slidecarouselprev, 5000);