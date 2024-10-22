<!DOCTYPE html>
<html>
<head>
    <title>Notifikasi</title>
    <script type="text/javascript">
    function notifyMe(msg_title, msg_body, redirect){
        var granted = 0;

        if (!("Notification" in window)) {
            alert("This browser does not support dekstop notification");
        }

        else if (Notification.permission === "granted"){
            granted = 1;
        }

        else if (Notification.permission !== 'denied'){
            Notification.requestPermission(function (permission) {
                if (permission === "granted") {
                    granted = 1;
                }
            });
        }
        if (granted == 1) {
            var notification = new Notification(msg_title, {
                body: msg_body,
                icon: 'icon1.png'
            });
            if (redirect) {
                notification.oncload = function() {
                    window.location.href = redirect_onclick;
                }
            }
        }
    }
</script>
</head>
<body>
    <body onload="notifyMe ('saatnya melakukan servis hahaha') "></body>
</body>
