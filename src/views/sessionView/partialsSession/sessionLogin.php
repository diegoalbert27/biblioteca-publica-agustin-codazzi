<div class="row mt-5">
    <div class="mx-auto mt-5 card w-25 text-center">
        <div class="card-body container">
            <h1 class="card-title">Login</h1>
            <form class="mt-3" action="<?php echo $helpers->url('session', 'iniciar'); ?>" method="post">
                <div class="form-group" >
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                    <p class="card-text">¿No tienes una cuenta? <span><a class="card-link" href="<?php echo $helpers->url('session', 'signup'); ?>">Crear una cuenta</a></span></p>
                </div>
                <div class="form-group">
                    <input class="btn btn-block btn-primary" type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>