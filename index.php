<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="col-xs-12 col-lg-12 col-md-4 text-center" style="padding: 20px; background-color: #eee; font-family: ubuntu; font-size: 28px;">

Password generator



</div>
<div class="co-xs-12 col-lg-12">
<br/><br/>
<br/><br/>
<br/>
<br/>
</div>
<div class="col-xs-6 col-lg-6 col-md-2 text-center" style="padding: 20px; background-color: #fff; font-family: ubuntu; font-size: 28px; border:1px solid #eee; height: 300px;">
<form action="index.php" method="POST">
    
    <input type="number" class="form-control" name="char_length" placeholder="enter character limit">
    <br/>
      <input type="number" class="form-control" name="number_length" placeholder="enter number limit">
    <br/>
  <input type="number" class="form-control" name="symbol_length" placeholder="enter symbol length">
    <br/>
<input type="submit" class="btn btn-primary" value="lets go">


</form>

</div>


<div class="col-xs-6 col-lg-6 col-md-2 text-center" style="padding: 20px; background-color: #fff; font-family: ubuntu; font-size: 28px; border:1px solid #eee; height: 300px;">


<?php 




include 'classes/class.password_generate.php';

if (isset($_POST['char_length']) && isset($_POST['number_length']) && isset($_POST['symbol_length'])) {

if (!empty($_POST['char_length']) && !empty($_POST['number_length']) && !empty($_POST['symbol_length'])) {

$char_length = $_POST['char_length'];


$number_length = $_POST['number_length'];


$symbol_length = $_POST['symbol_length'];

$password_generate = new password;


$password_generate->setGlobalLength($char_length, $number_length, $symbol_length);

echo "the generated password is <br/><br/>";
$password_generate->generatePassword();

}

}

?>

</div>