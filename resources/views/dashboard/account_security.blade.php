@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Account Einstellungen </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Armaturenbrett</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account Einstellungen</li>
                </ol>
            </nav>
        </div>
        <div class="container-fluid">
            <h3>Erweiterte Sicherheitseinstellungen für die Anmeldung:</h3>
            <br><br>
            <form method="post">
                <input type="hidden" name="form_id" value="16979594522201">
                <input type="hidden" name="form_token" value="6d3f9a31aa40c36d7741d26cb551e9cf">
                <input type="hidden" name="a" value="security">
                <input type="hidden" name="action" value="save">
                Erkennen Sie die Empfindlichkeit bei IP-Adressänderungen<br>
                <input type="radio" name="ip" value="disabled" checked="">Deaktiviert<br>
                <input type="radio" name="ip" value="medium">Mittel<br>
                <input type="radio" name="ip" value="high">Hoch<br>
                <input type="radio" name="ip" value="always">Paranoisch<br><br>
                Browserwechsel erkennen<br>
                <input type="radio" name="browser" value="disabled" checked="">Deaktiviert<br>
                <input type="radio" name="browser" value="enabled">Ermöglicht<br><br>
                <input type="submit" value="Set" class="form-control btn btn-primary sbmt">
            </form>
            <h3>Zwei-Faktor-Authentifizierung</h3>
            <form method="post" name="mainform"><input type="hidden" name="form_id" value="16979594522201"><input type="hidden" name="form_token" value="6d3f9a31aa40c36d7741d26cb551e9cf">
                <input type="hidden" name="a" value="security">
                <input type="hidden" name="action" value="tfa_save">
                <input type="hidden" name="time" value="1697959453608">
                1. Installieren <a href="http://m.google.com/authenticator" targe="_blank">Google Authenticator</a> auf Ihrem Mobilgerät.<br>
                2. Ihr Geheimcode lautet: <b>VHP5WGBMSZN4UXS5</b> <input type="hidden" name="tfa_secret" value="VHP5WGBMSZN4UXS5"><br>
                <img src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2Fblitzexchange.org%3Fsecret%3DVHP5WGBMSZN4UXS5"><br>
                3. Bitte geben Sie das Zwei-Faktor-Token von Google Authenticator ein, um die korrekte Einrichtung zu überprüfen:<br>
                <input type="text" name="code" class="inpts"> <input type="submit" value="Aktivieren" class="sbmt">
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
