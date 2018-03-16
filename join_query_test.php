<?php

include('config.php');

$query=mysql_query("select customers.customer_name,customers.customer_address,
	                customers.customer_phone from customers 
	                INNER JOIN orders ON customers.slno=orders.customer_id 
	                where orders.status=1
	                "); 


$query1=mysql_query("select a.customer_name AS cname,
	                a.customer_phone AS cphone,
	                a.customer_address AS caddress,
	                b.order_id AS oid,
	                c.product_name AS pname,
                    c.product_color AS pcolor,
                    c.product_availability AS pavailability
	                from customers AS a INNER JOIN orders AS b 
	                ON a.slno=b.customer_id INNER JOIN product 
	                AS c ON b.product_id=c.id
	                where b.status=1
	                
                    ");

	                ?>

<table border="1">
		<tr>
			<td style="font-weight:bold;">Customer Name</td>
			<td style="font-weight:bold;">Customer Phone</td>
			<td style="font-weight:bold;">Customer Address</td>
			<td style="font-weight:bold;">Order ID</td>
			<td style="font-weight:bold;">Product Name</td>
			<td style="font-weight:bold;">Product Color</td>
			<td style="font-weight:bold;">Product Availability</td>
		</tr>
<?php
while($display_query=mysql_fetch_array($query1))
{  ?>

	
		<tr>
			<td><?= $display_query['cname'];?></td>
			<td><?= $display_query['cphone'];?></td>
			<td><?= $display_query['caddress'];?></td>
			<td><?= $display_query['oid'];?></td>
			<td><?= $display_query['pname'];?></td>
			<td><?= $display_query['pcolor'];?></td>
			<td><?= $display_query['pavailability'];?></td>
		</tr>
	
	

<?php }

?>

</table>