<?php
$session_id = 0;

$reg = "
<h1>Please register</h1>
<p>Session ID = $session_id</p>
<input type='text' placeholder='Login'>
<br>
<input type='text' placeholder='Password'>
";
$login = "
<h1>You are already registered</h1>
<p>Session ID $session_id</p>
<br>
<a href='#'>Login</a>
";

if ($session_id == 0)
{
    echo $reg;
} else
{
    echo $login;
}