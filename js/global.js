
window.onload = function(){
    var elms = document.getElementsByTagName('li');

    // search for element with class myclass
    for (var i = 0; i < elms.length; i++){
        if (elms[i].parentNode.getAttribute('class') === 'nav'){

            elms[i].onmousemove = function(){
                this.style.background = "grey";
                this.childNodes[0].style.color = "white";
            }

            elms[i].onmouseout = function(){
                this.style.background = "white";
                this.childNodes[0].style.color = "black";
            }

            elms[i].onmousedown = function () {
                this.style.background = "white";
                this.childNodes[0].style.color = "red";
            }

        }

        if (elms[i].parentNode.parentNode.getAttribute('class') === 'article'
            || elms[i].parentNode.parentNode.getAttribute('class') === 'misc'){

            elms[i].childNodes[0].onmousemove = function(){
                this.style.color = "blue";
            }

            elms[i].childNodes[0].onmouseout = function(){
                this.style.color = "black";
            }

            elms[i].childNodes[0].onmousedown = function () {
                this.style.color = "red";
            }

        }
    }
}
