<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Code tutor quiz</title>
<link href="style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Late" rel="stylesheet">
<script src="main.js"></script>
</head>
<body>
<h1 style="font-family:verdena;">HTML QUIZ</h1>
<form id="quiz" name="quiz">
<h2>Ques1. What does HTML stand for?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question1" value="Home Tool Markup Language">Home Tool Markup Language<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question1" value="Hyper Text Markup Language">Hyper Text Markup Language<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question1" value="Hyperlinks and Text Markup Language">Hyperlinks and Text Markup Language<br></p>
<h2>Ques2. Who is making the Web standards?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question2" value="Microsoft">Microsoft<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question2" value="Google">Google<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question2" value="World Wide Web Consortium">World Wide Web Consortium<br></p>
<h2>Ques3. Choose the correct HTML element for the largest heading:</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question3" value="head">head<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question3" value="h6">h6<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question3" value="h1">h1<br></p>
<h2>Ques4. What is the correct HTML element for inserting a line break?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question4" value="br">br<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question4" value="lb">lb<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question4" value="ub"> ub<br></p>
<h2>Ques5. Choose the correct HTML element to define emphasized text</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question5" value="italic">italic<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question5" value="em">em<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question5" value="i">i<br></p>
<h2>Ques6. Which character is used to indicate an end tag?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question6" value="<"><<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question6" value=">">><br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question6" value="/">/<br></p>
<h2>Ques7.How can you make a numbered list?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question7" value="ul">ul<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question7" value="ol">ol<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question7" value="li">li<br></p>
<h2>Ques8.Which HTML element defines the title of a document?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question8" value="html">html<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question8" value="meta">meta<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question8" value="title">title<br></p>
<h2>Ques9. Which HTML attribute specifies an alternate text for an image, if the image cannot be displayed?</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question9" value="src">src<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question9" value="alt">alt<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question9" value="img">img<br></p>
<h2>Ques10. Inline elements are normally displayed without starting a new line.</h2>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question10" value="true">true<br></p>
<p style="font-size: 130%;"><input type="radio" id="mc" name="question10" value="false">false<br></p>
<style type="text/css">
    	#button
    	{
    		font-size: 23px;
    		padding: 15px 32px;
    		margin: 4px 2px;
    		cursor: pointer;
    		text-align: center;
    	}
    </style>



<input id="button" type="button" value="I'm finished!" onclick="check();">
</form>
<div id="after_submit">
<p id="number_correct"></p>
</div>
<?php
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$correct=$_REQUEST['number_correct'];
//$correct=5;
include("connection.php");
$query="update students set marks='$correct' where studentname='$username' and password='$password'";
mysql_query($query)or die(mysql_error());
?>

</body>
</html>
