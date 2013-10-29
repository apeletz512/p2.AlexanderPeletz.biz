

function activateTabs() {
	var currentPage;
	var currentTab;
	var allTabs;
	var i;

	allTabs = document.getElementsByTag("li");
	for (i = allTabs.length - 1; i >= 0; i--) {
		if ((allTabs[i].id = "loginTab") || (allTabs[i].id = "logoutTab") {
			allTabs[i].setAttribute("class", "pull-right");
		}
			
		else {
			allTabs[i].setAttribute("class", "");
		}
	}	

	if (document.getElementById("loginBtn")) {
		currentTab = document.getElementById("loginTab");
		currentTab.setAttribute("class","active pull-right");
}

}
