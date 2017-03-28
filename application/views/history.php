<div class="container">
  <h2>History</h2>                                            
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>TransID</th>
        <th>Transaction Type</th>
        <th>RobotID</th>
        <th>PartsID</th>
        <th>Shipments</th>
        <th>Date</th>
		<th>Time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  {history}
        <td>{TransID}</td>
        <td>{Transaction Type}</td>
        <td>{RobotID}</td>
        <td>{PartsID}</td>
        <td>{Shipments}</td>
        <td>{Date}</td>
		<td>{Time}</td>
      </tr>
	  {/history}
    </tbody>
  </table>
  </div>
</div>
