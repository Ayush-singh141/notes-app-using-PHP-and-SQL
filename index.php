<?php 
 include("connection.php");
 $sql="SELECT * FROM notes ORDER BY date DESC";
 $result=mysqli_query($conn,$sql);
 $rows = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Notes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 style="color:#d9bda5;padding: 40px;
    text-align: center;letter-spacing:5px;" class="page-title press-start-2p-regular" > Welcome to Happy Notes</h1>
    <form class="main-form" action="handle.php" method="post">
        <input type="text" name="title" placeholder="Enter Title">
        <textarea name="description" placeholder="Enter Description" rows="4" style="width: 100%;"></textarea>
        <input type="submit" class="submit" name="add" value="Add +">
    </form>
  <div class="notes">
        <?php foreach($rows as $r): ?>
        <div class="new-note press-start-2p-regular">
            <div class="header"><div class="title"><h1><?php echo $r['title'] ?></h1></div> <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $r['id'] ?>">
                <button class="delete">x</button></form></div>
            <div class="description"><?php echo $r['description'] ?></div>
            <span class="date"><?php echo $r['date'] ?></span>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>