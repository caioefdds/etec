<?php
session_start();
if(!isset($_SESSION['login']))
{
?>
<script type="text/javascript">
window.location = 'login.php';
</script>
<?php
die;
}
else
{
	echo '';

}
?>