<?php
include_once ('simple_html_dom.php');
$con=mysqli_connect('localhost','root','','carhunt');
if(!$con)
	{
		echo "connection failed";
		die();
	}
	else
	{
		
        mysqli_select_db($con,"carurl");
        $result=mysqli_query($con,"SELECT review_url,price,image_url FROM carurl WHERE carid='contigtv8'");
        $row=mysqli_fetch_array($result);
        if(!$result)
		{
			printf("Error %s",mysqli_error($con));
			exit();
		}
		else
		{
			$url=$row['review_url'];
			$img=$row['image_url'];
			$imageData = base64_encode(file_get_contents($img));
			$price=$row['price'];
			$html=file_get_html($url);
            foreach($html->find('div.article') as $key)
            {
	         
	         echo $key->plaintext."<br>";
	          echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
	         echo "<br>".$price;
	        
	         
            }
        }        
    }
?>




