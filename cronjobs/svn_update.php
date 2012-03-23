<?php

#echo exec("php /var/frontend/cronjobs/gen_ajax.php");

$return = "/var/frontend/web/portal: \n".exec('svn up /var/frontend/web/portal');
$return .= "\n\n/var/frontend/apps/frontend/templates: \n".exec('svn up /var/frontend/apps/frontend/templates');

echo $return;

mail('emersonestrella@gmail.com, cristovamruizjr@gmail.com, renata.nreno@gmail.com', 'SVN Update', $return);
