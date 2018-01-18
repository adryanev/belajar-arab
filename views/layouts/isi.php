<?php
/**
 * Created by PhpStorm.
 * User: adryanev
 * Date: 18/01/18
 * Time: 21:57
 */

use app\widgets\Alert;
?>
<div class="wrapper">
    <div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">

    </div>
    <?= Alert::widget() ?>
    <?=$content?>
</div>