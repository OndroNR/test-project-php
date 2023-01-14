

<h2>List of users</h2>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>City</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user): ?>
		<tr>
			<td><?=$user->getName()?></td>
			<td><?=$user->getEmail()?></td>
			<td><?=$user->getCity()?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div class="card">
	<div class="card-header">
		Add new user
	</div>

	<div class="card-body">
		<form method="post" action="create.php">
			<div class="row mb-3"">
				<label for="name" class="col-sm-2 col-form-label">Name:</label>
				<div class="col-sm-10">
					<input name="name" input="text" id="name" class="form-control"/>
				</div>
			</div>

			<div class="row mb-3"">
				<label for="email" class="col-sm-2 col-form-label">E-mail:</label>
				<div class="col-sm-10">
					<input name="email" input="text" id="email" class="form-control"/>
				</div>
			</div>

			<div class="row mb-3"">
				<label for="city" class="col-sm-2 col-form-label">City:</label>
				<div class="col-sm-10">
					<input name="city" input="text" id="city" class="form-control"/>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-10 offset-sm-2">
					<button class="form-control btn-primary">Add</button>
				</div>
			</div>
		</form>
	</div>
</div>