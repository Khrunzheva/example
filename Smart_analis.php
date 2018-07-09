<html>
<head>
	<?php
	 require_once 'head.php'; 
	 ?>
</head>
<body>
	<div class="shapka">
		<?php
		 require_once 'top.php'; 
		 ?>
	</div>
	<div class="page">
		<div class="sidebar_left">
			<?php
		 	require_once 'sidebar1.php'; 
		 	?>
		</div>
		<div class="center">
			<form method="post">
		 	<?php
			$keyk = array_keys($_POST);
			$arr[key] = value;
			$krit[key] = value;
			$ocen[key] = value;
			$vari[key] = value;
		    if(isset($_POST['ok'])){ 
		      if (isset($keyk))
		      {
		        $n = count($keyk) - 2;
		        $m = 0;
		        $k = 0;
		        $j = 0;
		        for($i=0; $i <= $n; $i++)
		        {
		          	file_put_contents('table.txt', iconv('utf-8', 'windows-1251', $_POST[$keyk[$i]].'|'), FILE_APPEND);
		          	$arr[$i] = $_POST[$keyk[$i]];
		     		if (($arr[$i]>=1) AND ($arr[$i]<=5)) {
		     			$ocen[$k] = $arr[$i];
		     			$k++;
		     		}
		     		else {
		     			$vari[$j] = $arr[$i];
		     			$j++;
		     		}
		        }
		        file_put_contents('table.txt', iconv('utf-8', 'windows-1251', "\n"), FILE_APPEND);
		      }
		      else
		      {
		        echo "error";
		      }
		    }
		    echo "<div class=\"title\">";
				echo "<h2>Заполнение анкеты</h2>";
			    echo "<h2>Метод СМАРТ</h2>";
			echo "</div>";
			 	echo "<div class=\"tablebox\">";
					echo "<div class=\"column\"><ol>";
						echo "<div class=\"line\"></div>";	    				
						for ($i=0; $i < $k; $i++) { 
							echo "<div class=\"line\"><li><p>".$vari[$i]."</p></li></div>";
						}
				    echo "</ol></div>";
				    $q=0;
				    $otv=array_keys($_POST);
				    $m = $k;
				    while ( $m < $j) {
				    	echo "<div class=\"column\">";
				    	echo "<div class=\"line\"><p>".$vari[$m]."</p></div>";
				    	for ($i=0; $i < $k; $i++) { 
				    		echo "<div class=\"line\"><div class=\"intext\"><input id = \"otv[$q][$i]\"type=\"text\" name=\"otv[$q][$i]\"></div></div>";
				    	}
				    	$m++;
				    	$q++;
				    	echo "</div>";
				    }
			echo "<div class=\"subin\">";
      		echo "<input type=\"submit\" name=\"okey\" value=\"Проанализировать\"></div></form>";
      		$sign = array();
      		$otv=array_keys(array($_POST));	
      		if (isset($_POST['okey'])) {
      			mysql_connect("mysql.myhost.com", "user", "sesame") or die (mysql_error ());
      			mysql_select_db("mydatabase") or die(mysql_error());
      			$strSQL = "INSERT INTO grade(";
      				for ($i=0; $i < $k; $i++) {
      					$strSQL = $strSQL . $vari[$i];
      				}
      			$strSQL = $strSQL . "VALUES(";
      				for ($i=0; $i < $q; $i++){
      					$strSQL = $strSQL . $vari[$i];
      				}
      				for ($i=0; $i < $k; $i++){
      					for ($j=0; $j < $q; $j++) { 
      						$strSQL = $strSQL . $otv[$j][$i];
      					}
      				}
      			mysql_query($strSQL) or die (mysql_error());
				mysql_close();      		
      		}
			?>
			</div> 	 	
		</div>
	</div>
</body>
</html>
