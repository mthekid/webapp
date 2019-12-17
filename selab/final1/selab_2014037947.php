<!-- 2014037947 소프트웨어학부 문현준 -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SELab Member Registration</title>
		<meta charset="utf-8" />
		<meta name="author" content="Scott Uk-Jin Lee" />
		<meta name="description" content="Final Exam Question for CSE3026: Web Application Development." />
		<meta name="keywords" content="Hanyang university, cse3026, web application development, form, php" />

		<link rel="stylesheet" type="text/css" href="selab.css" />
		<link rel="shortcut icon" href="imgs/favicon.png" type="image/png" />
	</head>

	<body>
        <header>
            <img src="imgs/selab.png" alt="SELab" height="71" width="160"/>
            <h1>SELab Member Registration</h1>
        </header>

        <article>
            <section id="form">
                <!-- create a form that submits user inputs to 'selab.php' (itself) using HTTP POST request
                     the form should be able to submit both form data (text) and files -->
                <!-- 사용자 입력을 HTTP POST request를 통하여 'selab.php'(자신에게)로 제출하는 form을 생성하시오
                     form은 form 데이터(text)와 파일 모두를 제출할 수 있어야 함 -->
                    <!-- fieldset and legend -->
                    <fieldset>
                    <legend>Personal Information</legend>
                    <form action= "selab.php" method="POST">
                        <div>
                            <!-- create a text field, specify its  parameter name to be 'name' and set its size to 30 -->
                            <!-- parameter의 이름이 'name'인 text field를 생성하고 크기를 30으로 지정시오 -->
                            <label>Name: <input type="text" name="name" value="" size="30" /> </label>
                        </div>
                        <br />
                        <div>
                            <!-- create a text field, specify its parameter name to be 'email',
                                 set default value to '@hanyang.ac.kr', and set its size to 30 -->
                            <!-- parameter의 이름이 'email'인 text field를 생성하고 기본값을 '@hanyang.ac.kr' 지정하고 크기를 30으로 지정시오 -->
                            <label>Email: <input type="email" name="email" value="" size="30" /> </label>
                            <!-- "@hanyang.ac.kr" -->
                        </div>
                        <br />
                        <div>
                            <!-- create a form control that enables file upload with parameter named 'photo' -->
                            <!-- parameter의 이름이 'photo'이며 파일 업로드를 가능하게 하는 form control을 생성하시오  -->
                            <label>Photo: <input type="file" name ="photo" /></label>
                        </div>
                    </fieldset>
                    <br />
                    <!-- fieldset and legend -->
                    

                        <!-- create a set of radio button and group them together as shown in the screenshot above
                             specify radio buttons’ parameter name to be 'status' and its possible value to be 'Undergraduate', 'Master', and 'Ph.D'
                             specify that the 'Undergraduate' radio button is checked initially by default -->
                        <!-- 위 스크린 샷에서 보이는 것 처럼 radio button 그룹을 생성하시오
                             radio button의 parameter의 이름이 'status'이고 값이 'Undergraduate', 'Master', 'Ph.D'가 될수 있도록 설정하시오
                             'Undergraduate' radio button이 처음에 그리고 기본적으로 체크 되어 있도록 설정하시오 -->
                    <fieldset>
                        <legend>Status</legend>
                        <label><input type="radio" name="status" value="Undergraduate" checked="checked">Undergraduate</label>
                        <label><input type="radio" name="status" value="Master">Master</label>
                        <label><input type="radio" name="status" value="Ph.D">Ph.D</label>
                    </fieldset>

                    <br />
                    <!-- fieldset and legend -->    
                    <fieldset>
                        <legend>Interest Area</legend>
                        <!-- create a set of check boxes and group them together as shown in the screenshot above
                             specify check boxes’ parameter name to be 'maintain', 'analysis', 'testing', 'quality', 'ase', and 'ese'
                             specify that the 'SW Quality Management' check box is checked initially by default -->
                        <!-- 위 스크린 샷에서 보이는 것 처럼 check box 그룹을 생성하시오
                             check box의 parameter의 이름이 각각 'maintain', 'analysis', 'testing', 'quality', 'ase', 'ese'가 되도록 설정하시오
                             'SW Quality Management' check box가 처음에 그리고 기본적으로 체크 되어 있도록 설정하시오 -->
                        <label> <input type="checkbox" name="interest[]" value="Maintenance"> SW Maintenance</label>
                        <label> <input type="checkbox" name="interest[]" value="Analysis"> SW Analysis</label>
                        <label> <input type="checkbox" name="interest[]" value="Testing"> SW Testing</label>
                        <label> <input type="checkbox" name="interest[]" value="QualityManagement" checked="checked"> SW Quality Management</label>
                        <br />
                        <label> <input type="checkbox" name="interest[]" value="AutomatedEngineering"> Automated SW Engineering</label>
                        <label> <input type="checkbox" name="interest[]" value="EmpiricalEngineering"> Empirical SW Engineering</label>
                    </fieldset>
                    <br />
                    <!-- fieldset and legend [0.5]-->

                    <fieldset>
                        <legend>Skills</legend>
                        <div>
                            Favorite Programming Language :
                            <!-- create a drop-down list for 'Favorite Programming Language' with its parameter name to be 'planguage'
                                 and its possible value to be 'Python', 'JavaScript', 'C#', 'PHP', 'C++', 'C', 'R', and 'Swift' -->
                            <!-- parameter의 이름이 planguage인 drop-down list를 생성하고
                                 이 list의 가능한 값을 'Python', 'JavaScript', 'C#', 'PHP', 'C++', 'C', 'R', 'Swift'가 되도록 설정하시오 -->
                                 <select name="programmingLanguage" >
                                    <option value = "Python">Python</option>
                                    <option value = "JavaScript">JavaScript</option>
                                    <option value = "Java">Java</option>
                                    <option value = "Csharp">C&num;</option>
                                    <option value = "Csharp">C&num;</option>
                                    <option value = "PHP">PHP</option>
                                    <option value = "C">C</option>
                                    <option value = "R">R/option>
                                    <option value = "Swift">Swift</option>
                                </select>
                            Proficiency :
                            <select name="Proficiency" >
                                <option value = "Expert">Expert</option>
                                <option value = "Advanced">Advanced</option>
                                <option value = "Intermediate">Intermediate</option>
                                <option value = "Novice">Novice</option>
                                <option value = "Fundamental">Fundamental</option>
                            </select>
                            <!-- create a drop-down list for 'Proficiency' with its parameter name to be 'proficiency'
                                 and its possible value to be 'Expert', 'Advanced', 'Intermediate', 'Novice', and 'Fundamental' -->
                            <!-- parameter의 이름이 'proficiency'인 drop-down list를 생성하고
                                 이 list의 가능한 값을 'Expert', 'Advanced', 'Intermediate', 'Novice', 'Fundamental'이 되도록 설정하시오 -->
                        </div>
                        <br />
                        <div>
                            Most Fluent Language :
                            <!-- create a drop-down list for 'Most Fluent Language' with its parameter name to be 'language'
                                 and its possible value to be 'English', 'Korean', 'Chinese', 'Spanish', and 'French' -->
                            <!-- parameter의 이름이 'language'''인 drop-down list를 생성하고
                                 이 list의 가능한 값을 'English', 'Korean', 'Chinese', 'Spanish', 'French'가 되도록 설정하시오 -->
                                 <select name="language" >
                                    <option value = "English">English</option>
                                    <option value = "Korean">Korean</option>
                                    <option value = "Chinese">Chinese</option>
                                    <option value = "Spanish">Spanish</option>
                                    <option value = "French">French</option>
                                </select>
                        </div>
                    </fieldset>
                    <br />
                    <div id="button">
                        <input type ="submit" value="submit">
                        <input type="reset" value="reset"/>
                        <!-- create a reset and a submit button -->
                        <!-- 리셋과 제출 버튼을 생성하시오  -->
                    </div>

                                <!-- in PHP code # is comment so if you want writing code then delete # -->
								<!-- php 작성시 # 은 주석이므로 삭제하고 문제푸시오 -->
                <?php
                    // validate and process the form data only if the request method is post
                    // request method가 post인 경우에만 form 데이터를 검증하고 처리하시오
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        /* Write a test to check whether all the necessary parameters were passed or not
                         * Check for Name, Email, Status, all checkbox inputs, all options in Favorite Programming Language, Proficiency, Most Fluent Language
                         * 필요한 모든 parameter가 전달 되었는지 아닌지를 검사하는 코드를 작성하시오
                         * Name, Email, Status, 모든 체크박스의 입력, Favorite Programming Language, Proficiency, Most Fluent Language의 모든 옵션 체크
                         */
                        // $name = $_POST["name"];
                        // $email = $_POST["email"];
                        // print $name . $email;
                        if( ! ( empty($_POST["name"]) || empty($_POST["email"]) || !isset($_POST["status"]) 
			|| !isset($_POST["interest"]) || !isset($_POST["programmingLanguage"]) || !isset($_POST["Proficiency"]) )  ) {
                            /* write a condition that validate the name parameter using Regular Expression
                             * - alphabet including white space where white space cannot repeat
                             * 정규 표현식을 사용하여 name parameter의 유효성을 검사하는 컨디션을 작성하시오
                             * - 알파벳 - 스페이스 포함 : 스페이스는 반복되면 안됨
                             */

                            ?>
                            <!-- if name is not valid, provide a error message as seen in the screenshot
                                 use heading level 2 & paragraph -->
                            <!-- 만약 이름이 유효하지 않다면 스크린샷과 같은 에러 메세지가 제공됨
                                 heading level 2 & paragraph 사용 -->

            <?php
                        // print $_POST["email"] . " " . $_POST["name"] . " " ;
                        // print_r($_POST["status"]);
                        // print $_POST["interest"] . " " . $_POST["programmingLanguage"] . " " . $_POST["Proficiency"] . " ";
                            if( !preg_match("/^[a-zA-Z]+[\s||\-]?[a-zA-Z]+$/" , $_POST["name"]) ) {
                ?>
                                <!-- if name is not valid, provide a error message as seen in the screenshot
                                     use heading level 2 & paragraph -->
                                <!-- 만약 이름이 유효하지 않다면 스크린샷과 같은 에러 메세지가 제공됨
                                     heading level 2 & paragraph 사용 -->
                            <h2>Input Error!</h2>
                            <p>You did not provide a valid name.<a href="selab.php">Try again?</a></p>

                <?php
                            /* write a condition that validate the email parameter using Regular Expression
                             * - any 1 or more combination of (alphabet, number, -, and _)
                             *   then exactly 1 @
                             *   then any 1 or more combination of (alphabet, number, -, and _)
                             *   then 1 to 2 of (exactly 1 . followed by any 1 or more combination of (alphabet, number))!
                             * 정규 표현식을 사용하여 email parameter의 유효성을 검사하는 컨디션을 작성하시오
                             * - (알파벳, 숫자, -, _) 중 1개 이상으로 이루어진 조합,
                             *   그 후에 @  1개,
                             *   그 후에 (알파벳, 숫자, -, _) 중 1개 이상으로 이루어진 조합,
                             *   그 후 (. 1개 후 (알파벳, 숫자) 중 1개 이상으로 이루어진 조함) 1에서 2개
                             */
                            } else if( !preg_match("(\w+\.)*\w+@(\w+\.)+[a-zA-Z]+", $_POST["email"]))  {
                ?>
                                <!-- if email is not valid, provide a error message as seen in the screenshot
                                     use heading level 2 & paragraph -->
                                <!-- 만약 이메일이 유효하지 않다면 스크린샷과 같은 에러 메세지가 제공됨
                                     heading level 2 & paragraph 사용 -->
                                     <h2>Input Error!</h2>
                                     <p>You didn't provide a valid email<a href="selab.php">Try again?</a></p>


                <?php
                            // write a condition that check if the file is uploaded successfully or not
                            // 파일이 성공적으로 업로드 되었는지 체크하는 컨디션을 작성하시오
                            } else if(isset($_POST["photo"])) {
                                    // move the uploaded photo to "member/photo" sub-directory with its original file name
                                    // 업로드된 포토를 "member/photo" 하위 디렉터리로 이동하며 파일이름은 원 파일이름 사용


                                    /* if all parameters were passed and there are no problem,
                                     * format the data as indicated in the `members.txt' and append the data at the end of `members.txt'
                                     * complete and use the 'processCheckbox' function that concatenates selected 'Interest Area' from the check-boxes into a single string
                                     * 모든 parameter가 전달 되었고 문제가 없다면,
                                     * 'member.txt'에 저장되어 있는 정보와 같은 포멧으로 데이터를 정리하고 이를 'member.txt'의 끝에 붙임
                                     * check box에서 선택된 'Interest Area'들을 단일 String으로 이어주는 processCheckbox 함수를 완성 및 사용하시오
                                     */


                            } else {
                ?>
                                <!-- if the file is not uploaded, provide a error message as seen in the screenshot
                                     use heading level 2 & paragraph -->
                                <!-- 만약 파일이 업로드되지 않았다면 스크린샷과 같은 에러 메세지가 제공됨
                                     heading level 2 & paragraph 사용 -->
                                     <h2>Input Error!</h2>
                                    <p>You didn't provide a valid photo<a href="selab.php">Try again?</a></p>

                <?php
                            }
                ?>
                <?php
                        } else {
                ?>
                            <!-- if any parameter is not passed in, provide a error message as seen in the screenshot
                                    use heading level 2 & paragraph -->
                            <!-- 만약 필요한 모든 parameter가 전달이 안되었다면 스크린샷과 같은 에러 메세지가 제공됨
                                 heading level 2 & paragraph 사용 -->
                            <h2>Input Error!</h2>
                            <p>You did not fill out the form completely. <a href="selab.php">Try again?</a></p>
                        <?php
                        print $_POST["email"] . " " . $_POST["name"] . " " ;
                        print_r($_POST["status"]);
                        print $_POST["interest"] . " " . $_POST["programmingLanguage"] . " " . $_POST["Proficiency"] . " ";
                        ?>
                <?php
                        }
                    }
                    // complete processCheckbox function that concatenates selected 'Interest Area' from the check-boxes into a single string
                    // check box에서 선택된 'Interest Area'들을 단일 String으로 이어주는 processCheckbox 함수를 완성하시오
                    function processCheckbox() {

                    }
                ?>

            </section>

            <section id="members">
                <h2>Members List</h2>
                <?php
                    // read members.txt file and display all registered members as shown in screenshot
                    // 'members.txt' 파일을 읽고 스크린샷에서 보이는 것과 같이 등록된 모든 멤버를 표시하시오
                    $members = file_get_contents("member/members.txt");
                    $members = explode(";",$members);
                ?>
                    <!-- display image of a member : set width = 70 pixels & height = 100 pixels -->
                    <!-- 멤버의 이미지 표시 : 가로 = 70 pixels & 높이 = 100 pixels 지정 -->

                    <!-- display name of a member -->
                    <!-- 멤버의 이름 표시 -->
                    <h3></h3>
                    <!-- display email, status, interests area, favorite programming language with proficiency, most fluent language of a member -->
                    <!-- 멤버의 이메일, 현황, 관심 분야, 좋아하는 프로그래밍 언어와 능력 수준, 가장 유창한 언어 표시 -->
                    <ul>
                        <li>Email: <?php print $members[1]?> </li> 
                        <li>Status: <?php print $members[2]?> </li> 
                        <li>Interests Area:  <?php print $members[3]?></li> 
                        <li>Favorite Programming Language : <?php print $members[4]?> </li> 
                        <li>Most Fluent Language :<?php print $members[7]?> </li> 
                    </ul>
                    <hr />
                <?php

                ?>
            </section>
        </article>
	</body>
</html>
