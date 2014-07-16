<!doctype html>
<html>
<?php
require_once'common.php';
html_header();
?>

<body> 

    <p>
        <img src="img/NeverLan_logo_small.png" title="NeverLAN" alt="NeverLAN logo" width="15%" id="top_left_logo"/>
    
        <div id="nav">
            <a class="nav_links" id="new_member" OnMouseOver="change_text('New')" OnMouseOut="change_text('New Member')" href="content/new_member">New</a>
            |
            <a class="nav_links" id="current_members" OnMouseOver="change_text('Current')" OnMouseOut="change_text('Current Members')" href="content/current_members">Current</a>
            |
            <a class="nav_links" id="member_log" OnMouseOver="change_text('Log')" OnMouseOut="change_text('Entry Log')" href="content/entry_log">Log</a>
        </div>
    </p>
    <br>
    <div id="content"></div>
        <form action="index.php" method="post">
        <input id="bye" type="submit" name="logout" value="logout" />
</form>
    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    <script>
        function change_text(unique_id)
        {
            if(unique_id == 'New')
            {
                document.getElementById("nav").style.width = '43%';
                document.getElementById("new_member").innerHTML = 'New Member';
            }
            if(unique_id == 'New Member')
            {
                document.getElementById("nav").style.width = '30%';
                document.getElementById("new_member").innerHTML = 'New';
            }
            if(unique_id == 'Current')
            {
                document.getElementById("nav").style.width = '45%';
                document.getElementById("current_members").innerHTML = 'Current Members';
            }
            if(unique_id == 'Current Members')
            {   
                document.getElementById("nav").style.width = '30%';
                document.getElementById("current_members").innerHTML = 'Current';
            }
             if(unique_id == 'Log')
            {
                document.getElementById("nav").style.width = '40%';
                document.getElementById("member_log").innerHTML = 'Entry Log';
            }
            if(unique_id == 'Entry Log')
            {
                document.getElementById("nav").style.width = '30%';
                document.getElementById("member_log").innerHTML = 'Log';
            }
        }
        
    </script>
</body>
</html>