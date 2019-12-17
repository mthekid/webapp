"use strict";


// 2014037947 소프트웨어학부 4학년 문현준

/* use anonymous function to attach appropriate event handlers for each bucket list item,
 * when the dom is loaded (that is immediately after the HTML document is fully loaded, but before images on the page are fully loaded)
 * - attach all event handlers the Prototype way [10]
 */
/* 익명 함수를 사용하여 각 버킷 리스트 항목에 적적한 event handler를 붙이시오
 * dom이 load된 경우 (즉, HTML 문서가 환전히 로 된 직후, 페이지의 이미지가 완전히 로드 되기 전)
 * - Prototype 방식으로 모든 event handler를 붙이시오
 */


  // For each bucket list item (list items in both To Do and Done list : 20 items in total), attach the following event handlers :
    // 각 버킷 리스트 항목 (To Do 및 Done 목록의 항목 : 총 20개 항목)에 대해 다음 이벤트 핸들러를 붙이시오


        /* attach 'toDOorDone' function to handle user clicks on each bucket list item
         * - attach all event handlers the Prototype way
         */
        /* 각 버킷 리스트 항목의 사용자 클릭 처리에 'toDOorDone' function을 연결
         *  - Prototype 방식으로 모든 event handler를 붙이시오
         */

        /* attach 'displayImage' function to handle mouse hover over each bucket list item
         * - attach all event handlers the Prototype way
         */
        /* 각 버킷 리스트 항목의 마우스 오버 처리에 'displayImage' function을 연결
             *  - Prototype 방식으로 모든 event handler를 붙이시오
             */
 window.onload = function() {
    //  const num = null;
     var todo = $("todo").select("li");
     for(var i = 0 ; i < todo.length ; i++) {
         todo[i].observe("click", this.toDOorDone); 
         var todolist = todo[i];
         todo[i].observe("mouseover",this.displayImage);
         this.console.log(todo[i]);  
     }

     var done = $("done").select("li");
     for(var i = 0; i < done.length; i++ ) {
        done[i].observe("click" , this.toDOorDone);
        this.console.log(done[i]);
     }
     this.console.log( todo );
 }


/* When user clicks each bucket list item (20 items in total), move the clicked list item to :
 * - if the clicked item is in the To Do list, move it to the end of the Done list
 * - if the clicked item is in the Done list, move it to the front of the To Do list [10]
 */
/* 사용자가 각 버킷 목록 항목 (총 20 개 항목)을 클릭하면 클릭 한 항목을 다음으로 이동 :
 * -클릭 한 항목이 'To Do' 목록에 있으면 'Done' 목록의 끝으로 이동
 * -클릭 한 항목이 'Done' 목록에있는 경우 'To Do' 목록의 맨 앞으로 이동
 */
function toDOorDone() {
    var todolist = document.createElement("li");
    todolist.innerHTML = todo;
    console.log();
    // $("todo").appendChild(todonode); 

}

/* When user move mouse pointer over each bucket list item (20 items in total), display the associated image in the image area.
 * - image file name is bucket list item’s text with .jpeg extension
 *
 * When mouse pointer moves over to other bucket list item, image area should dynamically update its content
 * by removing current image (if exist) & replacing it with the new image. [10]
 */
/* 사용자가 각 버킷 목록 항목 (총 20 개 항목) 위로 마우스 포인터를 이동하면 이미지 영역에 관련 이미지가 표시
 * -이미지 파일 이름은 버킷 목록 항목의 텍스트와 동일하며 확장자가 .jpeg 임
 *
 * 마우스 포인터가 다른 버킷 목록 항목으로 이동하면 이미지 영역이 내용을 동적으로 업데이트
 * 현재 이미지를 제거하고 (있는 경우) 새 이미지로 교체
 */
function displayImage() {



}