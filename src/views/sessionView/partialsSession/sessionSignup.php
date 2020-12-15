<div class="row mt-5">
    <div class="mx-auto mt-5 card w-25 text-center">
        <div class="card-body container">
            <h1 class="card-title">Crear Cuenta</h1>
            <form class="mt-3" action="<?php echo $helpers->url('session', 'crear'); ?>" method="post">
                <div class="form-group" >
                    <input class="form-control" type="text" name="name" placeholder="Nombre Completo">
                </div>
                <div class="form-group" >
                    <input class="form-control" type="text" name="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="form-group"><a href="<?php echo $helpers->url('session', 'index'); ?>" class="card-link">Ya tengo una cuenta</a></div>
                <div class="form-group">
                    <input class="btn btn-block btn-primary" type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>