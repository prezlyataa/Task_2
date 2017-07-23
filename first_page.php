<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<script type="text/javascript">
  function send() {
     $.ajax({
        url: "second_page.php",
        type: "post",
        data: $("#form").serialize(),
              success: function(data) {
              $("#data").html(data);
            }
      });
  }
</script>


    <div class="container">
      <form id="form">
      <?php 
          $color = array('Blue', 'Yellow', 'Red', 'Green', 'Pink', 'Black', 'Purple', 'White', 'Gold', 'Orange');
          echo "<select name ='color'>";
            for($i = 0; $i < count($color); $i++) {
                echo '<option>' . $color[$i] . '</option>';
              }
          echo "</select>";   
      ?>
      <input type="button" onclick="send();" class="btn btn-success" value="Відправити">

      <div id="data" style="margin-top: 15px;"></div>

      </form>

    </div> 



<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/javascript'></script>
<script src="js/common.js"></script>

</body>
</html>
