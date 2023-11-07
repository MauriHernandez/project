<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="<?= route('crear-copia-de-seguridad') ?>" method="get">
                <?= csrf_field() ?>
                <h2>Hacer Copia de Seguridad</h2>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Crear Copia de Seguridad</button>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>
