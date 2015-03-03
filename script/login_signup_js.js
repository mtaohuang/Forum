function login () {
	var username = document.getElementById('login_username').value.split("@")[0];
	document.cookie = "name=" + username;
}