

function activateTabs() {
	var currentPage;
	var currentTab;
	var allTabs;
	var i;

	allTabs = document.getElementsByTag("li");
	for (i = allTabs.length - 1; i >= 0; i--) {
		alert(i);
		if ((allTabs[i].id = "loginTab") || (allTabs[i].id = "logoutTab")) {
			allTabs[i].setAttribute("class", "pull-right");
			alert("if");
		}
			
		else {
			allTabs[i].setAttribute("class", "");
			alert("else");
		}
	}	

	if (document.getElementById("loginBtn")) {
		alert("found loginBtn");
		currentTab = document.getElementById("loginTab");
		currentTab.setAttribute("class","active pull-right");
	}

}
