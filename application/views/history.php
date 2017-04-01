<div class="container">
  <h2>History</h2>                                            
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Model</th>
		<th>Plant</th>
		<th>Stamp</th>
      </tr>
    </thead>
    <tbody>
	{history}
      <tr>
        <td>{id}</td>
        <td>{model}</td>
		<td>{plant}</td>
		<td>{stamp}</td>
      </tr>
	  {/history}
    </tbody>
  </table>
  </div>
  <?php echo $this->pagination->create_links(); ?>
</div>
