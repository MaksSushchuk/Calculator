<?php
use Calculator\Calculator;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<style>
  .container{
    width: 700px;
    min-height: 450px;
    margin-top: 200px;
    padding: 40px ;
    border: solid 1px black;
  }
  .container button{
    display:block;
    margin: 70px auto;
  }

  .amount{
    text-align: center;

  }

</style>
<div class="container">
  <form action="" method ="POST">
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Package weight</label>
      <input type="number" value = "<?=$_POST['weight']?>"name = 'weight'class="form-control" id="exampleFormControlInput1" placeholder="enter the weight in kilograms">
    </div>
    <div class="form-check">
      <input class="form-check-input" name = 'Company' type="radio" value ="TransCompany" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
      TransCompany
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input"  name = 'Company' type="radio" value ="PackGroup" id="flexRadioDefault2" >
      <label class="form-check-label" for="flexRadioDefault2">
      PackGroup
      </label>
    </div>
    
    <button type="submit" class="btn btn-primary">calculate price</button>
    <h3 class = 'amount'><?=Calculator::Calc($_POST['Company'],$_POST['weight'])?></h3>
  </form>
</div>


</body>
</html>