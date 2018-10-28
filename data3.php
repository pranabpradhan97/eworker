<?php
	
	$con=mysqli_connect("localhost","root","","eworker");

			



				$sql="SELECT name, email, contact, workExperience, comment from workerregistration where skillSet='Painter'";
				$result=mysqli_query($con,$sql);

				$resultCheck=mysqli_num_rows($result);
				
				

				if($resultCheck>0)
				{
					while ($row=mysqli_fetch_assoc($result))
					 {
						echo "Name: ".$row['name'].'<br>';
						echo "Email: ".$row['email'].'<br>';
						echo "Contact: ".$row['contact'].'<br>';
						echo "Work Experience: ".$row['workExperience'].'<br>';
						echo "Comment: ".$row['comment'].'<br><br>';
					}


				}

			?>


