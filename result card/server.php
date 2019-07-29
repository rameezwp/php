<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
table{
  margin-top: 100px;
}
h2{
  text-align: center;
  margin-top: 50px;
  border: 3px solid;
  width: 300px;
  margin-left: 400px;
}
</style>
</head>
<body>
<h2>Result Card</h2>
<?php
  extract($_REQUEST);
?>
<?php 
  $total=($eng+$math+$urdu+$phy+$chem);
  $per=($total/500*100);
 ?>
 <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th>NO#</th>
      <th>SUBJECT</th>
      <th>TOTAL MARKS</th>
      <th>OBTAIN MARKS</th>
      <th>PASS OR FAIL</th>

    </tr>
 </thead>

  <tr>
    <th scope="row">1</th>
    <td>English </td> 
    <td>100</td> 
    <td><?php echo $eng;?></td>
    <td><?php  if ($eng<33) {
      echo "  Fail";
    }
      else {
      echo "  Pass";  
    } 
    ?>
     </td> 
  </tr>

   <tr>
    <th scope="row">2</th>
    <td>Math</td> 
    <td>100</td> 
    <td><?php echo $math;?></td>
    <td><?php  if ($math<33) {
      echo "  Fail";
    }
      else {
      echo "  Pass";  
    } 
    ?>
    </td> 
  </tr>

   <tr>
    <th scope="row">3</th>
    <td>Urdu</td> 
    <td>100</td> 
    <td><?php echo $urdu;?></td>
    <td><?php  if ($urdu<33) {
      echo "  Fail";
    }
      else {
      echo "  Pass";  
    } 
    ?>
    </td> 
  </tr>

   <tr>
    <th scope="row">4</th>
    <td>Physics</td> 
    <td>100</td> 
    <td><?php echo $phy;?></td>
    <td><?php  if ($phy<33) {
      echo "  Fail";
    }
      else {
      echo "  Pass";  
    } 
    ?>
    </td> 
  </tr>

   <tr>
    <th scope="row">5</th>
    <td>Chemistry</td> 
    <td>100</td> 
    <td><?php echo $chem;?></td>
    <td><?php  if ($chem<33) {
      echo "  Fail";
    }
      else {
      echo "  Pass";  
    } 
    ?>
    </td> 
  </tr>

   <tr class="table-info">
    <th></th>
    <td></td> 
    <td>Total =<b>500</b></td> 
    <td>Obtain Marks =<b><?php echo $total; ?></b></td> 
    <td>Percentage is =<b><?php echo $per; ?>%</b></td>
  </tr>

  <tr>
    <td></td> 
    <td></td> 
    <td></td> 
    <td ></td> 
    <td></td>
  </tr>

</table>
</body>
</html>