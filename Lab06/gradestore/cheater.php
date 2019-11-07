<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Grade Store</title>
		<link href="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/labResources/gradestore.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		
		<?php
		# Ex 4 : 
		# Check the existence of each parameter using the PHP function 'isset'.
		# Check the blankness of an element in $_POST by comparing it to the empty string.
		# (can also use the element itself as a Boolean test!)
		 if (false){
			// if(empty($_POST["name"]) || empty($_POST["id"]) || !isset($_POST["creditCard"]) 
			// || !isset($_POST["cc"]) || !isset($_POST["course"]) ) { ?>
			<h1>Sorry</h1>
			<p>You didn't fill out the form completely. <a href="./gradestore.html">Try again?</a></p>
			<?php 
		?>
				<!-- Ex 4 : 
					Display the below error message : 
					<h1>Sorry</h1>
					<p>You didn't fill out the form completely. Try again?</p>
				--> 
		<?php
		# Ex 5 : 
		# Check if the name is composed of alphabets, dash(-), or a single white space.
		# 알파벳 /[a-zA-Z] 으로 표현가능
		# -  \- 로 처리해야 한다.
		# 싱글 스페이스로 구성되었는지 체크하기. \s인데.. 이건 하나만 어떻게 처리하늬 ?로 처리 \s?
		# test case : 통과 : a martin, a-martin, -martin, mar-tin a, 
		# 통과X : a  martin, -  martin, 231martin, 231-martin
 		#
			 } elseif( false ) { 
				echo $_POST['name']; 
			 ?>
				<h1>Sorry</h1>
				<p>You didn't provide a valid name. <a href="./gradestore.html">Try again?</a></p>
			 
			 <?php } elseif( !( preg_match("/d{16}/", $_POST["creditCard"] )) && !isset($_POST["cc"]) ) { 
				 if( $_POST["cc"] == "visa" && (!preg_match("/^4\d{15}/", $_POST["creditCard"]) ) ) { 
			echo $_POST["creditCard"];
		 ?>
		 <h1>Sorry</h1>
		 <p>You didn't provide a valid Visa credit card number. <a href="./gradestore.html">Try again?</a></p>
		<!-- Ex 5 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't provide a valid name. Try again?</p>
			test : 1234567891234567
		--> 

		<?php
		# Ex 5 : 
		# Check if the credit card number is composed of exactly 16 digits.
		# Check if the Visa card starts with 4 and MasterCard starts with 5. 
		# } elseif () {
		?>

		<!-- Ex 5 : 
			Display the below error message : 
			<h1>Sorry</h1>
			<p>You didn't provide a valid credit card number. Try again?</p>
		--> 

		<?php
		# if all the validation and check are passed 
		 } elseif ( $_POST["cc"] =="master" && (!preg_match("/\[5]{1}\d{15}/", $_POST["crediCard"])) ) { 
			echo $_POST["creditCard"];
		?>
		 	<h1>Sorry</h1>
		 	<p>You didn't provide a valid Master credit card number. <a href="./gradestore.html">Try again?</a></p>
		 
		 <?php }  ?>
		 <h1> Sorry </h1>
		 <p>You didn't provide a valid credit card number and choosed any credit card. </p>
		 <?php } else { ?>

		<h1>Thanks, looser!</h1>
		<p>Your information has been recorded.</p>
		
		<!-- Ex 2: display submitted data -->
		<ul> 
			<li>Name:<?php $name = $_POST["name"]; print "$name"?> </li>
			<li>ID: <?php $id = $_POST["id"]; print "$id"?></li>
			<!-- use the 'processCheckbox' function to display selected courses -->
			<?php $checkcourses = ""; 
			$checkcourses = processCheckbox($checkcourses);
			?>
			<li>Course: <?php print "$checkcourses"?></li>
			<li>Grade: <?php $Grade = $_POST["Grade"]; print "$Grade"?></li>
			<li>Credit 
				<?php $creditCard = $_POST["creditCard"]; 
				$cc = $_POST["cc"]; print "$creditCard ($cc)"?> </li>
		</ul>
		
		<!-- Ex 3 : -->
			<p>Here are all the loosers who have submitted here:</p> 
		<?php
			$filename = "loosers.txt";
			$current .= "$name;";
			$current .= "$id;";
			$current .= "$creditCard;";
			$current .= "$cc";
			$current .= "\n";
			file_put_contents($filename, $current ,FILE_APPEND);
			/* Ex 3: 
			 * Save the submitted data to the file 'loosers.txt' in the format of : "name;id;cardnumber;cardtype".
			 * For example, "Scott Lee;20110115238;4300523877775238;visa"
			 */
		?>
		
		<!-- Ex 3: Show the complete contents of "loosers.txt".
			 Place the file contents into an HTML <pre> element to preserve whitespace -->
			<pre><?php echo file_get_contents($filename);?></pre>

		<?php
		 }
		?>
		
		<?php
			/* Ex 2: 
			 * Assume that the argument to this function is array of names for the checkboxes ("cse326", "cse107", "cse603", "cin870")
			 * 
			 * The function checks whether the checkbox is selected or not and 
			 * collects all the selected checkboxes into a single string with comma separation.
			 * For example, "cse326, cse603, cin870"
			 */
			function processCheckbox($names){ 
				$courses = $_POST['course'];
				if(empty($courses)) {
					// echo ("you didn't select any coures");
				} else {
					$N = count($courses);
					// echo("you selected $N course(s): ");
					for($i = 0; $i < $N - 1; $i++) {
						$names .= $courses[$i] .", " ;
					}
					$names .= $courses[$N-1];
				}
				return $names;
			}
			// $courses = $_POST['course'];
			// 	if(empty($courses)) {
			// 		echo ("you didn't select any coures");
			// 	} else {
			// 		$N = count($courses);
			// 		echo("you selected $N course(s): ");
			// 		for($i = 0; $i < $N ; $i++) {
			// 			echo($courses[$i] . " ");
			// 		}
			// 	}
		?>
		
	</body>
</html>