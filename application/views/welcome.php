
<html lang="en">
<head>
    <title>Team Banana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--     <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/> -->
    <link href="/css/mainpage.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 col-md-3 sidenav">      
            <h4>Team Banana</h4>
            <ul class="nav nav-pills nav-stacked">

                {navbar}
            </ul>
        </div>
        <div class="col-sm-9 col-md-9">      
            <h1>Bot Factory (Team Banana)</h1>    
            <hr>
            <div class="row">
                <div class="col-sm-4 col-md-4">                
                    <div class="category">
                        <h2># of parts on hand</h2>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by Banana</h5>
                        <h5><span class="label label-success">new</span></h5><br>
                        <p>{part} items</p>
                    </div>                    
                </div>                            
                <div class="col-sm-4 col-md-4">
                    <div class="category">
                        <h2># of assembled bots</h2>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by Banana</h5>
                        <h5><span class="label label-success">new</span></h5><br>
                        <p>{assembledBot} bots</p>
                    </div>
                    
                </div>                    
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="category">
                        <h2>$ spent</h2>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by Banan</h5>
                        <h5><span class="label label-success">new</span></h5><br>
                        <p>${spent} spent</p>
                    </div>                    
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="category">
                        <h2>$ earned</h2>
                        <h5><span class="glyphicon glyphicon-time"></span> Post by Banana</h5>
                        <h5><span class="label label-success">new</span></h5><br>
                        <p>${earned}</p>
                    </div>                    
                </div>                                        
            </div>                    
        </div>
    </div>
    <footer class="container-fluid">
      <p>&copy;Team Banana</p>
    </footer>    
</div>
</body>
</html>
