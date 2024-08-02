<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="ajax/ajax.js"></script>
</head>
<body>

<form class="row g-3 p-5" method="POST" id="user_form">
<div class="col-md-6">
    <label for="inputfristname" class="form-label">FRISTNAME</label>
    <input type="text" class="form-control" id="fname" name="fname">
  </div>
  <div class="col-md-6">
    <label for="inputlastname" class="form-label">LASTNAME</label>
    <input type="text" class="form-control" id="lname" name="lname">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">EMAIL</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

   <div class="col-12">
   <input type="hidden"  value="1" name="type">
    <button type="submit" id="btn_add" class="btn btn-primary">Sign in</button>
  </div>
</form>


</body>
</html>