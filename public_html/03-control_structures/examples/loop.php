<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Loop</title>
    <style>
        .example {
            font-style: italic;
        }
    </style>
</head>

<body>
    <h1>Loops</h1>

    <h2>While Loops</h2>

    <p class="example">Example:</p>
    <?php

  $count = 0;
    // The while loop loops through a block of code as long as a specified condition is true.
    while ($count <= 10) {
        echo $count;
        echo '<br>';
        $count++; // increment by 1
    }
    ?>

    <p class="example">Example:</p>
    <?php
    $count = 0;
    while ($count <= 10) {
        if ($count == 5) {
            echo 'FIVE, ';
        } else {
            echo $count . ', ';
        }
        $count++; // increment by 1
    }
    ?>

    <p class="example">Example:</p>
    <ul>
        <?php
        $number = 0;
    while ($number <= 10) {
        echo "<li>{$number}: ";
        $number_is_even = $number % 2 == 0;
        if ($number_is_even) {
            echo 'is even';
        } else {
            echo 'is odd';
        }

        echo '</li>';
        $number++;
    }
    ?>
    </ul>

    <hr>

    <h2>For Loops</h2>

    <p class="example">Example:</p>
    <?php
    /**
     * The for statement creates a loop with 3 optional expressions:
     * Expression 1 is executed (one time) before the execution of the code block.
     * Expression 2 defines the condition for executing the code block.
     * Expression 3 is executed (every time) after the code block has been executed.
     */
    for (
        $count = 0; // Runs once
        $count <= 10; // defines the condition for executing the code block.
        $count++ // is executed (every time) after the code block has been executed.
    ) {
        echo $count . ', ';
    }
    ?>

    <p class="example">Example:</p>
    <ul>
        <?php
    for ($count = 0; $count <= 10; $count++) {
        echo '<li>';
        if ($count % 2 == 0) {
            echo "{$count} is even";
        } else {
            echo "{$count} is odd";
        }
        echo '</li>';
    }
    ?>
    </ul>

    <hr>

    <h2>Foreach Loops</h2>

    <p class="example">Example:</p>
    <?php
    $ages = [
        4, 8, 15, 16, 23, 42
    ];

    foreach ([4, 8, 15, 16, 23, 42] as $age) {
        echo "Age: {$age}<br>";
    }
    foreach ($ages as $age) {
        echo "Age: {$age}<br>";
    }

    foreach ($ages as $age) {
        if ($age >= 16) {
            echo "You can drive at $age <br>";
        } else {
            echo "You can't drive at $age <br>";
        }
    }
    ?>

    <hr>

    <h2>Review Loops (so far)</h2>

    <p class="example">Example:</p>
    <?php
    $ages = [4, 8, 15, 16, 23, 42];
    $i = 0;
    while ($i < count($ages)) {
        echo "Age: {$ages[$i]}<br>";
        $i++;
    }

    echo '<br>';

    for ($i = 0; $i < count($ages); $i++) {
        echo "Age: {$ages[$i]}<br>";
    }

    echo '<br>';

    foreach ($ages as $age) {
        echo "Age: {$age}<br>";
    }
    ?>

    <hr>

    <h2>Foreach Associative Arrays</h2>

    <p class="example">Example:</p>
    <?php
    $person = [
        'first_name' => 'Homer',
        'last_name' => 'Simpson',
        'address' => '742 Evergreen Terrace',
        'city' => 'Springfield'
    ];

    foreach ($person as $attribute => $data) {
        $attr_nice = ucwords(str_replace('_', ' ', $attribute));
        echo "<b>{$attr_nice}</b>: {$data}<br>";
    }
    ?>

    <p class="example">Example:</p>
    <?php
    $prices = [
        'Brand New Computer' => 2000,
        '1 month of music' => 10,
        'Learning PHP' => null
    ];

    foreach ($prices as $item => $price) {
        echo "{$item}: ";
        if (is_int($price)) {
            echo '$' . $price;
        } else {
            echo 'priceless';
        }
        echo '<br>';
    }
    ?>

    <hr>

    <h2>Continue</h2>

    <p>Example:</p>
    <?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            continue;
        }
        echo $count . ', ';
    }
    ?>

    <hr>

    <h2>Break</h2>

    <p>Example:</p>
    <?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            break;
        }
        echo $count . ', ';
        // 1, 2, 3, 4
    }
    ?>
</body>

</html>