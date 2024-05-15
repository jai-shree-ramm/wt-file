<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Experiment - 8</title>
		<style>
				table {
						width: 100%;
						border-collapse: collapse;
				}
				th, td {
						border: 1px solid #ddd;
						padding: 8px;
						text-align: left;
				}
				th {
						background-color: #f2f2f2;
				}
		</style>
	</head>
	<body>
		<h2>User Table</h2>
		<table>
			<tr>
				<th>Name</th>
				<th>Password</th>
				<th>Email</th>
			</tr>
			<?php
			// Open the text file for reading
			$file = fopen("Experiment - 8.txt", "r");

			// Loop through each line in the file
			while (!feof($file)) {
				$line = fgets($file);

				// Split the line into name, password, and email
				$data = explode(":", $line);
				echo "<tr>";
				echo "<td>" . $data[0] . "</td>"; // Name
				echo "<td>" . $data[1] . "</td>"; // Password
				echo "<td>" . $data[2] . "</td>"; // Email
				echo "</tr>";
			}

			// Close the file
			fclose($file);
			?>
		</table>
	</body>
</html>