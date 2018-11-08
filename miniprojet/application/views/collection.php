<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Preparations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Miniprojet</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">        
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
  </head>
  <body>
  <div class="container">
    <h1>Liste des Pokemons</h1>
    

    <h3>Login : <?php echo ($_SESSION['loginName']);?></h3>
    <br />
    <button class="btn btn-success" onclick="add_collection()"><i class="glyphicon glyphicon-plus"></i> Add collection</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Pokemon ID</th>
          <th>Pokemon Identifier</th>
          <th>Pokemon Height</th>
          <th>Pokemon Weight</th>
          <th>Pokemon Base Experience</th>
          <th style="width:125px;">Action</p></th>
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
          <td>
              <?php if(isset($_SESSION['loginName']) && ($_SESSION['loginName']=='admin')){ ?>
              <button class="btn btn-warning" onclick="edit_collection(<?php echo $pokemon->pokemon_id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
              <button class="btn btn-danger" onclick="delete_collection(<?php echo $pokemon->pokemon_id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
            <?php } if(isset($_SESSION['loginName']) && ($_SESSION['loginName'] <> 'admin')){ ?>
                <button class="btn btn-warning" onclick="edit_my_collection(<?php echo $pokemon->pokemon_id;?>)"><i class="glyphicon glyphicon-plus"></i></button>
                <button class="btn btn-danger" onclick="delete_my_collection(<?php echo $pokemon->pokemon_id;?>)"><i class="glyphicon glyphicon-minus"></i></button>
            <?php } ?>

            </td>
          </tr>
        <?php }?>
      </tbody>
      <tfoot>
        <tr>
        <th>Pokemon ID</th>
        <th>Pokemon Identifier</th>
        <th>Pokemon Height</th>
        <th>Pokemon Weight</th>
        <th>Pokemon base experience</th>
        <th>Action</th>
        </tr>
      </tfoot>
    </table>
     
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script> 	  
  
  <script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );

    var save_method; //for save method string
    var table;
 
    function add_collection()
    {
      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Add Pokemon');
    }
 
    function edit_collection(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('collection/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="pokemon_id"]').val(data.pokemon_id);
            $('[name="identifier"]').val(data.identifier);
            $('[name="height"]').val(data.height);
            $('[name="weight"]').val(data.weight);
            $('[name="base_experience"]').val(data.base_experience);
  
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Pokemon'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
 
    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('collection/add')?>";
      }
      else
      {
        url = "<?php echo site_url('collection/update')?>";
      }
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }
 
    function delete_collection(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('collection/delete_by_id')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
 
  </script>
 
  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title alert alert-info">Collection Form</h3>
      </div>
      <div class="modal-body form">
        
      <form action="#" id="form" class="form-horizontal">
          
        <input type="hidden" value="" name="pokemon_id"/>
          
          <div class="form-body">
            
            <div class="form-group">
              <label class="control-label col-md-3">Identifier</label>
              <div class="col-md-9">
                <input name="identifier" placeholder="Identifier" class="form-control" type="text">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-md-3">Height</label>
              <div class="col-md-9">
                <input name="height" placeholder="height" class="form-control" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Weight</label>
              <div class="col-md-9">
								<input name="weight" placeholder="Weight" class="form-control" type="text">
              </div>
            </div>
        
            <div class="form-group">
							<label class="control-label col-md-3">Base Experience</label>
							<div class="col-md-9">
								<input name="base_experience" placeholder="Base experience" class="form-control" type="text">
							</div>
						</div>
 
          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->
 
  </body>
</html>