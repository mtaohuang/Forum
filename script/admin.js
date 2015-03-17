function funcSelect(func)
{
    if(func == "club_status")
    {
        document.getElementById("club_status").style.display = 'block';
        document.getElementById("club_leader").style.display = 'none';
        document.getElementById("club_article").style.display = 'none';
    }
    else if(func == "club_leader")
    {
        document.getElementById("club_status").style.display = 'none';
        document.getElementById("club_leader").style.display = 'block';
        document.getElementById("club_article").style.display = 'none';
    }
    else
    {
        document.getElementById("club_status").style.display = 'none';
        document.getElementById("club_leader").style.display = 'none';
        document.getElementById("club_article").style.display = 'block';
    }
}
