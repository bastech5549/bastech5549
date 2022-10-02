<!DOCTYPE html>
<html>
<head>
<title>Utharith</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 25px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 5px;
}

button {
  background-color: #808080;
  color: white;
  padding: 18px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
   border-radius: 5px;
}

button1 {
  background-color: #000;
  color: white;
  padding: 18px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #d81e1f;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}



.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<style>
.button {
  background-color: #000;;
  border: none;
  color: white;
   padding: 14px 20%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.div2 {
  width: 75%;
  height: 180px;  
  padding: 5px;
  border: 1px solid red;
	margin: auto;
}
</style>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #f8f9fa ;
   color: white;
   text-align: center;
}
	
	:root {
  --radius: 2px;
  --baseFg: dimgray;
  --baseBg: white;
  --accentFg: #006fc2;
  --accentBg: #bae1ff;
}

.theme-pink {
  --radius: 2em;
  --baseFg: #c70062;
  --baseBg: #ffe3f1;
  --accentFg: #c70062;
  --accentBg: #ffaad4;
}

.theme-construction {
  --radius: 0;
  --baseFg: white;
  --baseBg: black;
  --accentFg: black;
  --accentBg: orange;
}

select {
  font: 500 18px/1.8 sans-serif;
  -webkit-appearance: none;
  appearance: none;
  color: var(--baseFg);
  border: 1px solid var(--baseFg);
  line-height: 1;
  outline: 0;
  padding: 0.65em 2.5em 0.55em 0.75em;
  border-radius: var(--radius);
  background-color: var(--baseBg);
  background-image: linear-gradient(var(--baseFg), var(--baseFg)),
    linear-gradient(-135deg, transparent 50%, var(--accentBg) 50%),
    linear-gradient(-225deg, transparent 50%, var(--accentBg) 50%),
    linear-gradient(var(--accentBg) 42%, var(--accentFg) 42%);
  background-repeat: no-repeat, no-repeat, no-repeat, no-repeat;
  background-size: 1px 100%, 20px 22px, 20px 22px, 20px 100%;
  background-position: right 20px center, right bottom, right bottom, right bottom;   
}

select:hover {
  background-image: linear-gradient(var(--accentFg), var(--accentFg)),
    linear-gradient(-135deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(-225deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(var(--accentFg) 42%, var(--accentBg) 42%);
}

select:active {
  background-image: linear-gradient(var(--accentFg), var(--accentFg)),
    linear-gradient(-135deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(-225deg, transparent 50%, var(--accentFg) 50%),
    linear-gradient(var(--accentFg) 42%, var(--accentBg) 42%);
  color: var(--accentBg);
  border-color: var(--accentFg);
  background-color: var(--accentFg);
}

img {
  border-radius: 10%;
}
</style>
</head>

<body>
<br>


<br>
<br>
<br>

  <div class="imgcontainer">
    <img src="Picsart_22-09-14_11-06-05-464.png"  alt="Utharith" width="60%" >
  </div>
  
 <div align="center"><p><h5>Login In To Access :
</h5>

	
	
	 </p>

</div>

<form method="post" action="signin_form.php" enctype="multipart/form-data"  >
  <div class="container">
   
     
     
   	    <div align="center">
			
	
	
	
	 <input    type="text" name="email" required="required" placeholder="Enter MIS No">
	 <input    type="password" name="password" required="required" placeholder="Enter  Password">
	
          			
   
   <button type="submit" name="submit" >Login</button>
   
   <a class="button" href="signup.php">Sign Up</a>
   
   
    </form>
  
  </div>
  <br>
<br>
<br>
<br>
<br>
<div class="footer">
  <p><font color="#6c757d ">© Copyright  ATGUY</font></p>
</div>



</body>
</html>










