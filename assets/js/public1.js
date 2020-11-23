// console.log("ok");
$(document).ready(function(){
                // CARROUSEL PAGE ACCUEIL
    let tabBalles = [/*"#balle1","#balle2",*/"#balle3","#balle4","#balle5"];
    let tabCar = [/*"#getCarrousel1","#getCarrousel2",*/"#getCarrousel3","#getCarrousel4","#getCarrousel5"];
// console.log(tabCar);
    let i = 0;

    $(tabBalles[0]).css("background-color","yellow");
    $(tabCar[0]).css("display","block");

    function changerDiapo(){
        $(tabBalles[i]).css("background-color","yellow");
        $(tabBalles[i-1]).css("background-color","rgba(0, 0, 255, 0)");
        
        $(tabCar[i]).css("display","block");
        $(tabCar[i-1]).css("display","none");

        if(i==1 || i==0){
            // $(tabBalles[4]).css("background-color","none");
            // $(tabCar[4]).css("display","none");
            $(tabBalles[2]).css("background-color","rgba(0, 0, 255, 0)");
            $(tabCar[2]).css("display","none");
        }

        i++;

        if(i>=tabBalles.length){
            i = 0;
        }    
    }

    let diapo = setInterval(changerDiapo,4000); 


                // DEFILE IMG PAGE INSTALLATIONS

    $(".imgSmall").each(function(){
        $(this).on("click", function(){
            let source = $(this).attr("src");
            $("#big").attr("src",source);
        })
    })



                   // PAGE ACTIVE MISE EN FORME MENU


    $(function () {
        var url = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
        $(".navItem a:first-child").removeClass("activeMenu");
        $(".navItem a:first-child").each(function() {
            // console.log(url);
            if ($(this).attr("href") == url)
                $(this).addClass("activeMenu");
        });
    });


                   // NAV RESPONSIVE
      
    $("#iconResponsive a i").on("click",function(){
        if($("#barres").css("display") === "none") {
            $("#barres").css("display","inline-block");
            $("#croix").css("display","none");
            $("header nav>ul").css("display","none");
        }else {
            $("#barres").css("display","inline-none");
            $("#croix").css("display","inline-block");
            $("#barres").css("display","none");
            $("header nav>ul").css("display","block");
        }
    })


})

