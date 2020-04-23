<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>subject item</title>
</head>
<body background="images/milky-way.jpg">
  <!-- include header.php this contains html code above our main content -->
<?php include 'template/header.php'; ?>
<!-- Display record in div below -->
    <div class="row" style="background-color:#E8E5EF">
        <div  class="col">
        <?php
        // check if the subject get value exits
        if(isset($_GET['subject']))
        {
            // remove single quotes from subject get value
            $id = trim($_GET['subject'], "'");

            // run sql command to select record based on get value
            $record = $connection->query("select * from subject where id='$id'") or die($connection->error());

            // convert $record into an array for us to echo out on screen
            $row = $record->fetch_assoc();
            
            // create variables that hold data from db fields
            $item = $row['item_no'];
            $object_class = $row['object_class'];
            $procedures = $row['procedures'];
            $description = $row['description'];
            $subject_image = $row['subject_image'];
            $reference = $row['reference'];
            $additional_notes = $row['additional_notes'];
            $appendix = $row['appendix'];
            

            // strip out \n and replace with linebreaks
            $procedures = str_replace('\n', '<br><br>', $procedures);
            $description = str_replace('\n', '<br><br>', $description);
            $reference = str_replace('\n', '<br><br>', $reference);
            $additional_notes = str_replace('\n', '<br><br>', $additional_notes);
            $appendix = str_replace('\n', '<br><br>', $appendix);
             
            
              echo "<h1>SCP Subject Database</h1>
              <h2>Item_#: {$item}</h2>
              <h3>Object Class: {$object_class}</h3>" ;
              
              if(!empty($subject_image)){
                echo "<p><img src= '$subject_image' width='auto' height='auto'></p>";
              }
              
              echo "<h3>Procedures</h3>
              <p>{$procedures}</p>
              <h3>Description</h3>
              <p>{$description}</p>";
              if(!empty($reference)){
                echo " <h3>Reference</h3>
                <p>{$reference}</p>";
              }
              if(!empty($additional_notes)){
                echo " <h3>additional_notes</h3>
                <p>{$additional_notes}</p>";
              }
              if(!empty($appendix)){
                echo " <h3>appendix</h3>
                <p>{$appendix}</p>";
              }
              
           
        }
        else
        {
          // if this is the first time index.php is accessed, display the content below
          echo "<h1>SCP Subject Database</h1>
              <p class='text-center'>Welcome Agent, use the links above to view subject files or enter new subject data</p>
              <p><img src='images/scp_console.jpg' class='img-fluid rounded mx-auto d-block'></p>";
        }
        ?>
        </div>
    </div>
    <?php include 'template/footer.php'; ?>
</body>
</html>
