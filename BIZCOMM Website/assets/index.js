window.onbeforeunload = function() {
    window.scrollTo(0, 0);
}

var siteWidth = 1280;
var scale = screen.width /siteWidth;

document.querySelector('meta[name="viewport"]').setAttribute('content', 'width='+siteWidth+', initial-scale='+scale+'');

if (screen.width <= 699) {
    document.location = "Mobile-Index.php";
}
