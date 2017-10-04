<?php require 'partials/header.php';
session_start();
ob_start();
?>

<h1>All Users</h1>

<?php foreach ($users as $user): ?>
<form method="POST" action="/users/delete">
	<li>
		<input type="hidden" name="name" value="<?=$user->name;?>">
		<?=$user->name;?>
		<button type="submit">x</button>
	</li>
</form>
<?php endforeach?>

<h1>Submit your name</h1>

<form method="POST" action="/users">
	<input type="text" name="name">
	<button type="submit">Submit</button>
</form>
<?php var_dump($_SESSION['user']);?>
<?php require 'partials/footer.php'?>