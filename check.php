<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
<link rel='stylesheet' href='style.css'>

    
  </head>
  <body>
    <?php  include('nav1.php'); ?>
    <?php 
include "config.php";
$con=connect();
session_start();
$id=$_SESSION['suser'];
$rs=mysqli_query($con,"SELECT * FROM user_content WHERE id =$id");
$reqid=$_GET['id'];
$rs1=mysqli_query($con,"select * from leaverequest where id='$reqid' AND approval='yes'");
$n=mysqli_num_rows($rs1);

$rs2=mysqli_query($con,"select * from late where id='$reqid' AND approval='yes'");
$n1=mysqli_num_rows($rs2);

$rs3=mysqli_query($con,"select * from hostelstay where id='$reqid' AND approval='yes'");
$n2=mysqli_num_rows($rs3);

if($n>=1)
{
$r1=mysqli_fetch_assoc($rs1);

     ?>
        <form action="apply.php" method="post">
          <div class="form-group mx-auto" style="width: 50%; border: 1px solid black; display: flex; flex-direction: column; text-align: center; margin-top:1%; padding: 2%;">
            <?php while($r=mysqli_fetch_assoc($rs)){ ?>
              <h1>Leave Approval Slip</h1>
              <h3>User Information:</h3>
              <p>Name :  <?php echo $r['name']; ?></p>
              <p>Branch: <?php echo $r['branch']; ?></p>
              <p>Roll number: <?php echo $r['roll']; ?></p>
              
              <p>Start Date: <?php echo $r1['begindate']; ?></p>
              <p>End Date: <?php echo $r1['enddate']; ?></p>
              <br><br>
              <input type=button onClick="window.print()" value="Print PDF">
            </div>
          </form>
              <?php
              }
            ?>
            <?php } 
            
            else if($n1>=1)
{
$r1=mysqli_fetch_assoc($rs2);

     ?>
        <form action="apply.php" method="post">
          <div class="form-group mx-auto" style="width: 50%; border: 1px solid black; display: flex; flex-direction: column; text-align: center; margin-top:1%; padding: 2%;">
            <?php while($r=mysqli_fetch_assoc($rs)){ ?>
              <h1>Leave Approval Slip</h1>
              <h3>User Information:</h3>
              <p>Name :  <?php echo $r['name']; ?></p>
              <p>Branch: <?php echo $r['branch']; ?></p>
              <p>Roll number: <?php echo $r['roll']; ?></p>
              <p>Request Id: <?php echo $r1['reqid']; ?></p>
              <p>Gate ID: <?php echo $r1['gateid']; ?></p>
              <p>Start Date: <?php echo $r1['begindate']; ?></p>
              <p>End Date: <?php echo $r1['enddate']; ?></p>
              <br><br>
              <input type=button onClick="window.print()" value="Print PDF">
            </div>
          </form>
              <?php
              }
            ?>
            <?php }
            
            else if($n2>=1)
{
$r1=mysqli_fetch_assoc($rs3);

     ?>
        <form action="apply.php" method="post">
          <div class="form-group mx-auto" style="width: 50%; border: 1px solid black; display: flex; flex-direction: column; text-align: center; margin-top:1%; padding: 2%;">
            <?php while($r=mysqli_fetch_assoc($rs)){ ?>
              <h1>Leave Approval Slip</h1>
              <h3>User Information:</h3>
              <p>Name :  <?php echo $r['name']; ?></p>
              <p>Branch: <?php echo $r['branch']; ?></p>
              <p>Roll number: <?php echo $r['roll']; ?></p>
              <p>Request Id: <?php echo $r1['reqid']; ?></p>
              <p>Gate ID: <?php echo $r1['gateid']; ?></p>
              <p>Start Date: <?php echo $r1['begindate']; ?></p>
              <p>End Date: <?php echo $r1['enddate']; ?></p>
              <br><br>
              <input type=button onClick="window.print()" value="Print PDF">
            </div>
          </form>
              <?php
              }
            ?>
            <?php }
            else
            {
              ?>
              <form action="apply.php" method="post">
          <div class="form-group mx-auto" style="width: 50%; border: 1px solid black; display: flex; flex-direction: column; text-align: center; margin-top:1%; padding: 2%;">

            <?php while($r=mysqli_fetch_assoc($rs)){ 
                
              ?>
              <h1>Welcome to the dashboard, <?php echo $r['name']; ?>!</h1>
              <h3>User Information:</h3>
              <p>Branch: <?php echo $r['branch']; ?></p>
              <p>Roll number: <?php echo $r['roll']; ?></p>
              <br><br>
              <h4><a href="dashboard.php">Not Approved</a></h4> <br>
            </div>
          </form>
              <?php
            }
          }

            ?><br>
            </div>
        
        </form>
        <?php include('footer.php'); ?>
  </body>
</html>