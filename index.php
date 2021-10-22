<?php
    if (!empty($_GET)){
        foreach ($_GET as $key => $value){
            echo '<pre>';
            print_r($key.' - '.$value);
            echo '</pre>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>


<form action="">
    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="">
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" id="">
    </div>
    <div>
        <label>Email</label>
        <input type="email" name="email" id="">
    </div>
    <div>
        <label>Date of Birth</label>
        <input type="date" name="dateOfBirth" id="">
    </div>
    <div>
      <p><input type="radio" name="sex" value="female"> female</p>
      <p><input type="radio" name="sex" value="male"> male</p>
    </div>
    <div>
        <label>Favourite color</label>
        <input type="color" name="favouriteColor" id="">
    </div>

    <button>Submit</button>


</form>
  
</body>
</html>