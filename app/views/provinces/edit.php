<div class="container-fluid">
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel-body">
			<div class="row">
				<div class="pull-right">
					<a href="<?php echo url();?>/provinces/index" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class="fa fa-refresh"></i> Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Provinces</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="<?php echo url();?>/provinces">
					<div class="form-group required">
						<label class="col-sm-2 control-label">Provinces Name</label>
						<div class="col-sm-6">
							<input type="text" name="name" value="<?php echo $data->name;?>"  class="form-control" required/>
							<input type="hidden" name="id" value="<?php echo $data->id;?>"/>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Regions</label>
						<div class="col-sm-6">
							<select name="region_id" id="region_id" class="form-control">
								<option></option>
								<?php foreach($regions as $r): ?>
									<?php if($r->id==$data->country->region->id): ?>
										<option value="<?php echo $r->id;?>" selected><?php echo $r->name;?></option>
									<?php Else: ?>
										<option value="<?php echo $r->id;?>"><?php echo $r->name;?></option>
									<?php EndIf; ?>		
								<?php EndForeach; ?>	
							</select>
						</div>
					</div>
					<div class="form-group required">
						<label class="col-sm-2 control-label">Country</label>
						<div class="col-sm-6">
							<select name="country_id" id="country_id" class="form-control">
								<option></option>
								<?php foreach($country as $c): ?>
									<?php if($c->id==$data->country->id): ?>
										<option value="<?php echo $c->id;?>" selected><?php echo $c->name;?></option>
									<?php Else: ?>
										<option value="<?php echo $c->id;?>"><?php echo $c->name;?></option>
									<?php EndIf; ?>		
								<?php EndForeach; ?>
							</select>
						</div>
					</div>
					<div class="pull-right">
						<button type="reset" data-toggle="tooltip" title="Reset Form" class="btn btn-warning">
							<i class="fa fa-refresh"></i> Reset
						</button>
						<button type="submit" data-toggle="tooltip" title="Save" class="btn btn-primary">
							<i class="fa fa-save"></i> Save
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){

		 $('#region_id').change(function(){
            $('#country_id').html(empty('country'));
            $('#province_id').html(empty('province'));
            $('#city_id').html(empty('city'));
            var value = $(this).val();
            var country = LoadHTML('provinces/country/'+value);
            $('#country_id').html(country);
        });

	});
</script>