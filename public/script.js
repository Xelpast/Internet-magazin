var modal = document.getElementById('MyModal');
var img = document.getElementById('MyImg');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById("caption");

img.onclick = function () 
{
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerText = this.alt;
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
}
