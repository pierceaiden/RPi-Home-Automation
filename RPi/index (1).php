<html>
<head>
<title>Light Controller</title>
</head>

<h2>Switch 1</h2>
<form method="post">
<button name="ON1">ON</button>&nbsp;
<button name="OFF1">OFF</button><br>
</form> 
<h2>Switch 2</h2>
<form method="post">
<button name="ON2">ON</button>&nbsp;
<button name="OFF2">OFF</button><br>
</form> 
<h2>Switch 3</h2>
<form method="post">
<button name="ON3">ON</button>&nbsp;
<button name="OFF3">OFF</button><br>
</form> 
<h2>Switch 4</h2>
<form method="post">
<button name="ON4">ON</button>&nbsp;
<button name="OFF4">OFF</button><br>
</form> 
<h2>Switch 5</h2>
<form method="post">
<button name="ON5">ON</button>&nbsp;
<button name="OFF5">OFF</button><br>
</form> 
<h2>Switch 6</h2>
<form method="post">
<button name="ON6">ON</button>&nbsp;
<button name="OFF6">OFF</button><br>
</form> 
<h2>Switch 7</h2>
<form method="post">
<button name="ON7">ON</button>&nbsp;
<button name="OFF7">OFF</button><br>
</form> 
<h2>Switch 8</h2>
<form method="post">
<button name="ON8">ON</button>&nbsp;
<button name="OFF8">OFF</button><br>
</form> 
<h2>Switch ALL</h2>
<form method="post">
<button name="allon">ON</button>&nbsp;
<button name="alloff">OFF</button><br>
</form> 


<?php
if (isset($_POST['ON1']))
{
exec("cd switch;sudo python on1.py");
echo("ON");
}
if (isset($_POST['OFF1']))
{
exec("cd switch;sudo python off1.py");
echo("OFF");
}
if (isset($_POST['ON2']))
{
exec("cd switch;sudo python on2.py");
echo("ON");
}
if (isset($_POST['OFF2']))
{
exec("cd switch;sudo python off2.py");
echo("OFF");
}
if (isset($_POST['ON3']))
{
exec("cd switch;sudo python on3.py");
echo("ON");
}
if (isset($_POST['OFF3']))
{
exec("cd switch;sudo python off3.py");
echo("OFF");
}
if (isset($_POST['ON4']))
{
exec("cd switch;sudo python on4.py");
echo("ON");
}
if (isset($_POST['OFF4']))
{
exec("cd switch;sudo python off4.py");
echo("OFF");
}
if (isset($_POST['ON5']))
{
exec("cd switch;sudo python on5.py");
echo("ON");
}
if (isset($_POST['OFF5']))
{
exec("cd switch;sudo python off5.py");
echo("OFF");
}
if (isset($_POST['ON6']))
{
exec("cd switch;sudo python on6.py");
echo("ON");
}
if (isset($_POST['OFF6']))
{
exec("cd switch;sudo python off6.py");
echo("OFF");
}
if (isset($_POST['ON7']))
{
exec("cd switch;sudo python on7.py");
echo("ON");
}
if (isset($_POST['OFF7']))
{
exec("cd switch;sudo python off7.py");
echo("OFF");
}
if (isset($_POST['ON8']))
{
exec("cd switch;sudo python on8.py");
echo("ON");
}
if (isset($_POST['OFF8']))
{
exec("cd switch;sudo python off8.py");
echo("OFF");
}
if (isset($_POST['allon']))
{
exec("cd switch;sudo python allon.py");
echo("ALL ON");
}
if (isset($_POST['alloff']))
{
exec("cd switch;sudo python alloff.py");
echo("ALL OFF");
}
?>

</html>

