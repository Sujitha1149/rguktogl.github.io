$(document).ready(function() {
    // Calling easyTicker function to
    // create newsticker movement
    $('.news-updates-card').easyTicker({
        direction: 'up',
        easing: 'swing',
        visible: 3,
        mousePause: true,
        speed: 'slow',
        interval: 2000,
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
        visible: 5,
        mousePause: true,
        speed: 'slow',
        interval: 2000,
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
}
function tendersHead(){
    document.getElementById("newsUpdatesCard").style.display="none";
    document.getElementById("tendersCard").style.display="block";
}