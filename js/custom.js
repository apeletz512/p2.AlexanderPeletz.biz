

function activateTabs() {
	var currentPage;
	var currentTab;
	var allTabs;
	var i;

	allTabs = document.getElementsByTag("li");
	for (i = allTabs.length - 1; i >= 0; i--) {
		window.alert(i);
		if ((allTabs[i].id = "loginTab") || (allTabs[i].id = "logoutTab")) {
			allTabs[i].setAttribute("class", "pull-right");
			window.alert("if");
		}
			
		else {
			allTabs[i].setAttribute("class", "");
			window.alert("else");
		}
	}	

	if (document.getElementById("loginBtn")) {
		window.alert("found loginBtn");
		currentTab = document.getElementById("loginTab");
		currentTab.setAttribute("class","active pull-right");
	}

}
