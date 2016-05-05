<?php

$MERCHANT_ID = 123456;
$passkey = "muoki";
$TIMESTAMP = 201602051038;

$PASSWORD  = base64_encode(hash("sha256", $MERCHANT_ID.$passkey.$TIMESTAMP));
echo $PASSWORD;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <div style="width: 600px; border: 5px; border-color: #0093af; height: 400px;" id="aww-wrapper">
    <!-- Element in which the whiteboard will be shown
              – modify style as needed -->
    </div>
    <script src="https://awwapp.com/static/widget/js/aww.min.js">
    </script>
    <script type="text/javascript">
        var aww = new AwwBoard('#aww-wrapper', {
        });
    </script>
</body>
</html>