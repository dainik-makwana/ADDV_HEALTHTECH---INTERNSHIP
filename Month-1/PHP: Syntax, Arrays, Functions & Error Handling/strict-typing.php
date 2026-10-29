<?php

// declare(strict_types=1);

?>

<table>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td colspan="2"><div>Without</div></td>
        </tr>
        <tr>
            <td>
                function add (int $num1, int $num2): int {<br />
                &emsp;return $num1 + $num2;<br />
                }<br />
                add("10", "10")
            </td>
            <td>
                <?php function add1(int $num1, int $num2): int
                {
                    return $num1 + $num2;
                }
                echo "\"10\" + \"10\" = " . add1("10", "10"); ?>
            </td>
        </tr>



        <tr>
            <td colspan="2"><div>With</div></td>
        </tr>
        <tr>
            <td>
                declare(strict_types=1);<br />
                function add2(int $num1, int $num2): int {<br />
                &emsp;return $num1 + $num2;<br />
                }<br />
                add("10", "10")
            </td>
            <td>
                declare(strict_types=1); must declare at starting of the program <br /><br/>
                add("10", "10") will give "Uncaught TypeError"
                <?php
                // function add2(int $num1, int $num2): int
                // {
                //     return $num1 + $num2;
                // }
                // echo "\"10\" + \"10\" = " . add2("10", "10");
                ?>
            </td>
        </tr>
    </tbody>
</table>