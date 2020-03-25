



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form action="#" method="POST">
			<p> 
				<h1 style= "margin-left: 35%;"> write a number over 10000 </h1>
			</p>
			<div style= "margin-left: 40%;"id="input" >
			<input type="text" name="n">
			<input type="submit" name="bouton" value="calculer">
			<!-- <input type="text" name="m"> 
			<input type="text" name="cpt">  -->
			</div>
		</form>
<?php

if(isset($_POST['bouton']))
{ 
	
 		$n=$_POST['n'];
		$tab=[2];
		//$cpt=$_POST['cpt'];
		
	if($n >= 10000)	
	{ 
		
 		for ($i=3 ; $i <= $n ; $i++) 
 		{ 
 			$verif=true;
 			for ($j=2; $j<=$i-1 ; $j++)
 			{
	 		
	 			if ($i%$j==0)
	 			{
	 			 	$verif=false;
	 				 break;
	 			  
	 		 	}
 	
 			}

 			if($verif==true)
 	
 			array_push($tab, $i);


			
 		}
		 
		 //var_dump($tab);
		echo  '<h4 style= "margin-left: 480px;" >les nombres premiers issus de cette chiffre sont:<h4>';
		 echo'<table style="height: 500px; position: static; width: 60%; margin: 0 auto; border: 1px solid black;  " >';
			for($i=1 ; $i <=100 ; $i+=10 )
			{
						
				echo '<tr></tr>';
					
					for($j=$i ; $j < $i+10 ; $j++)
					{
						"<h2>ces nombres premiers sont:</h2>";
						echo"<td style=\" border: 1px solid black; text-align: center \"> $tab[$j] </td>";
						
					}
			}
		"</table>";

	}
	else
	echo "put a figure more over than 10000 please";

};



 

function moyenne($tab)

 	{
		 $count=[];
 		$cpt=0;
 		for ($i=0; $i <= count($tab); $i++) 
 		{ 

 			$cpt=$cpt+$i;
 		
 		}

 		$m=$cpt/count($tab);
		 return $m;
		 


		 
	 
		$inf = [];
		$sup = [];
		for ($i=0; $i < count($tab) ; $i++) 
		{ 
		      
	           if($tab > $cpt ) 
	           {
			        //array_push($inf[], $i);
					$tab[$i]=$inf;
					var_dump($inf);
	           }
				   var_dump($inf);
				   
				   	  // else { array_push($inf[], $cpt); };
	   }


	
	}
	
	 echo '<div style=" text-align: center ">la moyenne des nombres premiers est:'.' '.moyenne($tab).'.</div>' ;
	  

	 
	 
	 ?>


 
</body>
</html>
