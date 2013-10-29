

var allTabs = document.getElementsByTagName("li");
for (var i = allTabs.length-1; i >=0; i--) {
	if (allTabs[i].id) {
		allTabs[i].onClick = activateTab(allTabs[i].id);
		window.alert(allTabs[i].getAttribute("onClick"));
	}
}

function activateTab(tabId) {

	for (i = allTabs.length - 1; i >= 0; i--) {
		if ((allTabs[i].id == "loginTab") || (allTabs[i].id == "logoutTab")) {
			allTabs[i].setAttribute("class", "pull-right");
			window.alert("if - "+ allTabs[i].id);
		}
		else if (allTabs[i].id) {
			allTabs[i].setAttribute("class", "");
			window.alert("else - "+ allTabs[i].id);
		}
	}	

	var currentTab = document.getElementById(tabId)

	if ((currentTab.id == "logoutTab") || (currentTab.id = "loginTab")) {
		currentTab.setAttribute("class","active pull-right");
		window.alert("if - "+ currentTab.id);
	}
	
	else {
		currentTab.setAttribute("class", "active");
	}
}
