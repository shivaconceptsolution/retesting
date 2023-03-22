<?php
$basic = 45000;
$ta = 200;
$da = 500;
$comm=300;
$pf=500;
$nl = 5;
$tsal = $basic+$ta+$da+$comm+$pf;
$sal = ($basic+$ta+$da+$comm-$pf);
$gsal = $sal-(($sal/30)*$nl);
echo "Gross Salary is ",$gsal;


?>