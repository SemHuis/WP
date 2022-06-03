<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
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
if(empty($_GET['name']) && empty($_GET['residence'])){
    echo "<p>Please fill in the fields</p>";
}else{ if($_GET['residence'] === 'Amsterdam'){
    $name= $_GET['name'];
    $res= $_GET['residence'];
    echo "<h1> Welcome $name!</h1>\n";
    echo "<p> You're from the capital of the Netherlands!</p>";
}else{
    $name= $_GET['name'];
    $res= $_GET['residence'];
    echo "<h1> Welcome $name!</h1>\n";
    echo ("<p>You're from $res!</p>");
}}
?>

<div class="col-md-12">
<form action="simple_form.php" method="get">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required>
    </div>
    <div class="form-group">
        <label for="residence">Residence</label>
        <input type="text" class="form-control" name="residence" id="residence" placeholder="Your residence" required>
    </div>
    <div class="form-row">
        <div class="form-group col">
            <input type="submit" value="Submit" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
        </div>
    </div>
</form>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>


