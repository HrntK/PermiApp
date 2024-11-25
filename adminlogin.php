<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fl{
            display: flex;
            align-items: center;
        }
        .re{
            font-size: x-large ;
            text-decoration: none;
            margin: 3%;
        }
    </style>
</head>
<body>
    <?php include('nav1');?>
    <div class="fl"><a class="re" href="/hostel?hostel=K">Hostel K</a>
        <a class="re" href="/hostel?hostel=M">Hostel M</a>
        <a class="re" href="/hostel?hostel=L">Hostel L</a>
        <a class="re" href="/hostel?hostel=Q">Hostel Q</a>
    </div>
    <?php include('footer'); ?>
</body>
</html> -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .fl {
            display: flex;
            align-items: center;
        }
        .re {
            font-size: x-large;
            text-decoration: none;
            margin: 3%;
        }
    </style>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
</head>
<body>
    <!-- Integrated Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark teal">
        <img class="img1" src="Ti_Logo_HD.png" alt="" style="width: 3%;">
        <a class="navbar-brand me-auto order-5 med" href="#">Thapar Institute Of Engineering And Technology</a>
        <a class="nav-link change ms-auto order-5" style="color: #fff;" href="logout.php">Logout</a>
    </nav>
    
    <!-- Links to different hostels -->
    <div class="fl">
        <a class="re" href="/hostel?hostel=K">Hostel K</a>
        <a class="re" href="/hostel?hostel=M">Hostel M</a>
        <a class="re" href="/hostel?hostel=L">Hostel L</a>
        <a class="re" href="/hostel?hostel=Q">Hostel Q</a>
    </div>
    
    <!-- Footer inclusion -->
    <?php include('footer'); ?>
</body>
</html>
