<h2 class="text-center">All Robot Parts</h2>
<div id="allParts" class="container-fluid">
	<table id="allPartsTable" class="table table-striped table-bordered">
		<tr>
			<th></th>
			<th>Part Line</th>
			<th>Part Model</th>
			<th>Part Section</th>
			<th>Manufacture Date</th>
			<th>Manufacture Location</th>
		</tr>
		{parts_model}
			<tr>
				<td><input name="partsCheck" type="checkbox"/></td>
				<td>{PartLine}</td>
				<td>{PartModel}</td>
				<td>{PartSection}</td>
				<td>{ManuDate}</td>
				<td>{ManuLocat}</td>
			</td>
		{/parts_model}
	</table>
	<div>
		<button type="button" id="return" class="btn btn-primary btn-lg">Return</button>
		<button type="button" id="build" class="btn btn-primary btn-lg">Build</button>
	</div>
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
            <td>{top}</td>
            <td>{torso}</td>
            <td>{bottom}</td>
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
				//alert('returning part');
			}
		});
		
		$('#build').click(function() {
			if($('input[name="partsCheck"]:checked').val()) {
				//alert('building robot');
			}
		});
		
		$('#send').click(function() {
			if(($('input[name="AssBotsCheck"]:checked').val()) {
				//alert('sending to head office');
			}
		});
	});
</script>
 

