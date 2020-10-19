<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <title>ADMIN | KANN DESIGNS INDIA </title>
        <!--*****BOOTSTRAP*****-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <!--*****LOGIN*****-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h4 class="card-title text-center">ADMIN | KANN DESIGNS</h4>
                            <h5 class="card-title text-center">Login</h5>
                            <form action="<?php echo base_url('login/'); ?>" method="post">
                            <div class="form-label-group">
                                <input type="text" id="email" name="user" class="form-control" placeholder="Username" required autofocus>
                                <label for="inputEmail">Username</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="remember" name='remember'>
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
