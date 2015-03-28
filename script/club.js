window.onload = function () {
    window.onscroll = function () {
        var isTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (isTop < 400) {
            document.getElementById("mid_nav").className = 'mov_nav';
            document.getElementById("search").style.display = 'none';
        }
        else {
            document.getElementById("mid_nav").className = 'fix_nav';
            document.getElementById("search").style.display = 'block';
        }
        console.log(isTop);
    }
}
