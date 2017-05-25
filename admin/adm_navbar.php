<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="Create new navbar item" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add new navbar item</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="form-group">
						<label for="value">Value:</label>
						<input type="text" name="value" id="value" class="form-control" placeholder="Ex. &quot;Home&quot;" required>
					</div>
					<div class="form-group">
						<label for="nav_link">Select a page to link to:</label>
						<select name="nav_link" class="form-control">
							<?php 
								// Set directory
								$dir = "../*.php";
								foreach (glob($dir) as $page): // Foreach file in frontend directory, echo as option in select
									$page = str_replace("../", "", $page); // Strip the '../' in front of filenames
							?>
							<option value="<?= $page; ?>"><?= $page; ?></option>
							<?php
								endforeach; // End foreach (easier for when opening and closing php-tags inside foreach, etc.)
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="new_nav_link">Or create a new page:</label>
						<input type="text" name="new_nav_link" id="new_nav_link" class="form-control" placeholder="Ex. &quot;contact.php&quot;" required>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<h1>Manage Navbar</h1>

<p>This is the navbar management page. For making updates to the navbar on frontend.</p>
<button class="btn btn-success" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i> New navitem</button>
<br><br>
<h2>Navbar Items</h2>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Value</th>
			<th>Link</th>
			<th>Actions</th>
		</thead>
		<tbody>
			<?php 
				$result = $db->query("SELECT * FROM nav");
				while($row = $result->fetch_assoc()):
			?>
			<tr>
				<td><?= $row['nav_id']; ?></td>
				<td><?= $row['nav_name']; ?></td>
				<td><?= $row['nav_link']; ?></td>
			</tr>
			<?php endwhile;
				if($result->num_rows === 0):
			?>
			<tr>
				<td colspan="4" class="text-center">No navbar items at the moment.</td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</div>