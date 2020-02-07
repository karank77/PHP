<!DOCTYPE html>
<html>
<head>
	<title>input</title>

</head>
<body>
	<h1>Student Registration</h1>
	<form action="http://localhost/KARAN/student2.php" method="get">
		<b>Name:</b> <input type="text" name="name"><br>
		<b>Roll No:</b> <input type="text" name="roll_num"><br>
                <b>Branch:</b><br><input type="radio" name="Branch" value="Mech">Mech<br>
               <input type="radio" name="Branch" value="Civil">Civil<br>
               <input type="radio" name="Branch" value="CSE">CSE<br>
               <input type="radio" name="Branch" value="Production">Production<br>
               <input type="radio" name="Branch" value="Electronics">Electronics<br>
               <input type="radio" name="Branch" value="Chemical">Chemical<br>
               

               <b>Year :<select name="Year">
  			<option value="FE">FE</option>
  <option value="SE">SE</option>
  <option value="TE">TE</option>
  <option value="BE">BE</option>
  </select>
 <br><input type="submit" name="submit">
 </select>
	</form>
</body>
</html>
