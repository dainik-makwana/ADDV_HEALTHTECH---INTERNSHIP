<table>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <?php
    $arr = [
        "Apple",
        "Mango",
        "Banana",
        21,
        23,
        56.50,
        34.56,
        true,
        false,
        [5,  3,  2,  1,  4,  6],
        [
            "name" => "Makwana Dainik",
            "age" => 22,
            "city" => "Ahmedabad",
            "isAdmin" => true
        ]
    ];
    ?>
    <tbody>
        <tr>
            <td colspan="2">
                <div>
                    $arr = ["Apple", "Mango", "Banana", 21, 23, 56.50, 34.56, true, false, [5, 3, 2, 1, 4, 6], <br />
                    &emsp;&emsp;&emsp;&emsp;
                    [<br />&emsp;&emsp;&emsp;&emsp;&emsp;
                    "name" => "Makwana Dainik", <br />&emsp;&emsp;&emsp;&emsp;&emsp;
                    "age" => 22, <br />&emsp;&emsp;&emsp;&emsp;&emsp;
                    "city" => "Ahmedabad", <br />&emsp;&emsp;&emsp;&emsp;&emsp;
                    "isAdmin" => true]<br />&emsp;&emsp;&emsp;&emsp;
                    ];
                </div>
            </td>
        </tr>
        <tr>
            <td>print_r($arr);</td>
            <td><?php print_r($arr); ?></td>
        </tr>

        <tr>
            <td>$arr[10]["name"];</td>
            <td><?php echo $arr[10]["name"]; ?></td>
        </tr>

        <tr>
            <td>$arr[10]["name"] = "ABCD";</td>
            <td><?php $arr[10]["name"] = "ABCD";
                echo $arr[10]["name"]; ?></td>
        </tr>


        <?php
        $users = [
            [
                "id" => 1,
                "name" => "Rahul",
                "role" => "Admin",
            ],
            [
                "id" => 2,
                "name" => "Amit",
                "role" => "Developer",
            ],
            [
                "id" => 3,
                "name" => "Priya",
                "role" => "Designer",
            ],
        ];
        ?>
        <tr>
            <td colspan="2">
                <div>
                    $users = [<br />
                    &emsp;[ "id" => 1, "name" => "Rahul", "role" => "Admin"],<br />
                    &emsp;[ "id" => 2, "name" => "Amit", "role" => "Developer"],<br />
                    &emsp;[ "id" => 3, "name" => "Priya", "role" => "Designer"],<br />
                    ];
                </div>
            </td>
        </tr>

        <tr>
            <td>print_r($users);</td>
            <td><?php echo print_r($users); ?></td>
        </tr>

        <tr>
            <td>foreach ($users as $user) {<br />
                &emsp;foreach ($user as $u) echo $u.", ";<br />
                }</td>
            <td>
                <?php foreach ($users as $user) {
                    foreach ($user as $key => $u) echo $key . ": " . $u . ",&emsp;";
                    echo "<br/>";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>


        <?php
        $arr = ["Apple", "Mango", "Banana", 21, 23, 56.50, 34.56, true, ["name" => "ABCD", "role" => "Full-Stack Developer"]];
        ?>
        <tr>
            <td colspan="2">
                <div>Array Functions</div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div>$arr = ["Apple", "Mango", "Banana", 21, 23, 56.50, 34.56, true, ["name"=>"ABCD", "role" => "Full-Stack Developer"]];</div>
            </td>
        </tr>

        <tr>
            <td>count($arr)</td>
            <td><?php echo count($arr) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>array_push($arr, "First", "Second")</td>
            <td><?php echo array_push($arr, "First", "Second") . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>print_r(array_pop($arr))</td>
            <td><?php echo print_r(array_pop($arr)) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>array_shift($arr)</td>
            <td><?php echo array_shift($arr) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>array_unshift($arr, "First", "Second")</td>
            <td><?php echo array_unshift($arr, "First", "Second") . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>in_array("Third", $arr, true)</td>
            <td><?php echo (int)(in_array("Third", $arr, true)) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>array_key_exists("name", $arr[9])</td>
            <td><?php echo (int)(array_key_exists("name", $arr[9])) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>

        <tr>
            <td>print_r (array_keys ($arr[9]))</td>
            <td><?php echo print_r(array_keys($arr[9])) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>print_r (array_values ($arr[9]))</td>
            <td><?php echo print_r(array_values($arr[9])) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>

        <tr>
            <td>sort ($arr)</td>
            <td><?php echo sort($arr) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>asort ($arr)</td>
            <td><?php echo asort($arr) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
        <tr>
            <td>ksort ($arr)</td>
            <td><?php echo ksort($arr) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>

        <tr>
            <td>array_reduce([10, 20, 30, 40, 50], fn(int $carry, int $item): int => $carry + $item, 0)</td>
            <td><?php echo array_reduce([10, 20, 30, 40, 50], fn(int $carry, int $item): int => $carry + $item, 0) . "<br/>";
                echo implode(",&ensp;", $arr); ?></td>
        </tr>
    </tbody>
</table>