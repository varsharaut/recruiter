<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from hagal-admin.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:32 GMT -->
<head>
        <meta charset="utf-8">
        <title>Recruitment Admin Panel - Login Page</title>

        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <link rel="icon" type="image/ico" href="favicon.ico">
            
        <!-- Bootstrap framework -->
            <link rel="stylesheet" href="<?=base_url('css/bootstrap.min.css')?>" />
        <!-- main styles -->
        <style>
            html,body {height:100%}
            body {background:#f8f8f8;padding:0}
            select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}
            textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus { border-color: #5ca9e4; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2) inset, 0 0 0 2px rgba(70, 161, 231, 0.3); }
            form {margin:0}
            
            .login_box {width:325px;margin:0 auto;border:1px solid #ddd;background:#fff;position:relative;top:10%}
            .box_top,.box_footer {background:#f3f2f1;padding:10px}
            .box_top {text-align:center;padding:10px 10px 8px}
            .box_top img {width:64px;height:30px}
            .box_content {border-width:1px 0;border-style:solid;border-color:#ddd;padding:20px 40px}
            .box_content p {margin:0;line-height:1.3}
            .box_content label {font-size:11px;margin:0;padding:0}
            .box_content .btn-block {margin:20px 0 10px}
            .minor_text {font-size:11px}
            
            .modal {-webkit-border-radius: 0;-moz-border-radius: 0;border-radius: 0;}
            .modal-header {border-bottom:none;background:#333;color:#fff}    
            .modal-header .close {color:#fff;opacity:0.8}    
            .modal-header .close:hover {color:#fff;opacity:1}    
            .modal-header h3 {font-size:16px;font-weight:normal}    
            .modal-body {padding:20px}
            .modal-body p {margin-bottom:10px}
            .modal-body p:last-child {margin:0}
            .modal-backdrop, .modal-backdrop.fade.in {opacity:0.5;filter: alpha(opacity=50)}
            .modal-footer {padding:6px 10px}
            
            label.error {position:relative;top:-8px;color:#dc0000;font-weight:700}
        </style>
    </head>
    <body>
        <div class="login_box">
        <!-- sign in -->   
            <?php  if(isset($success)) { ?> 
                <div class="alert alert-success" role="alert">
                    <a class="close" data-dismiss="alert" href="#"><i class="fa fa-check fa-fw"></i></a>
                    <?=$success?>
                </div>
            <?php } ?>
            <?php if(isset($error)) { ?> 
                <div class="alert alert-danger" role="alert">
                    <a class="close" data-dismiss="alert" href="#"><i class="fa fa-times fa-fw"></i></a>
                    <?=$error?>
                </div>
            <?php } ?> 
            <?php if(isset($alert)) { ?> 
                <div class="alert alert-success" role="alert">
                    <a class="close" data-dismiss="alert" href="#"><i class="fa fa-check fa-fw"></i></a>
                    <?=$alert?>
                </div>
            <?php } ?> 
            <?php if(isset($alert1)) { ?> 
                <div class="alert alert-success" role="alert">
                    <a class="close" data-dismiss="alert" href="#"><i class="fa fa-check fa-fw"></i></a>
                    <?=print_r('Please Login First...!');?>
                </div>
            <?php } ?> 
            <form action="<?=site_url('welcome/login')?>" method="post" id="login_form" onsubmit="return checkForm(this);">
                <div class="box_top"><img src="img/hagal_logo.png" alt=""></div>    
                <div class="box_content">
                    <div class="row-fluid">
                        <div class="text-center">
                            <label for="l_username">Username</label>
                            <input class="span12" type="text" id="l_username" name="username" placeholder="Username" required>
                        </div>
                        <div class="text-center">
                            <label for="l_password">Password</label>
                            <input class="span12" type="password" id="l_password" name="password" placeholder="Password" required>
                        </div>
                        <button class="btn btn-block btn-primary btn-large" type="submit">Sign In</button>
                        <p class="text-center minor_text"><a class="form_toggle" href="#pass_form">Forgot your password?</a></p>
                    </div>
                </div>
                <div class="box_footer text-center clearfix minor_text">
                    Not registered? <a class="form_toggle" href="#reg_form"> Sign up here</a>
                </div>  
            </form>
        <!-- sign up -->    
            <form action="http://hagal-admin.tzdthemes.com/dashboard.html" method="post" id="reg_form" style="display:none">
                <div class="box_top text-center">Sign up</div>    
                <div class="box_content">
                    <div class="row-fluid">
                        <div class="text-center">
                            <label for="r_username">Username</label>
                            <input class="span12" type="text" id="r_username" name="r_username" placeholder="Username">
                        </div>
                        <div class="text-center">
                            <label for="r_password">Password</label>
                            <input class="span12" type="password" id="r_password" name="r_password" placeholder="Password">
                        </div>
                        <div class="text-center">
                            <label for="r_email">Email</label>
                            <input class="span12" type="password" id="r_email" name="r_email" placeholder="Email">
                        </div>
                        <button class="btn btn-block btn-primary btn-large" type="submit">Sign up</button>
                        <p class="minor_text">By clicking on Sign up, you agree to <a data-toggle="modal" href="#terms">Terms of Service</a></p>
                        <div id="terms" class="modal hide fade" style="display:none">
                            <div class="modal-header">
                                <a class="close" data-dismiss="modal">×</a>
                                <h3>Terms and Conditions</h3>
                            </div>
                            <div class="modal-body">
                                <p>1. Nulla sollicitudin pulvinar enim, vitae mattis velit venenatis vel. Nullam dapibus est quis lacus tristique consectetur. Morbi posuere vestibulum neque, quis dictum odio facilisis placerat. Sed vel diam ultricies tortor egestas vulputate. Aliquam lobortis felis at ligula elementum volutpat. Ut accumsan sollicitudin neque vitae bibendum. Suspendisse id ullamcorper tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum at augue lorem, at sagittis dolor. Curabitur lobortis justo ut urna gravida scelerisque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam vitae ligula elit.</p>
                                <p>2. Pellentesque tincidunt mollis erat ac iaculis. Morbi odio quam, suscipit at sagittis eget, commodo ut justo. Vestibulum auctor nibh id diam placerat dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse vel nunc sed tellus rhoncus consectetur nec quis nunc. Donec ultricies aliquam turpis in rhoncus. Maecenas convallis lorem ut nisl posuere tristique. Suspendisse auctor nibh in velit hendrerit rhoncus. Fusce at libero velit. Integer eleifend sem a orci blandit id condimentum ipsum vehicula. Quisque vehicula erat non diam pellentesque sed volutpat purus congue. Duis feugiat, nisl in scelerisque congue, odio ipsum cursus erat, sit amet blandit risus enim quis ante. Pellentesque sollicitudin consectetur risus, sed rutrum ipsum vulputate id. Sed sed blandit sem. Integer eleifend pretium metus, id mattis lorem tincidunt vitae. Donec aliquam lorem eu odio facilisis eu tempus augue volutpat.</p>
                            </div>
                            <div class="modal-footer">
                                <a data-dismiss="modal" class="btn" href="#">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box_footer text-center clearfix minor_text">
                    Never mind, <a class="form_toggle" href="#login_form">send me back to the sign-in screen</a>
                </div>
            </form>
        <!-- new password -->
            <form action="http://hagal-admin.tzdthemes.com/dashboard.html" method="post" id="pass_form" style="display:none">
                <div class="box_top">Can't sign in?</div>    
                <div class="box_content">
                    <div class="row-fluid">
                        <div class="text-center">
                            <label for="l_username">Email</label>
                            <input class="span12" type="text" id="f_email" name="f_email" placeholder="Email">
                        </div>
                        <button class="btn btn-block btn-primary btn-large" type="submit">Request New Password</button>
                    </div>
                </div>
                <div class="box_footer text-center clearfix minor_text">
                    Never mind, <a class="form_toggle" href="#login_form">send me back to the sign-in screen</a>
                </div>
            </form>
            
        </div>
        
        <script src="<?=base_url('js/jquery.min.js')?>"></script>
        <script src="<?=base_url('js/jquery.actual.min.js')?>"></script>
        <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('js/jquery.validate.js')?>"></script>

        <script>
            $(function() {
                
                //* boxes animation
                var form_wrapper = $('.login_box');
                form_wrapper.css({
                    marginTop : ( - ( form_wrapper.height() / 2) ),
                    top: '50%'
                });
                
                $('.form_toggle').on('click',function(e){
                    var target  = $(this).attr('href'),
                        target_height = $(target).actual('height');
                    $(form_wrapper).css({
                        'height'        : form_wrapper.height()
                    }); 
                    $(form_wrapper.find('form:visible')).fadeOut(400,function(){
                        form_wrapper.stop().animate({
                            height   : target_height,
                            marginTop: ( - (target_height/2) )
                        },500,function(){
                            $(target).fadeIn(400);
                            $(form_wrapper).css({
                                'height'        : ''
                            }); 
                        });
                    });
                    e.preventDefault();
                });
                
                //* validation
                $('#login_form').validate({
                    onkeyup: false,
                    errorClass: 'error',
                    validClass: 'valid',
                    rules: {
                        l_username: { required: true, minlength: 3 },
                        l_password: { required: true, minlength: 3 }
                    },
                    errorPlacement: function(error, element) {
                        $(element).closest('div').append(error);
                    }
                })
            });
        </script>
        
        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','<?=base_url('js/analytics.js')?>','ga');
		
		  ga('create', 'UA-65390203-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
    </body>

<!-- Mirrored from hagal-admin.tzdthemes.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 04:57:32 GMT -->
</html>