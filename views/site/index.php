<?php

/* @var $this yii\web\View */

$this->title = 'Beranda';
?>

<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
<div class="main main-raised">
    <div class="section section-basic">
        <div class="container">
            <div class="title">
                <h2>Info</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-nav-tabs">
                        <div class="header header-success">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#jumlah_barang" data-toggle="tab">
                                                <i class="material-icons">store</i>
                                                Barang hampir habis
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="content">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="jumlah_barang">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-nav-tabs">
                        <div class="header header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#total_penjualan" data-toggle="tab">
                                                <i class="material-icons">attach_money</i>
                                                Penjualan Bulan Ini
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="content">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="total_penjualan">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-nav-tabs">
                        <div class="header header-info">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#pengeluaran" data-toggle="tab">
                                                <i class="material-icons">money_off</i>
                                                Pengeluaran Bulan Ini
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="content">
                            <div class="tab-content text-center">
                                <div class="tab-pane active" id="pengeluaran">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </div>
