
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <style>

        body{
        background: #59a9ff;

        background: linear-gradient(to right,#f0f0f0, #59a9ff);
        }
        .bg{
            background-image: url(imagenes/login3.jpg);
            background-position: center center ;
        }
    </style>
</head>

<body>
    <div class="container w-75 bg-primary mt-5 mb-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>

            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                <img src="imagenes/libreria1.png" width="48" alt="logo">
            </div>
            <h2 class="fw-bold text-center py-5">Bienvenido</h2>
    <?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12">                                
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <label for="email" class=" col-form-label text-md-end"><?php echo e(__('Correo electrónico')); ?></label>
                <div>
                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </input>
                </div>
                    
                <label for="password" class=" col-form-label text-md-end"><?php echo e(__('Contraseña')); ?></label>
                <div>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </input>
                </div>
                    <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('¿Olvidasté tu contraseña?')); ?>

                        </a>
                    <?php endif; ?>
                    
                <div class="row mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                            <label class="form-check-label" for="remember">
                                <?php echo e(__('Mantenerme conectado')); ?>

                            </label>
                        </div>
                    </div>
                
                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                <?php echo e(__('Iniciar sesión')); ?>

                            </button>                          
                        </div>
                    </div>
                    </br>
                    <span>¿No tienes una cuenta todavía?
                        <button type="submit"  class="btn btn-primary">
                            <?php if(Route::has('register')): ?>    
                                <a class="text-white text-decoration-none" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registro')); ?></a>     
                            <?php endif; ?>
                        </button> 
                    </span>
                                                     
                        
                </div>
                </form> 
                </br>
                <a href="welcome" class="boton">
                    Volver a la página principal
                </a>  
                
                
            </div>
        </div>
    <?php $__env->stopSection(); ?>
</body>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/auth/login.blade.php ENDPATH**/ ?>