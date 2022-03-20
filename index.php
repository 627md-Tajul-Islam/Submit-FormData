<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
body {
  background-color: linen;
}
input[type=text],[type=text], select { 
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>
<body>

<form action="form.php" method="post" align="center">

    <input type="text" name="name" placeholder="Name">
    <br>
    <input type="text" name="roll" placeholder="Roll">
    <br>
    <input type="text" name="shift" placeholder="Shift">
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>