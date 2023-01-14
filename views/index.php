<h2>List of users</h2>

<div class="d-flex flex-wrap justify-content-lg-end">
	<form class="col-12 col-lg-auto mb-3 mb-lg-0">
		<input type="search" class="form-control" placeholder="Search by city" aria-label="Search by city" id="searchbox">
	</form>
</div>

<table class="table table-striped" id="userlist">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>Phone</th>
			<th>City</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($users as $user): ?>
		<tr>
			<td><?=$user->getName()?></td>
			<td><?=$user->getEmail()?></td>
			<td><?=$user->getPhone()?></td>
			<td class="city"><?=$user->getCity()?></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>

<div class="card">
	<div class="card-header">
		Add new user
	</div>

	<div class="card-body">
		<form method="post" action="create.php" id="addrow">
			<div id="addrowalerts"></div>

			<div class="row mb-3">
				<label for="name" class="col-sm-2 col-form-label">Name:</label>
				<div class="col-sm-10">
					<input name="name" type="text" id="name" class="form-control"/>
				</div>
			</div>

			<div class="row mb-3">
				<label for="email" class="col-sm-2 col-form-label">E-mail:</label>
				<div class="col-sm-10">
					<input name="email" type="text" id="email" class="form-control"/>
				</div>
			</div>

			<div class="row mb-3">
				<label for="phone" class="col-sm-2 col-form-label">Phone:</label>
				<div class="col-sm-10">
					<input name="phone" type="text" id="phone" class="form-control"/>
				</div>
			</div>

			<div class="row mb-3">
				<label for="city" class="col-sm-2 col-form-label">City:</label>
				<div class="col-sm-10">
					<input name="city" type="text" id="city" class="form-control"/>
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