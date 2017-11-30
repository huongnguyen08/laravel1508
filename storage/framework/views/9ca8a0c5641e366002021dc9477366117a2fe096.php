<!doctype html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-6">
                    <h2>Contact Form</h2>
                        
                    <?php if($errors->any()): ?> 
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?php echo e(route('contact')); ?>">

                        Họ tên: <br>
                        <input type="text" class="form-control" name="fullname" placeholder="Nhập họ tên"/>
                        <br>

                        Tuổi: <br>
                        <input type="text" class="form-control" name="age" placeholder="Nhập tuổi"/>
                        <br>

                        Email: <br>
                        <input type="email" class="form-control" name="email" placeholder="Nhập email"/>
                        <br>

                        Tiêu đề: <br>
                        <input type="text" class="form-control" name="title" placeholder="Nhập Tiêu đề"/>
                        <br>
                        

                        Nội dung: <br>
                        <textarea name="message" class="form-control" rows="5"></textarea>

                        
                        <br>
                        <input type="file" name="hinhanh" />
                        <br><br>

                        <button type="submit" class="btn btn-primary" name="btnSend" >Gửi</button>

                        

                        <?php echo e(csrf_field()); ?>


                    </form> 
                </div>
            </div>
        </div>
        
        
    </body>
</html>