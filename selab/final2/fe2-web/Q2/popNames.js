document.observe("dom:loaded", function() {
	/*	create an Ajax request to 'popNames.php' using HTTP GET request
	 *  with the parameter name: 'type' & value: 'list'
	 *  when request is successful call 'listNames' function
	 *  when request fails or when exception occurs call 'ajaxFailed' function
	 *
	 * 'popNames.php'에 HTTP GET 요청을 사용하는 Ajax 요청을 생성하시오
	 * 요청에서 사용되는 매개변수 이름: 'type' & 값: 'list'
	 * 요청이 성공적일 경우 'listNames' 함수 호출
	 * 요청이 실패하거나 예외가 발생할 경우 'ajaxFailed' 함수 호출
	 */
	var x = $("search");
	window.onload = function() {
		new Ajax.Request("popNames.php" , {
			method: "get",
			parameters : { type : "list" },
			onSuccess: listNames,
			onFailure: ajaxFailed
		});
		// console.log("hello");
	}
	
	/*	observe mouse click event from 'search' button and create anonymous function
	 *  in the anonymous function create an Ajax request to 'popNames.php' using HTTP GET request
	 *  with the parameter name: 'name' & value: selected option in the 'names' drop down list
	 *  when request is successful call 'listPopularity' function
	 *  when request fails or when exception occurs call 'ajaxFailed' function
	 *
	 * 'search' 버튼으로부터의 마우스 클릭 이벤트를 관찰하여 익명의 함수를 생성하시오
	 * 익명의 함수에서 'popNames.php'에 HTTP GET 요청을 사용하는 Ajax 요청을 생성하시오
	 * 요청에서 사용되는 매개변수 이름: 'name' & 값: 'names' 드랍다운리스트에서 선택된 옵션
	 * 요청이 성공적일 경우 'listPopularity' 함수 호출
	 * 요청이 실패하거나 예외가 발생할 경우 'ajaxFailed' 함수 호출
	 */ 
	$("search").onclick = function() {
		var name =  $("names");

		for (let index = 0; index < name.length ; index++) {
			if(name[index].selected) {
				var selectedName = name[index].firstChild.nodeValue;
			}			
		}
		
		new Ajax.Request("popNames.php" , {
			method: "get",
			parameters: { name : selectedName },
			onSuccess : listPopularity_XML ,
			onFailure :ajaxFailed
		})
	}
});

function listNames(ajax) {
	/* process repsonse from the 'popNames.php'.
	 * for each name in the response create an option element and attach it to the 'names' drop down list
	 *
	 * 'popNames.php'에서의 응답을 처리하시오
	 * 응답으로 온 각 이름에 해당하는 option 객체를 생성하여 'names' 드랍다운리스트에 추가하시오
	 */
	var response = ajax.responseText;
	var jsonData = JSON.parse(response);
	for (let index = 0; index < jsonData.length; index++) {
		//  console.log(jsonData[index] );
		 var name = jsonData[index];
		 var option = document.createElement("option");
		 option.innerHTML = name;
		 $("names").appendChild(option);
	}
}

function listPopularity_XML(ajax) {
	// clear out all existing table cells (if exist) from the 'year' & 'popularity' table rows
	//'year' & 'popularity' 테이블 행에 이미 존재하는 테이블 셀(table cell)이 있다면 이를 모두 지우시오




    /* initially, create an table header (th) elements that should be place on the left hand side of each table row
	 *  - for representing 'Year' & 'Popularity' headings
	 *
	 * 우선, 각 테이블 행의 가장 왼쪽에 배치되어야하는 테이블 헤더 (th) 요소를 작성하시오
	 *  - 'Year' & 'Popularity'의 제목을 나타내기 위해
     */



    /* process response from the 'popNames.php'.
	 * for each rank in the response (each XML element) create an table cells :
	 *  - table headers (th) element for year from XML and attach it to the 'year' table row
	 *  - table cell ('td') element for ranking data from XML and attach it to the 'popularity' table row
	 *
	 * 'popNames.php'에서의 응답을 처리하시오
	 * 응답으로 온 각 랭킹(각 XML 객체)마다, 테이블 셀을 생성하시오 :
	 *  - XML에서 연도에 대한 테이블 헤더 (th) 요소를 생성하여 'year' 테이블 행에 추가
	 *  - XML에서 랭킹 데이터에 대한 테이블 셀 (td) 요소를 생성하여 'popularity' 테이블 행에 추가
	 */
	var response = ajax.responseXML;

}

function ajaxFailed(ajax, exception) {
	var errorMessage = "Error making Ajax request:\n\n";
	if (exception) {
		errorMessage += "Exception: " + exception.message;
	} else {
		errorMessage += "Server status:\n" + ajax.status + " " + ajax.statusText + "\n\nServer response text:\n" + ajax.responseText;
	}
	alert(errorMessage);
}
