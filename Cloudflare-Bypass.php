<?php
echo "  
    ____                  __                  __    ______                     
   / __ \  ___    ____   / /_  ___    _____  / /_  / ____/  ____    _____  ___ 
  / /_/ / / _ \  / __ \ / __/ / _ \  / ___/ / __/ / /      / __ \  / ___/ / _ \
 / ____/ /  __/ / / / // /_  /  __/ (__  ) / /_  / /___   / /_/ / / /    /  __/
/_/      \___/ /_/ /_/ \__/  \___/ /____/  \__/  \____/   \____/ /_/     \___/ 
                   Cloudflare Bypass by the PentestCore Team
                       WebSite : https://PentestCore.com
                                                                        
";
echo "URL HTTP:// ";
$site = trim(fgets(STDIN));
$ip = file_get_contents("https://tools.pentestcore.com/cloudflare-bypass-c.php?byc="."$site");
echo "$ip";