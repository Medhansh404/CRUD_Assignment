<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
	crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<title>Sign up</title> 

<style>
	/* Background color */
	body {
		background-color: lavender;
	}
	
	/* Navbar color */
	.navbar {
		background-color: #6C4675 !important; /* Dark lavender */
		width: 100% !important;  /* Make the navbar span the width of the screen */
	}
	.navbar .navbar-nav .nav-link {
      color: white !important; /* Set the text color of the navbar links */
    }

    body {
      font-family: 'Arial', sans-serif; /* Set the font family for the body */
    }
	
	/* Table styling */
	table {
		border-collapse: collapse;
		margin: 0 auto;
		border-radius: 10px;
	}

	th, td {
		padding: 10px;
		border: 1px solid #ccc; /* Add border styling */
	}
	
	/* Add button styling */
	.add-button {
		text-align: center;
		margin-top: 20px;
	}
</style>
</head>

<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
		<a class="navbar-brand" href="#">
      <span style="font-weight: bold; color: white;">Login</span>
    </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact Us</a>
					</li>
				</ul>    
			</div>
		</nav>

		<div class="container my-4">
			<table class="table" id="myTable">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Name</th>
						<th scope="col">Age</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					while($row = mysqli_fetch_assoc($result)){
						echo "<tr>
						<td>". $row['id'] . "</td>
						<td>". $row['name'] . "</td>
						<td>". $row['age'] . "</td>
						<td>". $row['email'] . "</td>
						<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a> <a href='delete.php?id=" . $row['id'] . "' onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-danger'>Delete</a></td>
						</tr>";
					} 
					?>
				</tbody>
			</table>
		</div>
		
		<div class="add-button">
			<a href="add.php" class="btn btn-primary">Add New Data</a>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
	<script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		});
	</script>
</body>
</html>
