<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Pokemon ID</th>
			<th>Pokemon Identifier</th>
			<th>Pokemon Height</th>
			<th>Pokemon Weight</th>
			<th>Pokemon Base Experience</th>
			<!-- <th style="width:125px;">Action -->
			</p></th>
		</tr>
	</thead>
  <tbody>
		<?php foreach($pokemons as $pokemon){?>
			<tr>
				<td><?php echo $pokemon->pokemon_id;?></td>
				<td><?php echo $pokemon->identifier;?></td>
				<td><?php echo $pokemon->height;?></td>
				<td><?php echo $pokemon->weight;?></td>
				<td><?php echo $pokemon->base_experience;?></td>
<!-- 					<td>
					<button class="btn btn-warning" onclick="edit_pokemon(<?php echo $pokemon->pokemon_id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
					<button class="btn btn-danger" onclick="delete_pokemon(<?php echo $pokemon->pokemon_id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
				</td>
-->					</tr>
		<?php }?>
  </tbody>
  <tfoot>
        <tr>
          <th>ID</th>
          <th>Identifier</th>
          <th>Height</th>
          <th>Weight</th>
          <th>base experience</th>
          <!-- <th>Action</th> -->
        </tr>
  </tfoot>
</table>
