window.onload = function() {
	var x = $$('input[type="radio"]');
	var y = this.getCheckedRadio(x);
	// this.console.log(x);
	// this.console.log(y);
	this.console.log(getCheckedRadio( $$("input") ) );

    $("b_xml").onclick=function(){
			//construct a Prototype Ajax.request object
			new Ajax.Request("books.php" , { 
				method: "get",
				// parameters: { category : getCheckedRadio($$('input[type="radio"]')) },
				parameters: { category : getCheckedRadio($$("input")) },
				onSuccess: showBooks_XML,
				onFailure: ajaxFailed,
				onException : ajaxFailed
			});
	}
	
    $("b_json").onclick=function(){
		new Ajax.Request("books_json.php" , {
			method: "get",
			parameters: { category : getCheckedRadio($$('input[type="radio"]')) },
			onSuccess: showBooks_JSON,
			onFailure: ajaxFailed,
			onException: ajaxFailed
		});
    	    //construct a Prototype Ajax.request object
    }
};

function getCheckedRadio(radio_button){
	for (var i = 0; i < radio_button.length; i++) {
		if(radio_button[i].checked){
			return radio_button[i].value;
		}
	}
	return undefined;
}

function showBooks_XML(ajax) {
	var response = ajax.responseXML;
	console.log(response);
	var titleList = response.getElementsByTagName("title");
	var yearList = response.getElementsByTagName("year");
	var authorList = response.getElementsByTagName("author");
	var ul = $("books");
	console.log(titleList, yearList, authorList);
	ul.innerHTML ="";

	for (let index = 0; index < titleList.length; index++) {
		var title = titleList[index].firstChild.nodeValue;
		var year = yearList[index].firstChild.nodeValue;
		var author = authorList[index].firstChild.nodeValue;

		var li = document.createElement("li");
		li.innerHTML = title + ", by" + author + "(" + year + ")";
		ul.appendChild(li);
		// console.log(title , year, author);
	}
	// console.log( ul );
}

function showBooks_JSON(ajax) {
	console.log(ajax.responseText);
	$("books").innerHTML = "";
	var jsonData = JSON.parse(ajax.responseText);
	console.log( Object.keys(jsonData.books).length );
	for (let index = 0; index < jsonData.books.length; index++) {
		var title = jsonData.books[index].title;
		var author = jsonData.books[index].author;
		var year = jsonData.books[index].year;	

		var li = document.createElement("li");
		li.innerHTML = title + ", by" + author + "(" + year + ")";
		$("books").appendChild(li);
	}
	// var title = jsonData.books[0].title;
	// console.log(title)
}

function ajaxFailed(ajax, exception) {
	var errorMessage = "Error making Ajax request:\n\n";
	if (exception) {
		errorMessage += "Exception: " + exception.message;
	} else {
		errorMessage += "Server status:\n" + ajax.status + " " + ajax.statusText + 
		                "\n\nServer response text:\n" + ajax.responseText;
	}
	alert(errorMessage);
}
