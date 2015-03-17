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
