<?php 
    if (empty($_GET['search'])) {
        echo "Pretrazite nesto gore";
    } else echo $_GET['search']; 
?>

<div id="text"> </div>
<script type = "text/javascript" language = "javascript">
    $(document).ready(function() {
        $("#search").submit(function(event){
            $('#text').load('some data from json....');
        });
    });
</script>