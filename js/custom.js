

var allTabs = document.getElementsByTagName("li");
for (var i = allTabs.length-1; i >=0; i--) {
	if (allTabs[i].id) {
		allTabs[i].setAttribute("onClick","activateTab("+allTabs[i].id+")");
		window.alert(allTabs[i].getAttribute("onClick"));
	}
}

activateTab()

function activateTab() {

	//reset all tabs to default/inactive
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

	//now check what page we're on by finding a unique element on that page
	

	var currentTab = document.getElementById(tabId)
	if (document.getElementById("loginBtn")) {
		currentTab = document.getElementById("loginTab");
		currentTab.setAttribute("class", "active pull-right");
	}

	else if (document.getElementById("signupBtn")) {
		currentTab = document.getElementById("signupTab");
		currentTab.setAttribute("class", "active");

	}
/*
	if ((currentTab.id == "logoutTab") || (currentTab.id = "loginTab")) {
		currentTab.setAttribute("class","active pull-right");
		window.alert("if - setActive - "+ currentTab.id);
	}
	
	else {
		currentTab.setAttribute("class", "active");
		window.alert("else - setActive - " + currentTab.id);
	}
*/
}
