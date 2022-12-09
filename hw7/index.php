<html>
<head>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<title>4 Function Calculator</title>
</head>
	<body> 
		<div class="container-fluid">
            <div class="jumbotron text-center">
				<h2>4 Function calculator</h2>
			</div>
		</div>
		<form class="form-inline">
		  <div class="form-group">
			<label for="number1">Number 1:</label>
			<input type="text" class="form-control" id="number1">
		  </div>
		  <select class="form-control" id="funcOperator">
		  	<option>+</option>
		    <option>-</option>
			<option>*</option>
			<option>/</option>
		  </select>
		  <div class="form-group">
			<label for="number2">Number 2:</label>
			<input type="text" class="form-control" id="number2">
		  </div>
		  <button type="button" class="btn btn-success" id="submit">Submit</button>
		  <h3 id="output"></h3>
		</form>
	</body>
</html>
<script type="text/javascript">

function calcfunc(){
var	num1=document.getElementById('number1').value;
var	num2=document.getElementById('number2').value;
var	funcOp=document.getElementById('funcOperator').value;
var result;
	switch(funcOp){
		case "+":
			result=parseInt(num1)+parseInt(num2);
			document.getElementById('output').innerHTML="Result: "+result;
			break;
		case "-":
			result=parseInt(num1)-parseInt(num2);
			document.getElementById('output').innerHTML="Result: "+result;
			break;
		case "*":
			result=parseInt(num1)*parseInt(num2);
			document.getElementById('output').innerHTML="Result: "+result;
			break;	
		case "/":
			result=parseInt(num1)/parseInt(num2);
			document.getElementById('output').innerHTML="Result: "+result;
			break;
	}
}
document.getElementById('submit').addEventListener('click', calcfunc);
</script>