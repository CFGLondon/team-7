
<!DOCTYPE html>
<html lang="en"

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>

    <title>BU Web Spy</title>

    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style>
       
		.table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
		background-color: #eeeeea;
		}
		
    </style>
</head>

<body style="padding-top: 70px;">
    <nav class="navbar navbar-default  navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://www.everquest.online/">BU Web Spy</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.everquest.online/">Year 2 Web Assignment 1<span class="sr-only">(current)</span></a>
                    </li>
                   <!-- DUE IN NEXT PATCH
                    <li><a href="#">Year 1 Web Assignment</a>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <div class="container">
        <div class="well" style="text-align:center;">
            <h1>2nd Year Web Assignments</h1>
            <h4>Below are all the websites that have valid coursework within them.</h4>
			<span>Green fields have working websites, white fields are placeholders and red sites are inactive websites.</span>
			<form action="#" method="post">
			<button name="refresh" type="submit" class="btn btn-sm btn-primary" value="refresh" style="margin-top:10px;" disabled>
				<span class="glyphicon glyphicon-refresh"></span> Refresh List
			</button>
			</form>
        </div>
        
        
    <table id="webTable" class="table table-list-search table-striped table-hover">
	
    <thead>
      <tr>
        <th>Student Number</th>
        <th>Student Name</th>
		<th>i-Number</th>
      </tr>
    </thead>
    <tbody>
            <tr class="noContent"><td><b><a href="http://student20408.bucomputing.uk/">20408</a></b></td><td>Tiago Queiroz Nery</td><td>i7200369</td></tr><script>
			$(document).ready( function () {
				$('#webTable').DataTable();
			} );
        </script>

    </tbody>
 </table>
    </div>
</body>


</html>
