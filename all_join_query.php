<?php

include('config.php');



$sql=mysqli_query($conn, "SELECT c.*,o.order_item as oitem,
	                        o.order_price as price
                          from tbl_customer c INNER JOIN tbl_order
	                        o on c.customer_id=o.customer_id"); 


	                     

if (mysqli_num_rows($sql)>0) {  ?>

<h3><u>Inner Join Result</u></h3>

<table border='1'>
  <tr>
    <th>Customer Name</th>
    <th>Customer Phone</th>
    <th>Customer Email</th>
    <th>Order Item </th>
    <th>Order Price</th>
  </tr>

<?php

  while($row1=mysqli_fetch_array($sql)){ ?>



  <tr>
    <td><?=$row1['customer_name'];?></td>
    <td><?=$row1['customer_mobile'];?></td>
    <td><?=$row1['customer_email'];?></td>
    <td><?=$row1['oitem'];?></td>
    <td><?=$row1['price'];?></td>
  </tr>
  


<?php
}

}
?>
</table>

<?php
$sql1=mysqli_query($conn,"SELECT c.customer_name cname,c.customer_email 
  	                      cemail,c.customer_mobile cmobile, 
  	                      o.order_item oitem,o.order_price oprice 
  	                      FROM tbl_customer AS c LEFT JOIN 
  	                      tbl_order AS o on 
  	                      c.customer_id=o.customer_id"); ?>

<h3><u>Left Join Result</u></h3>
<table border='1'>
  <tr>
    <th>Customer Name</th>
    <th>Customer Phone</th>
    <th>Customer Email</th>
    <th>Order Item </th>
    <th>Order Price</th>
  </tr>

<?php
  


 while($row2=mysqli_fetch_array($sql1)){ ?>

 <tr>
    <td><?php echo $row2['cname'];?></td>
    <td><?php echo $row2['cemail'];?></td>
    <td><?php echo $row2['cmobile'];?></td>
    <td><?php echo $row2['oitem'];?></td>
    <td><?php echo $row2['oprice'];?></td>
  </tr>
<?php
}

?>
</table>


<?php

$sql2=mysqli_query($conn,"SELECT c.customer_name cname,c.customer_email 
  	                      cemail,c.customer_mobile cmobile, 
  	                      o.order_item oitem,o.order_price oprice 
  	                      FROM tbl_customer AS c RIGHT JOIN 
  	                      tbl_order AS o on 
  	                      c.customer_id=o.customer_id ");

?>


<h3><u>Right Join Result</u></h3>
<table border='1'>
  <tr>
    <th>Customer Name</th>
    <th>Customer Phone</th>
    <th>Customer Email</th>
    <th>Order Item </th>
    <th>Order Price</th>
  </tr>


  <?php 

  while($row3=mysqli_fetch_array($sql2)){?>

<tr>
    <td><?php echo $row3['cname'];?></td>
    <td><?php echo $row3['cemail'];?></td>
    <td><?php echo $row3['cmobile'];?></td>
    <td><?php echo $row3['oitem'];?></td>
    <td><?php echo $row3['oprice'];?></td>
  </tr>
<?php } ?>

</table>


<?php 

$sql3=mysqli_query($conn,"SELECT A.customer_name AS CustomerName1,
                          A.customer_mobile AS CustomerMob1, 
                          A.customer_id AS Customerid, 
                          A.customer_email As cemail FROM tbl_customer A, 
                          tbl_customer B WHERE A.slno <> B.slno
                          AND A.customer_email = B.customer_email
                          ORDER BY A.customer_name ASC "); ?>


<h3><u>Self Join Result</u></h3>
<table border='1'>
  <tr>
    <th>Customer Name</th>
    <th>Customer Phone</th>
    <th>Customer Email</th>
    <th>Customer Id</th>
    
  </tr>


<?php while($row4=mysqli_fetch_array($sql3)){ ?>

<tr>
    <td><?php echo $row4['CustomerName1'];?></td>
    <td><?php echo $row4['CustomerMob1'];?></td>
    <td><?php echo $row4['cemail'];?></td>
    <td><?php echo $row4['Customerid'];?></td>
  </tr>

  <?php

}

?>
</table>