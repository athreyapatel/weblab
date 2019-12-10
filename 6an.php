<?php
    print("<h1>Refresh Page</h1><br/>");
    session_start();
    if(isset($_SESSION['views']))
        $_SESSION['views']=$_SESSION['views']+1;
    else    
        $_SESSION['views']=1;
    echo "Total=".$_SESSION['views'];
?>