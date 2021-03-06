<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Attendance Pad</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #061957;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('lecture.auth.login')); ?>">Lecture</a>
                        
                        <a href="<?php echo e(route('login')); ?>">Student</a>

                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
            <div>
            <img src="<?php echo e(URL::asset('/img/logo_ap.png')); ?>" height="200" width="200">
            &nbsp
            &nbsp
            &nbsp
            &nbsp
            &nbsp
            <img src="<?php echo e(URL::asset('/img/logo_uib.png')); ?>" height="200" width="200" >
            </div>
            
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\ASUS\Documents\attendance_pad\resources\views/welcome.blade.php ENDPATH**/ ?>