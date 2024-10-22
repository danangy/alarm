<html>
<head>
    <title>Cara Menampilkan Jam Berjalan di PHP</title>
</head>
<body>
    <?php
        date_default_timezone_set("Asia/jakarta");
    ?>
    <h4>Menampilkan Jam Berjalan Realtime Server</h4>
    <p>Jam Digital: <b><span id="jam" style="font-size:24"></span></b></p>
    
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
</body>
</html>