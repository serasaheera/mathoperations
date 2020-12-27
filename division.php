<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Web</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.html">Addition</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="subtraction.html">Subtraction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="multiplication.html">Multiplication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="division.html">Division</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<body>
    <br>
    <table class="table table-borderless">
      <tr>
          <td>Number1</td>
          <td> <input id="num1" class="form-control" type="text"></td>
      </tr>
      <tr>
          <td>Number2</td>
          <td><input id="num2" class="form-control" type="text"></td>
      </tr>
      <tr>
          <td></td>
          <td> <Button onclick="addition()" class="btn btn-danger">Divide</Button></td>
      </tr>

     <tr>
         <td>Result</td>
         <td>       <p id="result">   </p></td>
     </tr>





    </table>
    
</body>
<script>


    function addition(){
     
        var getNum1=parseInt(document.getElementById("num1").value)
        var getNum2=parseInt(document.getElementById("num2").value)

        var res=getNum1/getNum2

        document.getElementById("result").innerHTML=res

        console.log(res)
        
        
    }

</script>
</html>