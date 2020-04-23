



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create form</title>
</head>
<body background="images/milky-way.jpg">
<?php include 'template/header.php'; ?>
<div class="row" style="background-color:#AABAF5">
        <div  class="col">
        <h1>Enter new SCP Subject Form</h1>
        <form name="insert" method="POST" action="connection.php" class="form-group" enctype="multipart/form-data">
            <label>Enter Subject Number</label>
            <br>
            <input type="text" name="item_no" class="form-control" placeholder="Use the following format SCP-###" required>
            <br>
            <label>Enter Subject Class Type</label>
            <br>
            <input type="text" name="object_class" class="form-control" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
            <br>            
            <br>            
            <div class="form-group">
              <label>Upload Image</label>
              <div class="custom-file">         
               <input type="file" class="custom-file-input" name="userfile" aria-describedby="inputGroupFileAddon01" style="background-color:#b4b8b7">
               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
            </div>   
            <br>
            <label>Enter Containment Procedures </label>
            <br>
            <textarea name="procedures" rows="10" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <br>
            <label>Enter Subject Description</label>
            <br>
            <textarea name="description" rows="10" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <br>
            <label>Enter Subject Reference</label>
            <br>
            <textarea name="reference" rows="10" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <br>
            <label>Additional Notes</label>
            <br>
            <textarea name="additional_notes" rows="5" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <br>
            <br>
            <label>Appendix</label>
            <br>
            <textarea name="appendix" rows="5" class="form-control" placeholder="Separate Paragraphs with \n"></textarea>
            <input type="submit" class="btn btn-success" name="submit" value="Submit Subject Data">
            </form>
        </div>
    </div>
   <?php include 'template/footer.php'; ?>
<!-- Display DATA entry form below -->
</body>
</html>
