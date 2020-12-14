<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row">
          @if($error)
          <div class="col-lg-8  col-sm-11 my-2 mx-auto" style="background-color:rgba(252,84,2); ">
                  <p class="my-2">Some Thing Is Wrong</p>
          </div>
          @endif
          <div class="col-lg-8 col-sm-11 mx-auto my-5 border">
            <h2 class="text-center">Login Form</h2>
           <!--  <p class="text-center">1344-B SrinathPuram Kota,Rajasthan<br>9798314321</p> -->
            <div class="my-2" style="width: 100%;height: 1px; background-color: black"></div>
                <!--      <h5 class="text-center"><u>Farmer Details Form</u></h5> -->
                <form method="post" action="/kubermilky/login">
                  @csrf
                    <div class="row">
                        <div class="col-lg-7 col-sm-12 mx-auto my-2">
                           <label>Working Role<span class="text-danger">*</span></label>
                          <select name="work_role" class="form-control">
                            <option value="">--* Select One *--</option>
                            <option value="plant">Plant</option>
                            <option value="bmc">BMC</option>
                            <option value="society">Society</option>
                            <option value="farmer">Farmer</option>
                            <option value="staff">Staff</option>
                           <!--  <option value="vi">Plant</option> -->
                          </select>
                        </div>
                        <div class="col-lg-7 col-sm-12 mx-auto my-2">
                           <label>User ID<span class="text-danger">*</span></label>
                          <input type="text" name="userid" class="form-control" value="" placeholder="Enter User ID" id="userid" required="">
                        </div>
                        <div class="col-lg-7 col-sm-12 mx-auto my-2">
                            <label>Password<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" id="password" required="">
                        </div>
                        <div class="col-12  my-2">
                            <div class="row">
                                <div class="col-3 mx-auto">
                                    <button class="btn btn-primary" style="width: 100%" name="login">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
     <script type="text/javascript">
        $(document).ready(function () {

           $(document).on('keyup','#userid',function(){
                     var regex = new RegExp("^[a-z0-9]+$");
                     var v2=$(this).val();
                     if(!regex.test(v2))
                     { 
                        $(this).val("");
                       alert('Please Enter Alfabetic');

                     }
                   });       
        });
    </script>
    
  </body>
</html>