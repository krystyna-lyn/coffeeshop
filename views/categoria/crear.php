<h1>Create new category</h1>

<form action="<?=base_url?>categoria/save" method="POST">
	<label for="nombre">Name</label>
	<input type="text" name="nombre" required/>
	
	<input type="submit" value="Save" />
</form>