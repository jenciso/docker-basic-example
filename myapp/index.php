<?php

echo "IP do container: <br \>";
print $_SERVER['SERVER_ADDR'];
echo "<p>";
echo "NAME do container: <br \>";
echo gethostname();
echo "<br \>";
echo "ENV_VAR do container: <br \>";
print getenv('ENV_VAR');
