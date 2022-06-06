document.querySelector("body").onscroll = function() {addHeaderShadow()};


function addHeaderShadow() {
     console.log("aa");
    if (document.body.scrollTop > 1px)
    {
        document.querySelector(".site-header").classList.add("shadow");
    }else{
        document.querySelector(".site-header").classList.remove("shadow");
    }
};