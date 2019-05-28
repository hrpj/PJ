<?php     		
				$result2 = mysqli_query($con,"SELECT * FROM department");
				while ($row = mysqli_fetch_array($result2))
				{
					$departmentID = $row['departmentID'];
					$departmentName = $row['departmentName'];
					$BranchName2 = $row['BranchName'];
					echo "<option value=".$departmentID.">".$departmentName."-".$BranchName."</option>";
				}
?>