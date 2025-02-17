<?php include 'foreach.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<h2>
 
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>author</th>
            <th>year</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($books as $index => $book): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $book['title'] ?></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['year'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</h2>

<?php 
// var_dump($books);

foreach($books as $book){
    // var_dump($book);

    echo 'Title: ' . $book['title'] . '<br>';
    echo 'Author: ' . $book['author'] . '<br>';
    echo 'Year: ' . $book['year'] . '<br>';
    echo '_______________' . '<br>';
}


   //While Loop:
//    The while loop runs as long as the specified condition is true. 
//    It checks the condition before each iteration,
//    so if the condition is false at the beginning, the loop won't run even once.



   $counter = 1;
   while($counter <5){
    echo 'The number is ' .$counter.'<br>';
    $counter++;
   }


   //for loop:
    // 2. For Loop:
    // The for loop is used when you know how many times 
    // you want to execute the code. It includes initialization, 
    // condition, and increment/decrement all in one line.
   

    // syntax:
    // for (initialization; condition; increment) {
    //     // code to be executed
    // }



    for($i = 1; $i <= 10 ; $i++){
        echo 'the Number is '.$i. '<br>';
    }



?>

</body>
</html>
