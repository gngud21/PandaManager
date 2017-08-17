<h2 class="text-center">All Robot Parts</h2>
<div id="topTable" class="col-xs-4 container-fluid">
	<table id="topParts" class="table table-striped table-bordered table-responsive">
		<tr>
			<th class="col-md-1">Top</th>
		</tr>
		{top}
			<tr>
				<td class="col-md-1"><input name="topCheck" data-attr ="{id} {model} {piece}" type="radio" value="{piece}"/>{model}{piece}</td>
			</tr>
		{/top}
	</table>
</div>
	
<div id="torsoTable" class="col-xs-4 container-fluid">
	<table id="torsoParts" class="table table-striped table-bordered table-responsive">
		<tr>
			<th class="col-md-1">Torso</th>
		</tr>
		{torso}
			<tr>
				<td class="col-md-1"><input name="torsoCheck" data-attr ="{id}{model}{piece}" type="radio" value="{piece}"/>{model}{piece}</td>
			</tr>
		{/torso}
	</table>
</div>

<div id="bottomTable" class="col-xs-4 container-fluid">
	<table id="bottomParts" class="table table-striped table-bordered table-responsive">
		<tr>
			<th class="col-md-1">Bottom</th>
		</tr>
		{bottom}
			<tr>
				<td class="col-md-1"><input name="bottomCheck" data-attr ="{id} {model} {piece}" type="radio" value="{piece}"/>{model}{piece}</td>
			</tr>
		{/bottom}
	</table>
</div>
	
	
<div>
	<button type="button" id="return" class="btn btn-primary btn-lg">Return</button>
	<button type="button" id="build" class="btn btn-primary btn-lg">Build</button>
</div>


<h2 class="text-center">Assembled Robots</h2>
<div id="combRobot" class="container-fluid">
    <table id="robotsTable" class="table table-striped table-bordered">
        <tr>
			<th></th>
			<th>Robot Top</th>
			<th>Robot Torso</th>
			<th>Robot Bottom</th>
        </tr>
        {robots}
            <tr>
			<td><input name="AssBotsCheck" type="checkbox"/></td>
            <td>{Top}</td>
            <td>{Torso}</td>
            <td>{Bottom}</td>
            </tr>
        {/robots}
    </table>
	<div>
		<button type="button" id="send" class="btn btn-primary btn-lg">Send</button>
	</div>
 </div>
 
 <script>
	$(document).ready(function() {
		$('#return').click(function() {
			if($('input[name="partsCheck"]:checked').val()) {

				//test for button clicks later implement an actual working function for assign 2
				//alert('returning part');
			}
		});
		
		// builds a robot; sends the selected radio box' data to controller function in assembly/build
		$('#build').click(function() {
			if($('input[name="topCheck"]:checked').val() && $('input[name="torsoCheck"]:checked').val() && $('input[name="bottomCheck"]:checked').val()) {
				var top = $('input[name="topCheck"]:checked').val();
				var torso = $('input[name="torsoCheck"]:checked').val();
				var bottom = $('input[name="bottomCheck"]:checked').val();
				
				console.log(top);
				
				$.ajax({
					type: 'POST',
					url: '<?php echo base_url();?>' + 'Assembly/Build',
					dataType: 'JSON',
					data: {top : top, torso: torso, bottom: bottom},
					success: function(data) {
						if(data == 1) {
							location.reload();
						}
					}
				});
			}else {
				alert('You must choose a top, torso, and bottom to build a bot!');
			}
		});
		
		$('#send').click(function() {
			if($('input[name="AssBotsCheck"]:checked').val()) {
				//test for button clicks later implement an actual working function for assign 2
				//alert('sending to head office');
			}
		});
	});
</script>
 

