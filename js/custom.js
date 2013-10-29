

var loginTab = document.getElementById("loginTab");
loginTab.onClick = activateTab("loginTab")



function activateTab(tabId) {
	var currentTab;
	var allTabs;
	var i;

	currentTab = document.getElementById(tabId);
	
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

	document.getElementById(tabId)) {
		window.alert("found loginBtn");
		currentTab = document.getElementById(tabId);
		currentTab.setAttribute("class","active pull-right");
	}

}
