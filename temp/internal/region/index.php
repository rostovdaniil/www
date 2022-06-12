<?php

require_once  dirname(__DIR__)._DS_.'config/Db.php';
$Connect = new Db;
$base = dirname(getcwd());


?>

<?php include dirname(__DIR__)._DS_.'/base/head.php' ?>

    <body>

        <?php include dirname(__DIR__)._DS_.'/blocks/navbar/navbar.php' ?>

        <style>
            .box-input input {
                border: 1px solid rgba(255,255,255,0.1);
                background: unset;
                color: #fff;
                border-radius: 8px;
                height: 40px;
                width: 300px;
                font-size: 12px;
                padding: 8px 12px;
            }
        </style>

        <div class="container">

            <div class="main">
                <?php include dirname(__DIR__)._DS_.'/blocks/district/district.php' ?>

                <div class="block-margin-top">
                    <div class="block-box block-title-box box-input break-title-input">
                        <h3>Зарегистрированные сотрудники</h3>

                        <div class="title-box-input">
                            <input type="search" name="search" placeholder=" Поиск" class="input">
                        </div>
                    </div>

                    <div class="user-boxes block-box block-padding sub-block-margin-top">

                        <?php for ($i = 1; $i <= 12; $i++) { ?>

                            <a class="user-box" href="#">
                                <div class="user-avatar">
                                    <div class="avatar" style="background-image: url('/assets/images/avatar3.jpeg')"></div>
                                </div>
                                <div class="user-info">
                                    <span class="title">Ибрагим Грозный</span>
                                    <span class="muted">Районный сотрудник</span>
                                    <span class="muted">Село Шатой</span>
                                </div>
                            </a>

                        <?php } ?>

                    </div>

                </div>
                
                <?php include dirname(__DIR__)._DS_.'blocks/comparison/district-comparison.php';?>
                <?php include dirname(__DIR__)._DS_.'blocks/activity/activity.html';?>
            </div>

        </div>

        <?php include dirname(__DIR__)._DS_.'blocks/footer/footer.html';?>

    </body>

<?php include dirname(__DIR__)._DS_.'base/foot.php' ?>
