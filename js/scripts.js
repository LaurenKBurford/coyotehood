

function createDivs(divWidth, divHeight, numberOfDivs) {
    var divElements = [];
    var offset = 0;
    for (i=0;i<numberOfDivs;i++) {
        divElements.push("<div class='auroraLine' style='width:" + (Math.round(Math.random() * divWidth)) + "px;height:" + divHeight + "px;left:" + offset + "px;'></div>");
        offset += divWidth - (Math.round(Math.random() * 30));
    }
    jQuery('#northern-lights').html(divElements);
    turnOnLights();
}

function createNumberOfDivs() {
    var divWidth = 0;
    var divHeight = 0;
    var x = jQuery(document).width(); 
    if (x <= 450) {
        divWidth = 23;
        divHeight = 175;
    }
    if (x > 450 && x <= 700) {
        divWidth = 24;
        divHeight = 200;
    }
    if (x > 700 && x <= 900) {
        divWidth = 25;
        divHeight = 295;
    }
    if (x > 900 && x <= 1030) {
        divWidth = 25;
        divHeight = 335;
    }
    if (x > 1030 && x <= 1200) {
        divWidth = 25;
        divHeight = 460;
    }
    if (x > 1200 && x <= 2100) {
        divWidth = 30;
        divHeight = 600;
    }
    if (x > 2100) {
        divWidth = 35;
        divHeight = 1060;
    }

    var numberOfDivs = (Math.round(x / (divWidth - 5))) * 2.5;

    createDivs(divWidth, divHeight, numberOfDivs);
}

window.addEventListener( "load", createNumberOfDivs);


// Northern Lights hover effects

function turnOnLights() {
    jQuery('.auroraLine').hover(function() {

        var currentHeight = jQuery(this).css("height");
        var currentHeightNumber = Math.floor(Number(currentHeight.substring(0, currentHeight.length - 2)));
        var shorterHeightMax = Math.floor(currentHeightNumber / 1.5);
        var shorterHeightMin = Math.floor(currentHeightNumber / 3);

        jQuery(this).animate({
            height: (Math.floor(Math.random() * shorterHeightMax) + shorterHeightMin) + "px",
            top:  Math.floor(Math.random() * 8) + "rem",
            opacity: Math.random()
          }, 1300, function() {
            jQuery(this).animate({
                height: currentHeightNumber + "px",
                top:  Math.floor((Math.random() * 2) + 1) + "rem",
                opacity: Math.random()
              }, 1500)
          });
      });

      jQuery(".auroraLine").hover(function() {
        var hexOne = Math.floor(Math.random()* (245 - 154 + 1) + 154);
        var hexTwo = Math.floor(Math.random()* (223 - 166 + 1) + 166);
    
    
        jQuery(this).css({"background": "linear-gradient(180deg, rgba(88,254,166,0) 0%, rgba(88," + hexOne + ",254,1) 28%, rgba(88," + hexTwo + ",166,1) 46%, rgba(0,212,255,0) 97%)"});
        
      });
}
