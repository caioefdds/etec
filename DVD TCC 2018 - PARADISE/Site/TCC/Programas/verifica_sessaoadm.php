<?php
session_start();
if(!isset($_SESSION['nivel']))
{
?>
<script type="text/javascript">
window.location = 'arearestrita.php';
</script>
<?php
die;
}
else
{
	echo '';

}
?>