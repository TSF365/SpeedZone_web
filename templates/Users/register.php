<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css">
</head>

<body>
  <div class="py-5" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12 justify-content-center d-flex flex-column align-items-center text-left">
          <form class="" style="">
            <div class="form-group"> <label class="text-capitalize text-left">Username</label> 
            <input type="text" class="form-control form-control-lg" placeholder="Enter Username" required="required"> </div>
            <div class="form-group" style=""> <label class="text-capitalize text-left">Email address</label> 
            <input type="email" class="form-control form-control-lg" placeholder="Enter email" required="required"> </div>
            <div class="form-group"> <label class="text-left">Password</label> 
            <input type="password" class="form-control form-control-lg bg-primary" placeholder="Password" required="required"> </div>
            <div class="form-group"> <label class="text-left">Confirm Password</label> 
            <input type="password" class="form-control form-control-lg bg-primary" placeholder="Confirm Password" required="required"> </div>
          </form>
          <?= $this->Form->submit(__('register'), ['class' => 'btn btn-secondary active btn-lg justify-content-center align-items-center text-center d-flex']); ?>
          <button type="submit" class="btn active btn-lg justify-content-center align-items-center text-center d-flex my-1 btn-info" data-target="index.html" style="">Login</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--<pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>-->
</body>

</html>