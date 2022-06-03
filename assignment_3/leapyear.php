<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
    'items' => Array(
        'News' => '/WP22/assignment_3/index.php',
        'Add news item' => '/WP22/assignment_3/news_add.php',
        'Leap Year' => '/WP22/assignment_3/leapyear.php',
        'Simple Form' => '/WP22/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

<?php
if(empty($_POST['name']) && empty($_POST['residence']) && empty($_POST['age']) && empty($_POST['email'])){
    echo "<p>Please fill in the fields</p>";
}elseif($_POST['residence'] === 'Groningen'){
    $name= $_POST['name'];
    $res= $_POST['residence'];?>
    <div><h1> Welcome, <?php echo $name ?>!</h1><br>
    <p> The next 5 leap years, this will be your age!</p><br>
        <p> Nice, you're living in Groningen!</p></div>
<?php } else {
    $name= $_POST['name']; ?>
    <div><h1> Welcome <?php echo $name ?>!</h1><br>
        <p> The next 5 leap years, this will be your age!</p></div>
<?php } ?>

    <script type="application/javascript" src="scripts/leapyear.js"></script>
    <div class="col-md-12">
        <form action="" method="post" id="leap">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required>
                <div class="valid-feedback">
                    Cool name!
                </div>
                <div class="invalid-feedback">
                    Put in a valid name please.
                </div>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="age" class="form-control" name="age" id="age" placeholder="Your age" required>
                <div class="invalid-feedback">
                    Put in a valid age please.
                </div>
            </div>
            <div class="form-group">
                <label for="email">Mailadress</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Your email" required>
                <div class="invalid-feedback">
                    Put in a valid email address please.
                </div>
            </div>
            <div class="form-group">
                <label for="residence">Residence</label>
                <input type="text" class="form-control" name="residence" id="residence" placeholder="Your residence" required>
                <div class="invalid-feedback">
                    Put in a valid place please.
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <input name="submit" id="submit" type="submit" value="Submit" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
                </div>
            </div>
        </form>
    </div>

<?php
if(empty($_POST['age'])){
    echo "<p> </p>";}
else {
$age= $_POST['age'];
?>
    <table class="table">
        <tr>
            <td><b>Year</b></td>
            <td><b>Age</b></td>
        </tr>
        <tr>
            <td>2024</td>
            <td><?php echo ($age+2); ?></td>
        </tr>
        <tr>
            <td>2028</td>
            <td><?php echo ($age+6); ?></td>
        </tr>
        <tr>
            <td>2032</td>
            <td><?php echo ($age+10); ?></td>
        </tr>
        <tr>
            <td>2036</td>
            <td><?php echo ($age+14); ?></td>
        </tr>
        <tr>
            <td>2040</td>
            <td><?php echo ($age+18); ?></td>
        </tr>
    </table>
<?php } ?>


<?php
include __DIR__ . '/tpl/body_end.php';
?>