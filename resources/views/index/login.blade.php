<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
  </head>
  <body style="background-color: #abcdef">
    <section>
      <div class="container" >
        <div class="row" >
         
          <div class="col-lg-8 col-sm-11 mx-auto my-5 border" style=" box-shadow: 5px 10px #888888;background-color: rgb(230,230,230);border-radius: 5px;">
            <h2 class="text-center">Login Form</h2>
           <!--  <p class="text-center">1344-B SrinathPuram Kota,Rajasthan<br>9798314321</p> -->
            <hr>
                <!--      <h5 class="text-center"><u>Farmer Details Form</u></h5> -->

                @if($error)
                    <div class="col-lg-8  col-sm-11 my-2 mx-auto text-center">
                            <p class="my-2" style="color: red"><strong>{{$error}}</strong></p>
                    </div>
                @endif
                <form method="post" action="/kubermilky/login">
                  @csrf
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 mx-auto my-2">
                           <label>User ID<span class="text-danger">*</span></label>
                          <input type="text" name="userid" class="form-control" value="" placeholder="Enter User ID" required="" maxlength="10">
                        </div>
                        <div class="col-lg-7 col-sm-12 mx-auto my-2">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password"  required="">
                        </div>
                        <div class="col-7 my-2 mx-auto">
                            <div class="row">
                                <div class="col-3 ">
                                    <button class="btn btn-primary" style="width: 100%" name="login">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                  <div class="col-lg-7 col-sm-12 mx-auto my-2 text-right">
                    <p><strong ><a href="#" style="color: red">Forget Password</a></strong></p>
                  </div>
                  <div class="col-lg-7 col-sm-12 mx-auto my-2 text-center">
                    <p><strong ><a href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i> HOME</a></strong></p>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>