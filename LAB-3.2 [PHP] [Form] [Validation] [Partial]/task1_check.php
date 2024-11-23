<?php
$companyRecord = file_get_contents('task1.xml');
//echo $studentsData;
$companies = new SimpleXMLElement($companyRecord);
echo $companies -> company[0]->name;
?>