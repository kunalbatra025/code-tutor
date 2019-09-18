function check()
{
var question1=document.quiz.question1.value;
var question2=document.quiz.question2.value;
var question3=document.quiz.question3.value;
var question4=document.quiz.question4.value;
var question5=document.quiz.question5.value;
var question6=document.quiz.question6.value;
var question7=document.quiz.question7.value;
var question8=document.quiz.question8.value;
var question9=document.quiz.question9.value;
var question10=document.quiz.question9.value;

var correct=0;
if(question1=="Cascading Style Sheets")
{correct++;
}
if(question2=="static")
{
correct++;
}
if(question3=="style")
{
correct++;
}
if(question4=="div p")
{
correct++;
}
if(question5=="/*this is a comment*/")
{
correct++;
}
if(question6=="background-color")
{
correct++;
}
if(question7=="font-size")
{
correct++;
}
if(question8=="font-weight:bold;")
{
correct++;
}
if(question9=="margin-left")
{
correct++;
}
if(question10=="#demo")
{
correct++;
}

document.getElementById("after_submit").style.visibility="visible";
document.getElementById("number_correct").innerHTML="<h2>you got"+" "+correct+" "+"correct.</h2>";

}