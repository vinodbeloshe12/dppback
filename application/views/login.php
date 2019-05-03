<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Wohlig">
    <?php   $ProjectTitle = $this->menu_model->getProjectTitle(); 	  ?>
    <title><?php echo $ProjectTitle->name ?></title>
    <link rel="shortcut icon" href="<?php echo base_url('assets').'/';?>img/favicon.png" type="image/png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

    <style>
        body {
            background-image: url('<?php echo base_url('assets/img/background.jpg'); ?>');
            background-position: top center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        /* label focus color */
        
        a,
        .input-field input[type=email]:focus:not([readonly]) + label,
        .input-field input[type=password]:focus:not([readonly]) + label {
            color: #546e7a;
        }
        /* label underline focus color */
        
        .input-field input[type=email]:focus:not([readonly]),
        .input-field input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #e53935;
            box-shadow: 0 1px 0 0 #e53935;
        }
        
        .padding-top {
            padding-top: 10%;
        }
        @media only screen and (max-width: 1050px) {
            body {
                    background-position: top center;
                    background-size: auto;
            }
        }
    </style>

    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="padding-top">
<!--
        <div style="text-align:center; color: #fff; font-size: 38px">
            <span>Business</span><span style="color:#f13232">App</span>
        </div>
-->

        <div class="row">
            <form class="col s12 offset-s0 m6 offset-m3 l4 offset-l4" method="post" action="<?php echo site_url('login/validate') ;?>">
                <div class="card">

                    <!--
                  
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								<input type="text" class="form-control" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 text-left checkbox">
							</div>
							<div class="col-xs-4">
								<div class="form-group text-right">
								<button class="btn btn-success text-uppercase" type="submit">Sign In</button>
								</div>
							</div>
						</div>
					
-->
                    <div class="blue-grey darken-3">
                        <div class="card-content white-text">
                            <span class="card-title">Sign In</span>
                        </div>
                    </div>

                    <div class="card-content">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="email" type="email" name="username" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="password" type="password" name="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <button class="btn waves-effect waves-light red darken-1 right" type="submit">Login</button>
                                <!--                                <a href="">Forgot password?</a>-->
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

</body>

</html>