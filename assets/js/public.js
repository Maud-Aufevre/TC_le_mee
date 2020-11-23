alert("ok");

     



 $(document).ready(function(){


    $.ajax({
        url:"./controllers/public/PublicController.php",
        type: 'GET',
        success:function(result){
                        // console.log(result);
            let response=JSON.parse(result);
            console.log(response);
            recup(response);

        },
        error:function(error){
            console.log(error);
        }
    });
 

    function recup(res) {
        let tabImg = [];
        for(r of res){
            tabImg.push(res.visuel);
        }
        console.log(tabImg);
    }

     


    let tabBalles = ["#balle1","#balle2","#balle3","#balle4","#balle5"];

    // let tabImg = ['../assets/images/carrousel/IMG_3594.jpg','../assets/images/carrousel/event_tennis.jpg','../assets/images/carrousel/ecole.jpg','../assets/images/carrousel/resa.jpg','../assets/images/carrousel/actus.jpg'];

    let i = 0;

    $(tabBalles[0]).css("background-image","url('./assets/images/carrousel/balleCarrousel.png')");

    function changerBalle(){
    $('#carrousel').attr("src", tabImg[i]);
    // $('#carrousel').attr("src", carr[i]);
    $(tabBalles[i]).css("background-image","url('./assets/images/carrousel/balleCarrousel.png')");

    $(tabBalles[i-1]).css("background-image","url('')");

    i++;
    if(i>=tabBalles.length){
        i = 0;
    }
    
    if(i==1){
        $(tabBalles[4]).css("background-image","url('')");
    }
    }

    let diapo = setInterval(changerBalle,4000); 

})
     