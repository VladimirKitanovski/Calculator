<head>
    <meta charset="utf-8">
        <title>Calculator</title>
</head>
    <body>
        <form method="post" attribute="post" action="site.php">
            <p>First Value:<br/>
        <input type="text" id="first" name="first"></p>
            <p>Second Value:<br/>
    <input type="text" id="second" name="second"></p>
    <input type="radio" name="group1" id="add" value="add" checked="true">+<br/>
    <input type="radio" name="group1" id="subtract" value="subtract">-<br/>
    <input type="radio" name="group1" id="times" value="times">x<br/>
    <input type="radio" name="group1" id="divide" value="divide">/<br/>
            <p></p>
        <button type="submit" name="answer" id="answer" value="answer">Calculate</button>
        </form>
Answer: <?php
$first = $_POST['first'];
$second= $_POST['second'];
    if($_POST['group1'] == 'add') {
        echo $first + $second;
}
    else if($_POST['group1'] == 'subtract') {
        echo $first - $second;
}
    else if($_POST['group1'] == 'times') {
        echo $first * $second;
} 
    else if($_POST['group1'] == 'divide') {
        echo $first / $second;
}
?>
</body>
</html>