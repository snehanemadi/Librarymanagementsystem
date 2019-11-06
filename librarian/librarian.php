<html>
	<head>
	<script>

function func1(){
window.alert("Reservation has been placed!");
}
function func2(){
window.alert("Request has been placed!");
}
</script>
<style>
			p{
				font-family: 'Caveat', cursive;
				font-size: 28px;
				color: black;
				margin-top: -45px;
				color: 	#800000;
				
			}
			body{
				
				background: linear-gradient(rgba(0, 0, 50, 0.1), rgba(0, 0, 50, 0.1)), url(h3.jpg);
				background-size: cover;
				background-position: center;
				
				}	
		

			.headd{
				margin-top: -48px;
				font-family: 'Kaushan Script', cursive;
				
				font-size: 46px; !important;
				color: #4b0082;
			}
			ul {
				font-family: 'Arvo', serif;
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #800000;
			}

			li {
				float: left;
			}

			li a {
				display: block;
				color: white;
				text-align: center;
				padding: 6px 16px;
				text-decoration: none;
				}

/* Change the link color to #111 (black) on hover */
			li a:hover {
			background-color: #DAA520;
			}
			.active {
				background-color: #4CAF50;
			}
			.btn-group button {
			font-family: 'Arvo', serif;
    background-color: 	#3e8e41; /* Green background */
    border: 1px solid green; /* Green border */
    color: white; /* White text */
    padding: 15px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: center; /* Float the buttons side by side */
	border-radius: 50%;
	font-size: 20px;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: #3CB371;
}
button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
} 

.newspaper {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
    -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
    -webkit-column-rule: 1px solid lightblue; /* Chrome, Safari, Opera */
    -moz-column-rule: 1px solid lightblue; /* Firefox */
    column-rule: 1px solid lightblue;
}
.body {
    font-family: Arial;
    padding: 10px;
    background-image: url("img1.jpg");
	//background: white;
	background-repeat: repeat;
    font-family: Arial;
    padding: 5px;
}

	</style>
	</head>

<body class ="body">
<a href="logout.php"><i class="fa fa-arrow-left"></i> logout</a>
<div class="newspaper">
<pre>
<div style="padding-left:200px">
<form action="contribute.php" method="post">
	<button type="submit" class="btn btn-primary" style="button"> Contribute</button>
</form>
</div>


<div style="padding-left:200px">
<form action="borrow1/choice1.php" method="post">	
	<button type="submit" class="btn btn-primary" style="button"> Borrow</button>	
</form>
</div>
</div>


<div class="newspaper">
<pre>
<div style="padding-left:200px;padding-top:100px">
<form action="renew1/choice1.php" method="post">
	<button type="submit" class="btn btn-primary" style="button"> Renew</button>
</form>
</div>


<div style="padding-left:200px;padding-top:100px">
<form action="return1/choice1.php" method="post">
<button type="submit" class="btn btn-primary" style="button">Return</button>	
</form>
</div>
</div>

<pre>
<div style="padding-left:300px;float:center">
			<form action="finepay.php" method="post">
			
				<button type="submit" class="btn btn-primary" style="button"> Pay Fine </button>
				
			</form>
			
</div>

<div>

</body>
</html>