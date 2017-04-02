<h1>Buy a random box</h1>
<a href="/parts/updateTable"><input onclick="buyNowAlert()" type="button" value="Buy now"/></a>
<a href="/parts/buyMoreParts"><input onclick="buyMorePartsAlert()" type="button" value="Buy More Parts"/></a>
</br>
<div class="container">
  <h2>Available Parts</h2>                                            
  <!--<div class="table-responsive">          
	<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Model</th>
        <th>Plant</th>
        <th>Stamp</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  {parts}
        <td>{id}</td>
        <td><img src = "/img/parts/{modelpiece}"width="200" height="60" /></td>
        <td>{plant}</td>
        <td>{stamp}</td>		
      </tr>
	  {/parts}
    </tbody>
  </table>
  </div>-->
  
  {parts}
  <div class="col-md-3" style="padding: 15px">
      <a href="/singlepart/index/{id}">
        <img src = "/img/parts/{modelpiece}"width="200" height="60" title="{model} {piece}" />
      </a>
  </div>
  {/parts}
  
</div>
