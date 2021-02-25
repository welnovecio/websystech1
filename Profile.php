position: absolute;
  left: 4%;
}
#male1,#female1
{
  position: absolute;
  left: 9%;
}

#form1,#form2,#form3,#form4,#form5,#form6,#form7
{
position: absolute;
left: 5%;
}

#file1,#file2,#file3,#file4,#file5,#file6,#file7
{
  position: absolute;
left: 10%;
}

.button1 {
  background-color: #00FFFF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 90%;
  opacity: 0.9;
}

#resetbtn
{
padding: 14px 20px;
  background-color: blue;
}
#submitbtn
{
background-color: #00FFFF;
}
#resetbtn,#submitbtn {
  float: left;
  width: 23%;
}

#myfirstdiv
{
  border: 3px solid black;
  width: 500px;
  height:  650px;
  background-color:#b30047;
}
#myform
{
  position: relative;
  left: 10px;
  top: 10px;
}

#myform input[type=text]:focus, #myform input[type=email]:focus,#myform textarea:focus {
  background-color: #99ccff;
  outline: none;
}
.myinput
{
  
  height: 20px;
}

#mydepartment
{
  width: 150px;
height: 18px;
}
</style>

<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
<body>

  <div id="myfirstdiv"> 
<form action="submitpage.php" method="POST" id="myform">
<b>Name:</b><br><input class="myinput" type="text" name="wname" placeholder="Enter name"><br>
<b>Father's Name:</b><br><input class="myinput" type="text" name="faname" placeholder="Father's Name"><br>
<b>Mother's Name:</b><br><input class="myinput" type="text" name="maname" placeholder="Mother's Name"><br>
<b>Email:</b><br><input class="myinput" type="email" name="mail" placeholder="Enter Email"><br>
<b>Department:</b><br>
<select id="mydepartment" name="departments">
    <option value="IT">IT</option>
    <option value="EDUCATION">EDUCATION</option>
    <option value="NURSE">NURSING</option>
    <option value="CRIMINOLOGY">CRIMINOLOGY</option>
  </select><br><br>
  <b>Gender:</b> <br>
  <br>
  <input type="radio" id="male" name="gender" value="male">
<label id="male1" for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label id="female1" for="female">Female</label><br>
<br>

<label><b>Address:</b></label><br>
<textarea rows="4" cols="50" name="myaddress" placeholder="Enter Address here"></textarea><br><br>

<label><b>Language known:</b></label><br><br>
  <div id="mylangdiv">
    <label id="file1"  for="form1">English</label>
    <input id="form1" type="checkbox" name="lang[]" value="English"><br>
    <label id="file2"  for="form2">Visayan</label>
    <input id="form2" type="checkbox" name="lang[]" value="Visayan"><br>
    <label id="file3"  for="form3">Tagalog</label>
    <input id="form3" type="checkbox" name="lang[]" value="Tagalog"><br>
    <label id="file4"  for="form4">Hiligaynon</label>
    <input id="form4" type="checkbox" name="lang[]" value="Hiligaynon"><br>
    <label id="file5"  for="form5">Ilocano</label>
    <input id="form5" type="checkbox" name="lang[]" value="Ilocano"><br>
    <label id="file6"  for="form6">Bicolano</label>
    <input id="form6" type="checkbox" name="lang[]" value="Bicolano"><br>

    <label id="file7"  for="form7">Others</label>
    <input id="form7" type="checkbox" name="lang[]" value="Others">
    </div>
<br>

   <button id="submit" type="submit">Submit</button>
    <button id="reset" type="reset">Reset</button>

</form>

</body>
</html>