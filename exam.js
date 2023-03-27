/*====
latest news
====*/
$(document).ready(function() {
    // Calling easyTicker function to
    // create newsticker movement
    $('.news-updates-card').easyTicker({
        direction: 'up',
        easing: 'swing',
        visible: 3,
        mousePause: true,
        speed: 'slow',
        interval: 1500,
        autoplay:true,
        height: 'auto',
        controls: {
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false
        }
    });
  });
  //=======tenders=======
  $(document).ready(function() {
    $('.tenders-card').easyTicker({
        direction: 'up',
        easing: 'swing',
        visible: 4,
        mousePause: true,
        speed: 'slow',
        interval: 1000,
        autoplay:true,
        height: 'auto',
        controls: {
            playText: 'Play',
            stopText: 'Stop'
        },
        callbacks: {
            before: false,
            after: false
        }
    });
  });
function latestNews(){
    document.getElementById("newsUpdatesCard").style.display="block";
    document.getElementById("tendersCard").style.display="none";
    
    document.getElementById("latestNewsHead").style.backgroundColor="#00a01d ";
    document.getElementById("tendersHead").style.backgroundColor="#2e2c2c";
   
}
function tendersHead(){
    document.getElementById("newsUpdatesCard").style.display="none";
    document.getElementById("tendersCard").style.display="block";
    
    document.getElementById("latestNewsHead").style.backgroundColor="#2e2c2c";
    document.getElementById("tendersHead").style.backgroundColor="#00a01d";
    
}
