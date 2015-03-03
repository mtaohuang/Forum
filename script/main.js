function hideLayer (id)
{
    document.getElementById(id).style.display = 'none';
}
function displayLayer (id)
{
	document.getElementById(id).style.display = 'block';	
}
function boxDisplay (id) 
{
	if (document.getElementById(id).style.display == 'block') 
	{
		document.getElementById(id).style.display = 'none';
	}
	else
	{
		document.getElementById(id).style.display = 'block';
	}
}
function displayContent (id1, id2) {
	document.getElementById(id1).style.backgroundColor = '#2687d1';
	document.getElementById(id2).style.backgroundColor = '#016fc1';
	if (id1 == 'left_body_article') 
	{
		titleText = "文章";
	}
	else
	{
		titleText = "热点讨论";
	}
	document.getElementById('middle_head_title').innerText = titleText;
}