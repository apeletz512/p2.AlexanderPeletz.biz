

var allTabs = document.getElementsByTagName("li");
for (var i = allTabs.length-1; i >=0; i--) {
	if (allTabs[i].id) {
		allTabs[i].onClick = activateTab(allTabs[i].id);
	}
}

function activateTab(tabId) {
	var currentTab;
	
	allTabs = document.getElementsByTagName("li");

	for (i = allTabs.length - 1; i >= 0; i--) {
		window.alert(i);
		if ((allTabs[i].id == "loginTab") || (allTabs[i].id == "logoutTab")) {
			allTabs[i].setAttribute("class", "pull-right");
		}	
		else if (allTabs[i].id) {
			allTabs[i].setAttribute("class", "");
		}
	}	

	currentTab = document.getElementById(tabId)
	currentTab = document.getElementById(tabId);
	currentTab.setAttribute("class","active pull-right");

}
