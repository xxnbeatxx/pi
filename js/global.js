//On Load new member Page
$(document).ready(  function()
                    {
                       $('#content').load('content/new_member.php');
                    }
                );
//Handle Nav Clicks
$('div#nav a').click(   function()
                        {
                            var page=$(this).attr('href');
                            $('#content').load(page+'.php');
                            return false;
                        }
                    );
                    