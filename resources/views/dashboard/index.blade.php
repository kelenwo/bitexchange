@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper mt-0+">
        <div class="mt-3">
            <h4 class="font-weight-medium d-lg-flex">Welcome {{ Auth::user()->name }}!</h4>
        </div>
        <div class="col-md-12 grid-margin px-0 mx-0">
            <div class="card">
                <div class="card-body pt-2">
                    <div class="row report-inner-cards-wrapper">
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Wallet Balance</span>
                                <h3>€{{ number_format($wallet, 2) }}</h3>
                            </div>
                            <div class="inner-card-icon bg-info rounded-3">
                                <i class="icon-wallet"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Earnings</span>
                                <h3>€{{ number_format($profit + $referrals, 2) }}</h3>
                            </div>
                            <div class="inner-card-icon bg-danger rounded-3">
                                <i class="icon-briefcase"></i>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Investments</span>
                                <h3>€{{ number_format($withdrawals, 2) }}</h3>
                            </div>
                            <div class="inner-card-icon bg-dark rounded-3">
                                <i class="icon-credit-card"></i>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl report-inner-card px-3">
                            <div class="inner-card-text">
                                <span class="report-title">Total Referral Earnings</span>
                                <h3>€{{ number_format($referrals, 2) }}</h3>
                            </div>
                            <div class="inner-card-icon bg-primary rounded-3">
                                <i class="icon-people"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-12">
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="height:100%;width:100%">
                    <div id="tradingview_df7e5" style="height:28rem;width:100%"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "COINBASE:BTCUSD",
                                "interval": "1",
                                "timezone": "Europe/Berlin",
                                "theme": "light",
                                "style": "1",
                                "locale": "en",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_df7e5"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <div class="col-md-12">
                <h4 class="mt-4 mb-2"> Forex Market Fundamental Data</h4>
                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container" style="min-height: 28rem; width:100%">
                    <div class="tradingview-widget-container__widget" style="min-height: 28rem; width:100%"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                        {
                            "width": "100%",
                            "height": "100%",
                            "currencies": [
                            "EUR",
                            "USD",
                            "JPY",
                            "GBP",
                            "BTC",
                            "ETH",
                            "LTC",
                            "CHF",
                            "AUD",
                            "CAD",
                            "NZD"
                        ],
                            "isTransparent": false,
                            "colorTheme": "light",
                            "locale": "en"
                        }
                    </script>
                </div>
                <!-- TradingView Widget END -->

            </div>
        </div>
    </div>
@endsection
