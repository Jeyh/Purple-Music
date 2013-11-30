<?php header("Content-type: text/css; charset=UTF-8");

 ?>

h2 {
    border-style: solid;
    border-width: 5px;
    /*border-left-width: 5px;
    border-right-width: 5px;*/
    border-color: purple;
	font-family: Brush Script Std;
	font-size : 2.5em;
	text-align: Center	;
	margin: 15px;
	margin-bottom: 10px;
	padding : 30px;
}

h3 {
    border-style: solid;
	border-width: 0px;
	border-bottom-width : 2px;
	font-family : Calibri;
	font-size : 1.5em;
	text-align: Center;
	line-height: 2;
	margin-top: 10px;
	margin-bottom: 70px;
	padding-bottom : 30px;
	padding-top : 20px;
}

h4 {
	font-family : Calibri;
	font-size : 1.2em;
	text-align: Center;
}

h5 {
	font-family : Calibri;
	font-size : 1em;
	text-align: Center;
}

body {
	background-color: black;
	/*background : url(./Guitare.jpg);*/
	background-attachment : fixed;
    color: white;
	font-size : 18px;
}

p{
    letter-spacing: 0.25em;
    word-spacing: 0.25em;
    line-height: 1;
	font-family : Calibri;
	font-size : 1em;
	text-align: Center;
}

a {
	text-decoration: none;
	color : white;
}

a:hover {
	
	color :  grey;
}

#Btn
{	
	width : 140px;
	height: 130px;
	float:left;
	/*margin: 1%;*/
	margin:2.5%;
	margin-top:0px;
	

	/*background-image : url("Listgp1.jpg");*/
	
}

#Btn :hover
{
	width : 160px;
	height: 149px;
	float:left;
	
}



#entete
{
	
	float: center;
	width : 100%;
	height : 300px;
}

#piedpage
{
	float: bottom;
	font-family: Calibri;
	font-size : 1em;
	text-align: center;
	margin-top: 10%;
	
	
	
	border-style: solid;
	border-width: 0px;
	border-top-width : 2px;
	
}

#contenuliste
{

	font-family: Calibri;
	font-size : 1em;
	text-align: center;
}

#contenupref
{

	font-family: Calibri;
	font-size : 1em;
	text-align: center;
	width: 100%;

}

#NbAlbums
{
	
	background: linear-gradient(to left, grey , black );
	float: center;
	border: 2px solid #fff;
	padding: 20px;
	margin-left: 50%;
	margin-right:10%;
    border-radius: 10px;
	font-family : Calibri;
	text-align:center ;
}
/*.notation
{

	include 'pref.php';

font-family : Calibri;
background-color : red;
height : 30px;
width : "echo 20*$note."px"; ";

 /*background-image: url("./Img/Btn/etoiles.pgn")*/
