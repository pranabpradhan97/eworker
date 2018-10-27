<?php
	
	$con=mysqli_connect("localhost","root","","eworker");



				$sql="SELECT * from workerregistration";
				$result=mysqli_query($con,$sql);

				$resultCheck=mysqli_num_rows($result);
				
				

				if($resultCheck>0)
				{
					while ($row=mysqli_fetch_assoc($result))
					 {
						echo $row['name'];	echo '<br>';
						echo $row['email'];
						echo $row['address'];
					}


				}

			?>


