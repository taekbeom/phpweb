var count = 0;
document.getElementById("button-1").onclick = function() {
    count++;
    if (count % 2 == 0) {
        document.getElementById("demo").innerHTML = "";
    }
    else {
        var img = document.createElement("img");
        img.src = "https://media.tenor.com/YS2hbVD4hGIAAAAM/anime-noragami.gif";
        document.getElementById("demo").appendChild(img);
    }
}