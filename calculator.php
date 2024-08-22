<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Form</title>
  </head>
  <body>
    <h1 class="display-3">Add two numbers</h1>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <form action="" method="POST" class="lead">
      <label for="firstnumber">Enter 1st Number: </label>
      <input type="number" id="num1" name="firstnumber" required />
      <br /><br />
      <label for="secondnumber">Enter 2nd Number: </label>
      <input type="number" id="num2" name="secondnumber" required />
      <br /><br />
      <!-- <input type="sumbit" value="Add:" name="operation" /> -->
      <button type="sumbit" class="btn btn-outline-success" name="add" id="add">+</button>
      <!-- <input type="sumbit" value="Sub:" name="operation" /> -->
      <button type="button" class="btn btn-outline-danger">-</button>
      <!-- <input type="sumbit" value="Mul:" name="operation" /> -->
      <button type="button" class="btn btn-outline-primary">*</button>
      <!-- <input type="sumbit" value="Div:" name="operation" /> -->
      <button type="button" class="btn btn-outline-secondary">/</button>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $n1=$_POST['firstnumber'];
      $n2=$_POST['secondnumber'];
      $add=$n1+$n2;
      echo"<h4>The result of the addition is $add </h4>";
    }
    ?>
  </body>
</html>
