<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
</head>
<body>
    <%- include('nav1') %>
    <br>
    <h2>APPLIED FOR LEAVE</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">BEGIN DATE</th>
              <th scope="col">END DATE</th>
              <th scope="col">HOSTEL</th>
              <th scope="col">CONFIRMATION</th>
            </tr>
          </thead>
          <h3><a href="/approved?hostel=<%=final.hostel%>">Check approved request</a></h3>
    <%final.results.forEach((item)=>{ %>
        
        <tr>
        <td scope="col">id <%= item.id %></td>
        <td scope="col">begindate: <%= item.begindate %></td>
        <td scope="col">End date:<%= item.enddate %></td>
        <td scope="col"><%= item.hostel %></td>
        <td scope="col"><a href="/confirm?id1=<%= item.reqid %>&fid=<%= item.id %>">Confirm</a>/<a href="/deleted?id1=<%= item.reqid %>&fid=<%= item.id %>">reject</a></td>
    </tr>
        <% }) %>
    </table>
    <br>

</body>
</html> -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css'>
</head>
<body>
    <!-- Integrated Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark teal">
        <img class="img1" src="Ti_Logo_HD.png" alt="" style="width: 3%;">
        <a class="navbar-brand me-auto order-5 med" href="#">Thapar Institute Of Engineering And Technology</a>
        <a class="nav-link change ms-auto order-5" style="color: #fff;" href="logout.php">Logout</a>
    </nav>
    
    <br>
    <h2>APPLIED FOR LEAVE</h2>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">BEGIN DATE</th>
                <th scope="col">END DATE</th>
                <th scope="col">HOSTEL</th>
                <th scope="col">CONFIRMATION</th>
            </tr>
        </thead>
        <!-- Link to view approved requests -->
        <h3><a href="/approved?hostel=<?php echo htmlspecialchars($final['hostel']); ?>">Check approved requests</a></h3>
        
        <!-- Loop to display each leave request -->
        <?php foreach ($final['results'] as $item) { ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['begindate']; ?></td>
                <td><?php echo $item['enddate']; ?></td>
                <td><?php echo $item['hostel']; ?></td>
                <td>
                    <a href="/confirm?id1=<?php echo $item['reqid']; ?>&fid=<?php echo $item['id']; ?>">Confirm</a> /
                    <a href="/deleted?id1=<?php echo $item['reqid']; ?>&fid=<?php echo $item['id']; ?>">Reject</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
</body>
</html>
