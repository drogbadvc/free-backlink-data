<?php

use Numeral\Numeral;

include('assets/template/header.html') ?>

<body class="" data-layout="topnav">
<!-- Begin page -->
<div class="wrapper">
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right"></div>
                            <h4 class="page-title">Dashboard @<?=$url?></h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-link-box-variant widget-icon bg-success-lighten text-success"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Total Backlinks</h5>
                                        <h3 class="mt-3 mb-3" id="totalBlNumber"></h3>
                                        <div id="canvas-holder">
                                            <canvas id="chart-area"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-link-box-variant widget-icon bg-success-lighten text-success"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Total Domains</h5>
                                        <h3 class="mt-3 mb-3" id="totalDmNumber"></h3>
                                        <div id="canvas-holder">
                                            <canvas id="chart-area2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-link-box-variant widget-icon bg-success-lighten text-success"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Total ips</h5>
                                        <h3 class="mt-3 mb-3" id="totalIpsNumber"></h3>
                                        <div id="canvas-holder">
                                            <canvas id="chart-area3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card widget-flat">
                                    <div class="card-body">
                                        <div class="float-right">
                                            <i class="mdi mdi-link-box-variant widget-icon bg-success-lighten text-success"></i>
                                        </div>
                                        <h5 class="text-muted font-weight-normal mt-0">Total C Block IP</h5>
                                        <h3 class="mt-3 mb-3" id="totalCblockNumber"></h3>
                                        <div id="canvas-holder">
                                            <canvas id="chart-area4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-2">Top Country</h4>
                                    <div id="canvas-holder">
                                        <canvas id="chart-area5"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-2">Top TLD</h4>
                                    <div id="canvas-holder">
                                        <canvas id="chart-area6"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-link-box-variant widget-icon bg-success-lighten text-success float-right mb-3"></i>
                                <h4 class="header-title mt-2">Top Anchors By Backlinks</h4>
                                <div class="table-responsive">
                                    <table id="topAnchorsByBacklinks"
                                           class="table table-centered table-sm table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>Anchor</th>
                                            <th>Count</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($topAnchorsByBacklinks as $line) : ?>
                                            <tr>
                                                <td>
                                                    <h5 class="font-14 my-1 font-weight-normal"><?= $line['anchor'] ?></h5>
                                                    <span class="text-info font-13"><?= ($line['text']) ? 'text' : 'image' ?></span>
                                                </td>
                                                <td><?= Numeral::number($line['count'])->format('0,0'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-link-box-variant widget-icon bg-success-lighten text-success float-right mb-3"></i>
                                <h4 class="header-title mt-2">Top Anchors By Domains</h4>
                                <div class="table-responsive">
                                    <table id="topAnchorsByDomains"
                                           class="table table-centered table-sm table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>Anchor</th>
                                            <th>Count</th>
                                        </tr>
                                        </thead>
                                        <tbody id="TopAnchors">
                                        <?php foreach ($topAnchorsByDomains as $AnchorsD) : ?>
                                            <tr>
                                                <td>
                                                    <h5 class="font-14 my-1 font-weight-normal"><?= $AnchorsD['anchor'] ?></h5>
                                                    <span class="text-info font-13"><?= ($AnchorsD['text']) ? 'text' : 'image' ?></span>
                                                </td>
                                                <td><?= Numeral::number($AnchorsD['count'])->format('0,0'); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <i class="mdi mdi-rocket widget-icon bg-success-lighten text-success float-right mb-3"></i>
                                <h4 class="header-title mt-2">View Backlinks
                                    <button type="button" class="btn btn-info" id="blCheck"><i
                                                class="mdi mdi-rocket mr-1"></i> <span>Launch</span></button>
                                </h4>

                                <div class="table-responsive">
                                    <table class="table table-centered table-sm table-hover mb-0">
                                        <div id="loadingBl" style="display: none; text-align: center;">
                                            <div class="spinner-border avatar-lg text-primary" role="status"></div>
                                        </div>
                                        <tbody id="ViewBls">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Ajax Request
        async function requestData() {
            let data = []
            let request = await fetch("<?= $file ?>", {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: 'GET'
            })
            if (request.status === 200 || request.status === 302) {
                const response = await request.json()
                //Backlinks
                data['totalBlValue'] = parseInt(response.backlinks.total)
                data['textBlValue'] = parseInt(response.backlinks.text)
                data['followBlValue'] = parseInt(response.backlinks.doFollow)
                data['toHomeBlValue'] = parseInt(response.backlinks.toHomePage)
                data['followFromHomeBlValue'] = parseInt(response.backlinks.doFollowFromHomePage)

                //Domains
                data['totalDmValue'] = parseInt(response.domains.total)
                data['followDmValue'] = parseInt(response.domains.doFollow)
                data['FromHomeDmValue'] = parseInt(response.domains.fromHomePage)
                data['toHomeDmValue'] = parseInt(response.domains.toHomePage)

                //Ips
                data['totalIpsValue'] = parseInt(response.ips.total)
                data['FollowIpsValue'] = parseInt(response.ips.doFollow)

                //cBlocks
                data['totalCValue'] = parseInt(response.cBlocks.total)
                data['FollowCValue'] = parseInt(response.cBlocks.doFollow)

                //Top Country
                data['topCountry'] = response.topCountry.line

                //Top TLD
                data['topTLD'] = response.topTLD.line

            }
            return data
        }

        async function getData() {
            return await new Promise((resolve) => {
                return resolve(requestData())
            });
        }

        const result = getData().then((response) => {
            let totalBl = document.querySelector('#totalBlNumber')
            totalBl.innerHTML = Intl.NumberFormat().format(response['totalBlValue']);
            let totalDm = document.querySelector('#totalDmNumber')
            totalDm.innerHTML = Intl.NumberFormat().format(response['totalDmValue']);
            let totalIp = document.querySelector('#totalIpsNumber')
            totalIp.innerHTML = Intl.NumberFormat().format(response['totalIpsValue']);
            let totalCblock = document.querySelector('#totalCblockNumber')
            totalCblock.innerHTML = Intl.NumberFormat().format(response['totalCValue']);

            var data = {
                datasets: [{
                    data: [response['totalBlValue'], response['textBlValue'], response['followBlValue'], response['toHomeBlValue'], response['followFromHomeBlValue']],
                    backgroundColor
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Total Bl',
                    'Text',
                    'doFollow',
                    'toHomePage',
                    'doFollowFromHomePage'
                ]
            };

            var data2 = {
                datasets: [{
                    data: [response['totalDmValue'], response['followDmValue'], response['FromHomeDmValue'], response['toHomeDmValue']],
                    backgroundColor
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Total Domains',
                    'doFollow',
                    'FromHomePage',
                    'toHomePage'
                ]
            };

            var data3 = {
                datasets: [{
                    data: [response['totalIpsValue'], response['FollowIpsValue']],
                    backgroundColor
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Total ips',
                    'doFollow'
                ]
            };

            var data4 = {
                datasets: [{
                    data: [response['totalCValue'], response['FollowCValue']],
                    backgroundColor
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
                labels: [
                    'Total C-Blocks',
                    'doFollow'
                ]
            };

            var data5 = {
                labels: response['topCountry'].map((item) => item.label ? item.label : ''),
                datasets: [{
                    data: response['topCountry'].map((item) => item.count ? item.count : ''),
                    backgroundColor
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
            };

            var data6 = {
                labels: response['topTLD'].map((item) => item.label ? item.label : ''),
                datasets: [{
                    data: response['topTLD'].map((item) => item.count ? item.count : ''),
                    backgroundColor
                }],
                // These labels appear in the legend and in the tooltips when hovering different arcs
            };

            function setConfig(data) {
                return {
                    data: data,
                    options: {
                        responsive: true,
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: ''
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true,
                                callback: function (value) {
                                    return numeral(value).format(' 0,0')
                                }
                            },
                            reverse: false
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, chart) {
                                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                    return numeral(tooltipItem.yLabel).format(' 0,0');
                                }
                            }
                        },
                        animation: {
                            animateRotate: false,
                            animateScale: true
                        }
                    }
                }
            }

            function BarConfig(Bardata) {
                return {
                    type: 'bar',
                    data: Bardata,
                    options: {
                        responsive: true,
                        legend: {
                            display: false
                        },
                        title: {
                            display: false
                        },
                        scales: {
                            xAxes: [{
                                gridLines: {
                                    display: false
                                }
                            }],
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    callback: function (value) {
                                        return numeral(value).format(' 0,0')
                                    }
                                },
                                gridLines: {
                                    display: false
                                }
                            }]
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, chart) {
                                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                    return numeral(tooltipItem.yLabel).format(' 0,0');
                                }
                            }
                        },
                        animation: {
                            animateRotate: false,
                            animateScale: true
                        }
                    }
                }
            }

            window.onload = function () {
                var ctx = document.getElementById('chart-area');
                window.myPolarArea = Chart.PolarArea(ctx, setConfig(data));
                var ctx2 = document.getElementById('chart-area2');
                window.myPolarArea = Chart.PolarArea(ctx2, setConfig(data2));
                var ctx3 = document.getElementById('chart-area3');
                window.myPolarArea = Chart.PolarArea(ctx3, setConfig(data3));
                var ctx4 = document.getElementById('chart-area4');
                window.myPolarArea = Chart.PolarArea(ctx4, setConfig(data4));
                var ctx5 = document.getElementById('chart-area5');
                window.myBar = Chart.Bar(ctx5, BarConfig(data5));
                var ctx6 = document.getElementById('chart-area6');
                window.myBar = Chart.Bar(ctx6, BarConfig(data6));
            };

        })
        let blCheck = document.getElementById("blCheck")
        let ViewBls = document.getElementById("ViewBls")
        blCheck.addEventListener("click", LaunchBl);
    </script>