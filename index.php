<?php
    require_once'common.php';
    html_header();
?>


    <body onLoad="all_upper()">
        <script type="text/javascript">
                function all_upper()
                {
                    document.getElementById("pass").style.textTransform = "uppercase";
                }
                
        </script>
        <?php
            if($_SESSION['t'] == true)
            {
                echo'<img id="center_logo" src="img/NeverLan_logo.png" alt="NeverLAN logo">';
                echo'<a class="bottom_bar" id="crud_button" href="crud.php">Continue</a>';
            }
            else
            {
                echo' <img id="center_logo" src="img/Red_Logo.png" alt="NeverLAN logo">';
                echo'   <form name="input" action="index.php" method="post">
            	            <div class="pass">
            	                <input onchange="all_upper()" class="bottom_bar" type="password" id="pass" name="password">
                            </div>
                        </form> ';
            }
            html_footer();
        ?>
</html>