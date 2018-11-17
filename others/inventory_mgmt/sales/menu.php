<style>
nav {
	width:95%;
	margin:auto;
}

nav ul{
	width:95%;
}
nav a:link {
	text-decoration: underline;
	color:#fff;
	text-decoration:none;	
}

nav a:visited {
	text-decoration: none;
	color:#fff;
}

nav a:focus {
	text-decoration: none;
	color:#fff !important;
}

nav a:active {
	text-decoration: underline;
	color:#fff;
}

nav ul ul{
	display: none;
	list-style:none; 
	padding:0;
	color:#fff;
	width:170px;
}

nav ul li:hover > ul {
	display:block;
	border:0px solid #444; 
	text-align:left;  
	padding-left:5px;
	padding-right:5px; 
	/*border-radius:10px;*/
	line-height:5px; 
}

nav ul {
	background-color:#004000;
	background-image:linear-gradient(#004000, #008000, #004000);
	background-image:-moz-linear-gradient(#004000, #008000, #004000);
	background-image:-webkit-linear-gradient(#004000, #008000, #004000);
	color:#FFF;
	box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
	padding: 0 5px;
	/*border-radius: 10px;*/  
	list-style: none;
	position: relative;
	display: inline-table;
	font-family:Verdana, Geneva, sans-serif;
}

nav ul:after {
	content: ""; 
	clear: both; 
	display: block;
}

nav ul li {
	float: left;
	background-color:#004000;
	background-image:linear-gradient(#004000, #008000, #004000);
	background-image:-moz-linear-gradient(#004000, #008000, #004000);
	background-image:-webkit-linear-gradient(#004000, #008000, #004000);
}

nav ul li:hover {
	/*background-color:#390;*/
	background: #4b545f;
	background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
	background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
	background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
}

nav ul li:hover a {
	color: #fff;
	text-decoration:none;
}

nav ul li a {
	display: block; 
	padding: 10px 10px;
	color: #fff; 
	text-decoration: none;
}
			
nav ul ul {
	background: #5f6975; 
	border-radius: 0px; 
	padding: 0;
	position: absolute; 
	top: 100%;
}

nav ul ul li {
	float: none; 
	border-top: 1px solid #6b727c;
	border-bottom: 1px solid #575f6a; 
	position: relative;
}

nav ul ul li a {
	padding: 15px 10px;
	color: #fff;
	width:150px;
}	

nav ul ul li a:hover {
	background-color:#390;
}
		
nav ul ul ul {
	position: absolute; 
	left: 100%; 
	top:0;
}
</style>
<nav>
	<ul>
	  <li><a href="index.php">Home</a></li>
      <li><a href="settings.php">Account Settings</a></li>
      <li><a href="report.php">View Report</a></li>
        
<li><a href="../logout.php">Logout</a></li>
    </ul>
	