<h2 class="text-center">Assemble A Robot</h2>
<div id="combRobot" class="container-fluid">
    <table id="robotsTable" class="table table-striped table-bordered">
        <tr>
        <th>Robot Top</th>
        <th>Robot Torso</th>
        <th>Robot Bottom</th>
        </tr>
        {robots}
            <tr>
            <td><input id="topCheck" type="checkbox" />{top}</td>
            <td><input id="torsoCheck" type="checkbox" />{torso}</td>
            <td><input name="bottomCheck" type="checkbox" />{bottom}</td>
            </tr>
        {/robots}
    </table>
	<div>
		<button type="button" id="assemble" class="btn btn-primary btn-lg">Assemble</button>
	</div>
 </div>
 
 <h2 class="text-center">Select Robot Parts</h2>
 <div id="parts" class="container-fluid">
	<table id="partsTable" class="table table-striped table-bordered">
		<tr>
			<th>Robot Top</th>
			<th>Robot Torso</th>
			<th>Robot Bottom</th>
		</tr>
		
		{robots}
			<tr>
			<td><input id="topSelect" type="checkbox" />{top}</td>
            <td><input id="torsoSelect" type="checkbox" />{torso}</td>
            <td><input name="bottomSelect" type="checkbox" />{bottom}</td>
			</tr>
		{/robots}
	</table>
	<div>
		<button type="button" id="select" class="btn btn-primary btn-lg">Select</button>
	</div>
</div>

