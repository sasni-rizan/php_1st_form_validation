<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
     <style>
        .error {
            color: red;
            font-size: 14px;
            margin-left: 10px;
        }
        input, textarea, select {
            margin-bottom: 5px;
        }
    </style>

  
</head>
<body>



<?php
$fullname=$email=$contactno=$DOB=$position=$skils=$resume=$coverletter=$linkdinpr=$workingex="";
$fullnameerr=$emailerr=$contactnoerr=$DOBerr=$positionerr=$skilserr=$resumeerr=$coverlettererr=$linkdinprerr=$workingexerr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fullname"])) {
    $fullnameerr = "Name is required";
  } else {
    $fullname = test_input($_POST["fullname"]);
  }
  
  if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["contactno"])) {
    $contactnoerr = "Contact number is required";
  } else {
    $contactno = test_input($_POST["contactno"]);
  }
  
  if (empty($_POST["DOB"])) {
    $DOBerr = "Date of Birth is required";
  } else {
    $DOB = test_input($_POST["DOB"]);
  }
  
  if (empty($_POST["position"])) {
    $positionerr = "Position is required";
  } else {
    $position = test_input($_POST["position"]);
  }
  
  if (empty($_POST["resume"])) {
    $resumeerr = "Resume is required";
  } else {
    $resume = test_input($_POST["resume"]);
  }
  
  if (empty($_POST["coverletter"])) {
    $coverlettererr = "Cover letter is required";
  } else {
    $coverletter = test_input($_POST["coverletter"]);
  }
  
  
  if (empty($_POST["Linkedinpr"])) {
    $linkdinprerr = "LinkedIn profile is required";
  } else {
    $linkdinpr = test_input($_POST["Linkedinpr"]);
  }
  
  if (empty($_POST["workingex"])) {
    $workingexerr = "Work experience is required";
  } else {
    $workingex = test_input($_POST["workingex"]);
  }
  
  if (empty($_POST["skils"])) {
    $skilserr = "Skills are required";
  } else {
    $skils = test_input($_POST["skils"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h1>Job Application</h1> <br>

   Full Name <br> <input type="text" name="fullname"> <br>
        <span class="error"><?php echo $fullnameerr; ?></span> <br>

    Email <br> <input type="text" name="email"><br><br>
    <span class="error"><?php echo $emailerr; ?></span> <br>

    Contact Number <br> <input type="number" name="contactno"><br><br>
    <span class="error"><?php echo $contactnoerr; ?></span> <br>

    Date Of Bath <br> <input type="date" name="DOB"><br><br>
    <span class="error"><?php echo $DOBerr; ?></span> <br>
    

    <label for="position">Position Applied For:</label> <br>
    
  <select name="position" id="position">
    <option value="Software Developer">Software Developer</option>
    <option value="Web Designer">Web Designer</option>
    <option value="Project Manager">Project Manager</option>
  </select>
<span class="error"><?php echo $positionerr; ?></span> <br>
<br><br>
    Uplode Your Resume <br> <input type="file" name="resume"><br><br>
    <span class="error"><?php echo $resumeerr; ?></span> <br>
    Cover Letter <br> <textarea name="coverletter" id=""></textarea><br><br>
    <span class="error"><?php echo $contactnoerr; ?></span> <br>
    LinkedIn Profile <br> <input type="text" name="Linkedinpr"><br><br>
    <span class="error"><?php echo $linkdinprerr; ?></span> <br>
    Work Experience (Number of Years) <br> <input type="number" name="workingex"><br> <br>
    <span class="error"><?php echo $workingexerr; ?></span> <br>
    skils:
    <ul>  

      <li><input type="checkbox" name="skils" value="HTML">HTML</li>
      <li><input type="checkbox" name="skils" value="CSS">CSS</li>
      <li><input type="checkbox" name="skils" value="VAJA SCRIPT">JAVA SCRIPT</li>
      <li><input type="checkbox" name="skils" value="PHP">PHP</li>
      <li><input type="checkbox" name="skils" value="JAVA">JAVA</li>

    </ul>
     <style>
        ul
        {list-style-type:none;}
      </style>
<br> <br>
<span class="error"><?php echo $skilserr; ?></span> <br>
<input type="submit">
  </form>



  <?php
echo "<h2>Your Input:</h2>";
echo $fullname;
echo "<br>";
echo $email;
echo "<br>";
echo $contactno;
echo "<br>";
echo $DOB;
echo "<br>";
echo $position;
echo $resume;
echo "<br>";
echo $coverletter;
echo "<br>";
echo $linkdinpr;
echo "<br>";
echo $workingex;
echo $skils;
?>



</body>
</html>