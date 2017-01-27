
<link rel="stylesheet" href="assets/style.css"/>
<link rel="stylesheet" href="assets/loginstyle.css"/>
<style>
    span {
        display: table;
        margin: 0 auto;
        color: red;
        padding: 0.5em;
    }
</style>
</head>
<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a>
                    <!-- #Logo Ends -->


                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active"><a href="#home">Home</a></li>
                        <li ><a href="#about">About</a></li>
                        <li ><a href="#works">Works</a></li>
						<li ><a href="#partners">Testimonials</a></li>
						<li ><a href="#contact">Get in touch</a></li>
                        <li ><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                        <li ><a href="#" data-toggle="modal" data-target="#createAccount">SignUp <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->


            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             data-backdrop="static"
             aria-hidden="true" style="display: none;">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog vertical-align-center">
                    <div class="modal-dialog">

                        <div class="loginmodal-container">
                            <h1>Login to Your Account</h1><br>
                            <form action="scripts/mainlogin.php" method="POST" >
                                <input type="text" name="username" placeholder="Username">
                                <span id="mainusr"> </span>
                                <input type="password" name="password" placeholder="Password">
                                <span id="mainpwd"></span>
                                <input type="hidden" name="front" value="yes">
                                <input  type="submit" name="login" class="login loginmodal-submit"
                                       value="Login">
                            </form>

                            <div class="login-help">
                                <a href="#">Register</a> - <a href="#">Forgot Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- #Header Starts -->
