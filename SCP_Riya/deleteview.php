<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body background="images/milky-way.jpg">
<?php include 'template/header.php'; ?>
<link rel="stylesheet" href="neon.css">
    <link rel="stylesheet" href="entypo.css">
    <?php include 'connection.php'; ?>
    <div class="container" style="background-color:#78A1B4 ">
        <?php foreach($result as $menu_item): ?>
          <div class="col-md-3">
              <div class="tile-stats tile-blue">
                  <!-- <div class="icon"><i class="entypo-note"></i></div> -->
                  <!-- <div class="num" data-start="0" data-end="100" data-postfix="" data-duration="1500" data-delay="0">0</div> -->
                  <h2 style="text-align:center"><a href="delete.php?id=<?php echo $menu_item['id']; ?>" class="animate-in text-white" title="Please click here to delete" onclick="return confirm('Are you sure, do you want to delete ??')"><?php echo $menu_item['item_no']; ?></a></h2>
                  <p style="text-align:center"> <?php echo $menu_item['object_class']; ?></p>
              </div>
          </div>
        <?php endforeach; ?>
    </div>
    <?php include 'template/footer.php'; ?> 
</body>
</html>

