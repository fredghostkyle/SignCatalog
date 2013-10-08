<?php
    header('Location: http://ASL.FGKServers.com/home/#none');
?>

<html>
<title>One moment...</title>
<p>One moment....</p>
    
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.js"></script>
<script type="text/javascript">
   $(document).ready(function () {
      setTimeout(function () {
         $("body").append("<p>Seems like you are here for a while. Click <b><a href=\"/home/#none_JS\">Here</a></b> to go!").fadeIn(15);
      }, 6000);
   });
    </script>
</html>