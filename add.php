<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
	crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

<div class="container-fluid">
	<form action="addAction.php" method="post" name="add">
  <div class="form-group my-4">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group my-4">
    <label for="age">Age</label>
    <input type="text" class="form-control" id="age" name ="age"placeholder="Age">
  </div>
  <div class="form-group my-4">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email"aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  
  <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>

