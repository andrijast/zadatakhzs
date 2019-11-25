<!DOCTYPE html>
<html>

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/zadatakhzs/templates/head.php' ?>
    <title>Name - Mapa</title>
</head>

<body>
    <?php include ROOT.'/zadatakhzs/templates/header.php' ?>
    <div>
        <?php echo str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"])); ?> 
    </div>

    <div id="googleMap" style="width:100%;height:400px;"></div>

    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(51.508742,-0.120850),
                zoom:5,
            };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>

    <?php include ROOT.'/zadatakhzs/templates/footer.php'; ?>
</body>

</html>