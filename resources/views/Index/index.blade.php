@extends('layouts.index')
@section('main')
<!-- Main content -->
<main class="main">
    <div class="page-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="text-muted page-desc">欢迎进入后台管理系统</div>
                </div>
                <div class="col-md-5 charts">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6">
                            <div class="chart-wrapper">
                                <canvas id="header-chart-1" class="chart" height="70"></canvas>
                            </div>
                            <div class="text-xs-center title">
                                <span class="text-muted">站点数量:</span>
                                <strong>123</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        <div class="container">
            <div class="animated fadeIn">
                <div class="col-sm-6 col-md-12">
                    <div class="card">
                        <div class="card-header card-danger">
                            什么是CI指数
                        </div>
                        <div class="card-block">
                            CI指数是利用近30d(相当于月尺度)和近90d(相当于季尺度)标准化降水指数，以及近30d相对
                            湿润度指数进行复合而得到的，它既反映了短时间尺度(月)和长时间尺度(季)的降水量气
                            候异常情况，又反映了短时间尺度(影响农作物生长)的水分亏欠情况。
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="card">
                        <div class="card-header card-success">
                            计算公式及过程
                        </div>
                        <div class="card-block">
                            <p class="card-text">可以了解每一个参数的计算公式和整个计算过程。</p>
                            <a href="#" class="btn btn-primary">去看看吧</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="card">
                        <div class="card-header card-warning">
                            本系统使用手册
                        </div>
                        <div class="card-block">
                            <p class="card-text">如果是第一次使用本系统，强烈建议您先阅读使用手册。</p>
                            <a href="#" class="btn btn-primary">看看再说</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.conainer-fluid -->
</main>
@endsection