<div>
<form>
	<button type="submit" id="filter" class="btn btn-primary btn-sm" formaction="/History/dateSort">Sort by date</button>
	<button type="submit" id="filter" class="btn btn-primary btn-sm" formaction="/History/modelSort">Sort by robot model</button>
</form>
</div>

<div class="container">
  <h2>History</h2>                                            
  <div class="table-responsive">          
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Model</th>
		<th>Plant</th>
		<th>Date</th>
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
