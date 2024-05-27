<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Журнал учёта перевозок</h1>

        <p class="lead">2024 © КарТУ имени Абылкаса Сагинова</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3 d-grid gap-2">
                <a href="/shipping-list/index" class="btn btn-outline-info btn-block btn-lg " role="button" aria-pressed="true">
                    <h1 class="text-center bi bi-box2-heart"></h1>
                    <h5 class="text-center card-title">Перевозки</h5>
                </a>
            </div>
            <div class="col-lg-4 mb-3 d-grid gap-2">
                <a href="/drivers/index" class="btn btn-outline-warning btn-block btn-lg " role="button" aria-pressed="true">
                    <h1 class="text-center bi bi-people-fill"></h1>
                    <h5 class="text-center card-title">Водители</h5>
                </a>
            </div>
            <div class="col-lg-4 mb-3 d-grid gap-2">
                <a href="/cars/index" class="btn btn-outline-success btn-block btn-lg " role="button" aria-pressed="true">
                    <h1 class="text-center bi bi-send-check"></h1>
                    <h5 class="text-center card-title">Транспорт</h5>
                </a>
            </div>
        </div>

    </div>
</div>
