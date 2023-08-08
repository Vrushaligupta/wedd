<?php 
$conn = mysqli_connect("localhost","root","","contact_db");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('images/background-img.png')">
    <div class="heading1" > 
          <h1 style="text-align:right; margin-right:100px;">Details of Persons who sent the Messages</h1>
</div>
    <div>

    <table border=1  style="float:right; margin: 50px 50px 40vw auto;" width="600px">
    <thead>
        <tr>
        <th style="text-align: center;">SR No.</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Number</th>
        <th style="text-align: center;">Plan</th>
        <th style="text-align: center;">Address</th>
        <th style="text-align: center;">Message</th>

      </tr>
    </thead>
<?php
    $sql_sel=mysqli_query($conn, "SELECT * FROM contact_form");
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
        $i++;
?>
            <tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['email'];?></td>
                <td><?php echo $row['number'];?></td>
                <td><?php echo $row['plan'];?></td>
                <td><?php echo $row['address'];?></td>
				<td><?php echo $row['message'];?></td>
            </tr>


<?php
    }
?>
    </table>
    </div>
</body>
</html>
