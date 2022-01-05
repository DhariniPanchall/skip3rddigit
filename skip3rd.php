<!DOCTYPE html>
<html>
	<body>
		<?php 
			for ($i = 1; $i <= 100; $i++)
			{
				if (($i % 3)== 0)
				{
					continue;
				}
				else
				{
					echo $i;
					echo "<br/>";	
				}
			}
		?>
	</body>
</html>