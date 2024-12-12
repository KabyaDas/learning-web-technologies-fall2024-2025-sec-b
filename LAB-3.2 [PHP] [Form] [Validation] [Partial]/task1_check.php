<?php
$companyRecord = file_get_contents('task1.xml');
$companies = new SimpleXMLElement($companyRecord);
echo $companies -> company[0]->name;
?>