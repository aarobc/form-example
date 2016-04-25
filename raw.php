<!DOCTYPE html>
  <head>
    <style>
        body{
            padding-top:40px;
        }
    </style>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <title>Simple form</title>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'
    rel='stylesheet' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7'
    crossorigin='anonymous'>

  </head>
    <html lang='en'>
      <body>
        <div class="container">
<?php
$name = '';
$number = '';
$errs = [];
if(isset($_POST['name']) || isset($_POST['number'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    if(ctype_alpha($name)){
    }else{
        $errs[] = "bad name";
    }

    if(ctype_digit($number)){
    }else{
        $errs[] = "bad number";
    }

    if(!count($errs)){
        ?>
                <div class='row'>
                    <div class='col-md-4 col-md-offset-4'>
                       <ul>
                            <li>
                                <?php echo $name ?>
                            </li>
                            <li>
                                <?php echo $number ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </body>
    </html>
    <?php
        die();
    }
}

?>
    <?php if(count($errs)){ ?>
        <div class='row'>
            <div class='alert alert-warning col-md-4 col-md-offset-4'>
                <ul>
                <?php foreach($errs as $err){ ?>
                    <li>
                        <?php echo $err; ?>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
        <?php } ?>
        <div class='row'>
            <div class='col-md-4 col-md-offset-4'>
              <form class='form' method='POST'>
                <h3>Simple Form</h3>
                <input type='text' name="name" class="form-control"
                    value="<?php echo $name ?>"
                    placeholder='Name' required autofocus>
                <input type='text' name='number' class="form-control"
                    value="<?php echo $number ?>"
                    placeholder='number' required>
                <button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>
              </form>
            </div>
        </div>
    </div>

  </body>
</html>
<?php// } ?>
