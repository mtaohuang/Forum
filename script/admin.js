function funcSelect(func)
{
    if(func == "club_status")
    {
        document.getElementById("func_frame").src = 'clubStatus.html';
    }
    else if(func == "club_leader")
    {
        document.getElementById("func_frame").src = 'clubLeader.html';
    }
    else
    {
        document.getElementById("func_frame").src = 'clubArticle.html';
    }
}
window.onload = function(){
    window.onscroll = function(){
        var isTop = document.documentElement.scrollTop || document.body.scrollTop;
        if (isTop < 65) {
            document.getElementById("left").className = 'mov_left';
            document.getElementById("right").className = 'mov_right';
        }
        else {
            document.getElementById("left").className = 'fix_left';
            document.getElementById("right").className = 'fix_right';
        }
        console.log(isTop);
    }
}
