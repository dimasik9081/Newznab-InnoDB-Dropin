<?php
require_once("config.php");
require_once(dirname(__FILE__)."/../framework/db.php");

$db = new DB();

echo "This script will convert only your parts and binaries table to InnoDB.\n";
echo "This may take a while depending on how large your tables are. Do not stop this script.  It will finish.\n\n";

echo "Converting the parts table to InnoDB\n";
$db->query("ALTER TABLE parts ENGINE=InnoDB;");
echo "Finished converting the parts table to InnoDB.\n\n";

echo "Converting the binaries table to InnoDB\n";
$db->query("ALTER TABLE binaries ENGINE=InnoDB;");
echo "Finished converting the binaries table to InnoDB.\n\n";

?>
