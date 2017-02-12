<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

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

</body>
</html>