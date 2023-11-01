@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Account Settings </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account Settings</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <h3>Advanced login security settings:</h3>
            <br><br>
            <form method="post">
                <input type="hidden" name="form_id" value="16979594522201">
                <input type="hidden" name="form_token" value="6d3f9a31aa40c36d7741d26cb551e9cf">
                <input type="hidden" name="a" value="security">
                <input type="hidden" name="action" value="save">
                Detect IP Address Change Sensitivity<br>
                <input type="radio" name="ip" value="disabled" checked="">Disabled<br>
                <input type="radio" name="ip" value="medium">Medium<br>
                <input type="radio" name="ip" value="high">High<br>
                <input type="radio" name="ip" value="always">Paranoic<br><br>
                Detect Browser Change<br>
                <input type="radio" name="browser" value="disabled" checked="">Disabled<br>
                <input type="radio" name="browser" value="enabled">Enabled<br><br>
                <input type="submit" value="Set" class="form-control btn btn-primary sbmt">
            </form>
            <h3>Two Factor Authentication</h3>
            <form method="post" name="mainform"><input type="hidden" name="form_id" value="16979594522201"><input type="hidden" name="form_token" value="6d3f9a31aa40c36d7741d26cb551e9cf">
                <input type="hidden" name="a" value="security">
                <input type="hidden" name="action" value="tfa_save">
                <input type="hidden" name="time" value="1697959453608">
                1. Install <a href="http://m.google.com/authenticator" targe="_blank">Google Authenticator</a> on your mobile device.<br>
                2. Your Secret Code is: <b>VHP5WGBMSZN4UXS5</b> <input type="hidden" name="tfa_secret" value="VHP5WGBMSZN4UXS5"><br>
                <img src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2Fblitzexchange.org%3Fsecret%3DVHP5WGBMSZN4UXS5"><br>
                3. Please enter two factor token from Google Authenticator to verify correct setup:<br>
                <input type="text" name="code" class="inpts"> <input type="submit" value="Enable" class="sbmt">
            </form>
            <script language="javascript">
                document.mainform.time.value = (new Date()).getTime();

                function checkform() {
                    if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
                        alert("Please type code!");
                        document.mainform.code.focus();
                        return false;
                    }
                    return true;
                }
            </script>
        </div>
    </div>
@endsection
