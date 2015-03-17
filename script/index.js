window.onload = function(){
    window.onscroll = function(){
        var isTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (isTop < 600) {
            document.getElementById("mid_nav").className = 'mov_nav';
        }
        else {
            document.getElementById("mid_nav").className = 'fix_nav';
        }
        console.log(isTop);
    }
}
