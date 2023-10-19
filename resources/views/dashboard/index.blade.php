@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper mt-0+">
        <h5 class="font-weight-medium d-lg-flex">Welcome User!</h5>
        <div class="row my-3">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body py-2">
                        <div class="float-end mt-2">
                            <div id="total-revenue-chart" style="min-height: 40px;"><div id="apexchartste0ymt62" class="apexcharts-canvas apexchartste0ymt62 apexcharts-theme-light" style="width: 70px; height: 40px;"><svg id="SvgjsSvg1270" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1272" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1271"><linearGradient id="SvgjsLinearGradient1276" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1277" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1278" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1279" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskte0ymt62"><rect id="SvgjsRect1282" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskte0ymt62"><rect id="SvgjsRect1283" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1281" x1="0" y1="0" x2="0" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient1276)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1298" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1299" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG1301" class="apexcharts-grid"><g id="SvgjsG1302" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1304" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1305" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1306" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1307" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1308" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1309" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1303" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1311" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1310" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1284" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1285" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1287" d="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath1288" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath1289" d="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath1290" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath1291" d="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817"></path><path id="SvgjsPath1292" d="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath1293" d="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath1294" d="M 46.136363636363626 40L 46.136363636363626 32L 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 46.136363636363626 40L 46.136363636363626 32L 49.318181818181806 32L 49.318181818181806 32L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="32" cx="52.499999999999986" j="7" val="20" barHeight="8" barWidth="3.1818181818181817"></path><path id="SvgjsPath1295" d="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath1296" d="M 58.863636363636346 40L 58.863636363636346 24L 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 58.863636363636346 40L 58.863636363636346 24L 62.045454545454525 24L 62.045454545454525 24L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="24" cx="65.2272727272727" j="9" val="40" barHeight="16" barWidth="3.1818181818181817"></path><path id="SvgjsPath1297" d="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(91,115,232,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskte0ymt62)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817"></path></g><g id="SvgjsG1286" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1312" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1313" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1314" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1315" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1316" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1280" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1300" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1273" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 71px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1">$0</h4>
                            <p class="text-muted mb-0">Total Wallet Balance</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body py-2">
                        <div class="float-end mt-2" style="position: relative;">
                            <div id="orders-chart" style="min-height: 46px;"><div id="apexchartsskd8q96u" class="apexcharts-canvas apexchartsskd8q96u apexcharts-theme-light" style="width: 45px; height: 46px;"><svg id="SvgjsSvg1317" width="45" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1319" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1318"><clipPath id="gridRectMaskskd8q96u"><rect id="SvgjsRect1321" width="51" height="47" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskskd8q96u"><rect id="SvgjsRect1322" width="49" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1323" class="apexcharts-radialbar"><g id="SvgjsG1324"><g id="SvgjsG1325" class="apexcharts-tracks"><g id="SvgjsG1326" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.258536585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path></g></g><g id="SvgjsG1328"><g id="SvgjsG1330" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1331" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267" fill="none" fill-opacity="0.85" stroke="rgba(52,195,143,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.390243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="252" data:value="70" index="0" j="0" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 7.886204749611055 27.248309913566267"></path></g><circle id="SvgjsCircle1329" r="13.23658536585366" cx="22.5" cy="22.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1332" x1="0" y1="0" x2="45" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1333" x1="0" y1="0" x2="45" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1320" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 46px; height: 47px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1">$0.00</h4>
                            <p class="text-muted mb-0">Total Earnings</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body py-2">
                        <div class="float-end mt-2" style="position: relative;">
                            <div id="customers-chart" style="min-height: 46px;"><div id="apexchartsiqn69idr" class="apexcharts-canvas apexchartsiqn69idr apexcharts-theme-light" style="width: 45px; height: 46px;"><svg id="SvgjsSvg1334" width="45" height="46" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1336" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1335"><clipPath id="gridRectMaskiqn69idr"><rect id="SvgjsRect1338" width="51" height="47" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskiqn69idr"><rect id="SvgjsRect1339" width="49" height="49" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1340" class="apexcharts-radialbar"><g id="SvgjsG1341"><g id="SvgjsG1342" class="apexcharts-tracks"><g id="SvgjsG1343" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.258536585365854" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 22.497318152626402 7.134146575498747"></path></g></g><g id="SvgjsG1345"><g id="SvgjsG1347" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0"><path id="SvgjsPath1348" d="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895" fill="none" fill-opacity="0.85" stroke="rgba(91,115,232,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="4.390243902439025" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="198" data:value="55" index="0" j="0" data:pathOrig="M 22.5 7.134146341463413 A 15.365853658536587 15.365853658536587 0 1 1 17.751690086433737 37.11379525038895"></path></g><circle id="SvgjsCircle1346" r="13.23658536585366" cx="22.5" cy="22.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle></g></g></g><line id="SvgjsLine1349" x1="0" y1="0" x2="45" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1350" x1="0" y1="0" x2="45" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1337" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 46px; height: 47px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1">$<b>0.00</b></h4>
                            <p class="text-muted mb-0">Active Deposit</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body py-2">
                        <div class="float-end mt-2" style="position: relative;">
                            <div id="growth-chart" style="min-height: 40px;"><div id="apexcharts0lusdgly" class="apexcharts-canvas apexcharts0lusdgly apexcharts-theme-light" style="width: 70px; height: 40px;"><svg id="SvgjsSvg1351" width="70" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1353" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1352"><linearGradient id="SvgjsLinearGradient1357" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1358" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1359" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1360" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask0lusdgly"><rect id="SvgjsRect1363" width="74" height="40" x="-2" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask0lusdgly"><rect id="SvgjsRect1364" width="74" height="44" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1362" x1="0" y1="0" x2="0" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient1357)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1379" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1380" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG1382" class="apexcharts-grid"><g id="SvgjsG1383" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1385" x1="0" y1="0" x2="70" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1386" x1="0" y1="8" x2="70" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1387" x1="0" y1="16" x2="70" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1388" x1="0" y1="24" x2="70" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1389" x1="0" y1="32" x2="70" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1390" x1="0" y1="40" x2="70" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1384" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1392" x1="0" y1="40" x2="70" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1391" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1365" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1366" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1368" d="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 1.5909090909090908 40L 1.5909090909090908 30L 4.7727272727272725 30L 4.7727272727272725 30L 4.7727272727272725 40L 4.7727272727272725 40z" pathFrom="M 1.5909090909090908 40L 1.5909090909090908 40L 4.7727272727272725 40L 4.7727272727272725 40L 4.7727272727272725 40L 1.5909090909090908 40" cy="30" cx="7.954545454545454" j="0" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath1369" d="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 7.954545454545454 40L 7.954545454545454 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 13.600000000000001L 11.136363636363637 40L 11.136363636363637 40z" pathFrom="M 7.954545454545454 40L 7.954545454545454 40L 11.136363636363637 40L 11.136363636363637 40L 11.136363636363637 40L 7.954545454545454 40" cy="13.600000000000001" cx="14.318181818181817" j="1" val="66" barHeight="26.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath1370" d="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 14.318181818181817 40L 14.318181818181817 23.6L 17.5 23.6L 17.5 23.6L 17.5 40L 17.5 40z" pathFrom="M 14.318181818181817 40L 14.318181818181817 40L 17.5 40L 17.5 40L 17.5 40L 14.318181818181817 40" cy="23.6" cx="20.68181818181818" j="2" val="41" barHeight="16.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath1371" d="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 20.68181818181818 40L 20.68181818181818 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 4.399999999999999L 23.86363636363636 40L 23.86363636363636 40z" pathFrom="M 20.68181818181818 40L 20.68181818181818 40L 23.86363636363636 40L 23.86363636363636 40L 23.86363636363636 40L 20.68181818181818 40" cy="4.399999999999999" cx="27.045454545454543" j="3" val="89" barHeight="35.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath1372" d="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 27.045454545454543 40L 27.045454545454543 14.8L 30.227272727272727 14.8L 30.227272727272727 14.8L 30.227272727272727 40L 30.227272727272727 40z" pathFrom="M 27.045454545454543 40L 27.045454545454543 40L 30.227272727272727 40L 30.227272727272727 40L 30.227272727272727 40L 27.045454545454543 40" cy="14.8" cx="33.40909090909091" j="4" val="63" barHeight="25.2" barWidth="3.1818181818181817"></path><path id="SvgjsPath1373" d="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 33.40909090909091 40L 33.40909090909091 30L 36.590909090909086 30L 36.590909090909086 30L 36.590909090909086 40L 36.590909090909086 40z" pathFrom="M 33.40909090909091 40L 33.40909090909091 40L 36.590909090909086 40L 36.590909090909086 40L 36.590909090909086 40L 33.40909090909091 40" cy="30" cx="39.772727272727266" j="5" val="25" barHeight="10" barWidth="3.1818181818181817"></path><path id="SvgjsPath1374" d="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 39.772727272727266 40L 39.772727272727266 22.4L 42.954545454545446 22.4L 42.954545454545446 22.4L 42.954545454545446 40L 42.954545454545446 40z" pathFrom="M 39.772727272727266 40L 39.772727272727266 40L 42.954545454545446 40L 42.954545454545446 40L 42.954545454545446 40L 39.772727272727266 40" cy="22.4" cx="46.136363636363626" j="6" val="44" barHeight="17.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath1375" d="M 46.136363636363626 40L 46.136363636363626 35.2L 49.318181818181806 35.2L 49.318181818181806 35.2L 49.318181818181806 40L 49.318181818181806 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 46.136363636363626 40L 46.136363636363626 35.2L 49.318181818181806 35.2L 49.318181818181806 35.2L 49.318181818181806 40L 49.318181818181806 40z" pathFrom="M 46.136363636363626 40L 46.136363636363626 40L 49.318181818181806 40L 49.318181818181806 40L 49.318181818181806 40L 46.136363636363626 40" cy="35.2" cx="52.499999999999986" j="7" val="12" barHeight="4.8" barWidth="3.1818181818181817"></path><path id="SvgjsPath1376" d="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 52.499999999999986 40L 52.499999999999986 25.6L 55.681818181818166 25.6L 55.681818181818166 25.6L 55.681818181818166 40L 55.681818181818166 40z" pathFrom="M 52.499999999999986 40L 52.499999999999986 40L 55.681818181818166 40L 55.681818181818166 40L 55.681818181818166 40L 52.499999999999986 40" cy="25.6" cx="58.863636363636346" j="8" val="36" barHeight="14.4" barWidth="3.1818181818181817"></path><path id="SvgjsPath1377" d="M 58.863636363636346 40L 58.863636363636346 36.4L 62.045454545454525 36.4L 62.045454545454525 36.4L 62.045454545454525 40L 62.045454545454525 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 58.863636363636346 40L 58.863636363636346 36.4L 62.045454545454525 36.4L 62.045454545454525 36.4L 62.045454545454525 40L 62.045454545454525 40z" pathFrom="M 58.863636363636346 40L 58.863636363636346 40L 62.045454545454525 40L 62.045454545454525 40L 62.045454545454525 40L 58.863636363636346 40" cy="36.4" cx="65.2272727272727" j="9" val="9" barHeight="3.6" barWidth="3.1818181818181817"></path><path id="SvgjsPath1378" d="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" fill="rgba(241,180,76,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="square" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask0lusdgly)" pathTo="M 65.2272727272727 40L 65.2272727272727 18.4L 68.40909090909089 18.4L 68.40909090909089 18.4L 68.40909090909089 40L 68.40909090909089 40z" pathFrom="M 65.2272727272727 40L 65.2272727272727 40L 68.40909090909089 40L 68.40909090909089 40L 68.40909090909089 40L 65.2272727272727 40" cy="18.4" cx="71.59090909090907" j="10" val="54" barHeight="21.6" barWidth="3.1818181818181817"></path></g><g id="SvgjsG1367" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1393" x1="0" y1="0" x2="70" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1394" x1="0" y1="0" x2="70" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1395" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1396" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1397" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1361" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1381" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1354" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 20px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 71px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                        <div>
                            <h4 class="mb-1 mt-1">$0.00</h4>
                            <p class="text-muted mb-0">Total Withdrawal</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">

                <div class="card">
                    <div class="card-body py-2">
                        <div class="float-end mt-2">
                            <div id="growth-chart"></div>
                        </div>
                        <div>
                            <h4 class="mb-1 mt-1">
                                $0.00</h4>
                            <p class="text-muted mb-0">Total Referral Commission</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
            <span class="card-body d-lg-flex align-items-center">
               <p class="mb-lg-0">Get tons of UI components, Plugins, multiple layouts, 20+ sample pages, and more! </p>
               <a href="https://www.bootstrapdash.com/product/stellar-admin/?utm_source=organic&utm_medium=banner&utm_campaign=free-preview" target="_blank" class="btn btn-warning purchase-button btn-sm my-1 my-sm-0 ml-auto">Upgrade To Pro</a>
               <button class="close popup-dismiss ml-2">
               <span aria-hidden="true">&times;</span>
               </button>
            </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sessions by channel</h4>
                        <div class="aligner-wrapper">
                            <canvas id="sessionsDoughnutChart" height="210"></canvas>
                            <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                                <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                                <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                            </div>
                        </div>
                        <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                            <div class="d-flex">
                                <span class="square-indicator bg-danger ml-2"></span>
                                <p class="mb-0 ml-2">Assigned</p>
                            </div>
                            <div class="d-flex">
                                <span class="square-indicator bg-success ml-2"></span>
                                <p class="mb-0 ml-2">Not Assigned</p>
                            </div>
                            <div class="d-flex">
                                <span class="square-indicator bg-warning ml-2"></span>
                                <p class="mb-0 ml-2">Reassigned</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body performane-indicator-card">
                        <div class="d-sm-flex">
                            <h4 class="card-title flex-shrink-1">Performance Indicator</h4>
                            <p class="m-sm-0 ml-sm-auto flex-shrink-0">
                                <span class="data-time-range ml-0">7d</span>
                                <span class="data-time-range active">2w</span>
                                <span class="data-time-range">1m</span>
                                <span class="data-time-range">3m</span>
                                <span class="data-time-range">6m</span>
                            </p>
                        </div>
                        <div class="d-sm-flex flex-wrap">
                            <div class="d-flex align-items-center">
                                <span class="dot-indicator bg-primary ml-2"></span>
                                <p class="mb-0 ml-2 text-muted font-weight-semibold">Complaints (2098)</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="dot-indicator bg-info ml-2"></span>
                                <p class="mb-0 ml-2 text-muted font-weight-semibold"> Task Done (1123)</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="dot-indicator bg-danger ml-2"></span>
                                <p class="mb-0 ml-2 text-muted font-weight-semibold">Attends (876)</p>
                            </div>
                        </div>
                        <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Action Toolbar Starts-->
        <div class="row quick-action-toolbar">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header d-block d-md-flex">
                        <h5 class="mb-0">Quick Actions</h5>
                        <p class="ml-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                    </div>
                    <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                            <button type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Add Client</button>
                        </div>
                        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                            <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Create Quote</button>
                        </div>
                        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                            <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Enter Payment</button>
                        </div>
                        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                            <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Create Invoice</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Action Toolbar Ends-->
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-sm-flex align-items-baseline report-summary-header">
                                    <h5 class="font-weight-semibold">Report Summary</h5>
                                    <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row report-inner-cards-wrapper">
                            <div class=" col-md -6 col-xl report-inner-card">
                                <div class="inner-card-text">
                                    <span class="report-title">EXPENSE</span>
                                    <h4>$32123</h4>
                                    <span class="report-count"> 2 Reports</span>
                                </div>
                                <div class="inner-card-icon bg-success">
                                    <i class="icon-rocket"></i>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl report-inner-card">
                                <div class="inner-card-text">
                                    <span class="report-title">PURCHASE</span>
                                    <h4>95,458</h4>
                                    <span class="report-count"> 3 Reports</span>
                                </div>
                                <div class="inner-card-icon bg-danger">
                                    <i class="icon-briefcase"></i>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl report-inner-card">
                                <div class="inner-card-text">
                                    <span class="report-title">QUANTITY</span>
                                    <h4>2650</h4>
                                    <span class="report-count"> 5 Reports</span>
                                </div>
                                <div class="inner-card-icon bg-warning">
                                    <i class="icon-globe-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl report-inner-card">
                                <div class="inner-card-text">
                                    <span class="report-title">RETURN</span>
                                    <h4>25,542</h4>
                                    <span class="report-count"> 9 Reports</span>
                                </div>
                                <div class="inner-card-icon bg-primary">
                                    <i class="icon-diamond"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row income-expense-summary-chart-text">
                            <div class="col-xl-4">
                                <h5>Income And Expenses Summary</h5>
                                <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>
                            </div>
                            <div class=" col-md-3 col-xl-2">
                                <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>
                                <h3>$ 1,766.00</h3>
                            </div>
                            <div class="col-md-3 col-xl-2">
                                <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>
                                <h3>$ 5,698.30</h3>
                            </div>
                            <div class="col-md-6 col-xl-4 d-flex align-items-center">
                                <div class="input-group" id="income-expense-summary-chart-daterange">
                                    <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row income-expense-summary-chart mt-3">
                            <div class="col-md-12">
                                <div class="ct-chart" id="income-expense-summary-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex align-items-center mb-4">
                            <h4 class="card-title mb-sm-0">Products Inventory</h4>
                            <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                        </div>
                        <div class="table-responsive border rounded p-1">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="font-weight-bold">Store ID</th>
                                    <th class="font-weight-bold">Amount</th>
                                    <th class="font-weight-bold">Gateway</th>
                                    <th class="font-weight-bold">Created at</th>
                                    <th class="font-weight-bold">Paid at</th>
                                    <th class="font-weight-bold">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face1.jpg" alt="profile image"> Katie Holmes
                                    </td>
                                    <td>$3621</td>
                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                    <td>04 Jun 2019</td>
                                    <td>18 Jul 2019</td>
                                    <td>
                                        <div class="badge badge-success p-2">Paid</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face2.jpg" alt="profile image"> Minnie Copeland
                                    </td>
                                    <td>$6245</td>
                                    <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2"> Paypal</td>
                                    <td>25 Sep 2019</td>
                                    <td>07 Oct 2019</td>
                                    <td>
                                        <div class="badge badge-danger p-2">Pending</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face3.jpg" alt="profile image"> Rodney Sims
                                    </td>
                                    <td>$9265</td>
                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                    <td>12 dec 2019</td>
                                    <td>26 Aug 2019</td>
                                    <td>
                                        <div class="badge badge-warning p-2">Failed</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image"> Carolyn Barker
                                    </td>
                                    <td>$2263</td>
                                    <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                                    <td>30 Sep 2019</td>
                                    <td>20 Oct 2019</td>
                                    <td>
                                        <div class="badge badge-success p-2">Paid</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex mt-4 flex-wrap">
                            <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                            <nav class="ml-auto">
                                <ul class="pagination separated pagination-info">
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
