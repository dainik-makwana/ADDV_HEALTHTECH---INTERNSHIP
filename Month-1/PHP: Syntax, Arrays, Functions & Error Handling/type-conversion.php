<table>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <?php
    $string = "100";
    $int = 50;
    $float = 33.45;
    $bool = true;
    $arr = [2, 3, 1, 4, 5];

    $conStr = (int) $string;
    $conInt = (bool) $int;
    $conFloat = (string) $float;
    $conBool = (float) $bool;
    $conArr = (int) $arr;
    ?>
    <tbody>
        <tr>
            <td>$string = "100";<br />$conStr = (int)$string;</td>
            <td><?php echo $conStr . "<br/>Type:  ";
                var_dump($conStr); ?></td>
        </tr>

        <tr>
            <td>$int = 50;<br />$conInt = (bool) $int;</td>
            <td><?php echo $conInt . "<br/>Type:  ";
                var_dump($conInt); ?></td>
        </tr>

        <tr>
            <td>$float = 33.45;<br />$conFloat = (string) $float;</td>
            <td><?php echo $conFloat . "<br/>Type:  ";
                var_dump($conFloat); ?></td>
        </tr>

        <tr>
            <td>$bool = true;<br />$conBool = (float) $bool;</td>
            <td><?php echo $conBool . "<br/>Type:  ";
                var_dump($conBool); ?></td>
        </tr>

        <tr>
            <td>$arr = [2, 3, 1, 4, 5];<br />$conArr = (int) $arr;</td>
            <td><?php echo $conArr . "<br/>Type:  ";
                var_dump($conArr); ?><br />(will return 0 if arr is empty)</td>
        </tr>
    </tbody>
</table>


<table>
    <h3 style="text-align: center;">Comparison</h3>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td colspan="2"><div>Double Equal to</div></td>
        </tr>
        <tr>
            <td>int(5) == int(5)</td>
            <td><?php echo (int)(5 == 5); ?></td>
        </tr>

        <tr>
            <td>int(5) == string("5")</td>
            <td><?php echo (int)(5 == "5"); ?></td>
        </tr>

        <tr>
            <td>int(5) == float(5.0)</td>
            <td><?php echo (int)(5 == 5.0); ?></td>
        </tr>

        <tr>
            <td>int(1) == bool(false)</td>
            <td><?php echo (int)(1 == false); ?></td>
        </tr>

        <tr>
            <td>float(5.0) == bool(true)</td>
            <td><?php echo (int)(5.0 == true); ?></td>
        </tr>


        <tr>
            <td colspan="2"><div>Triple Equal to</div></td>
        </tr>
        <tr>
            <td>int(5) === int(5)</td>
            <td><?php echo (int)(5 === 5); ?></td>
        </tr>

        <tr>
            <td>int(5) === string("5")</td>
            <td><?php echo (int)(5 === "5"); ?></td>
        </tr>

        <tr>
            <td>int(5) === float(5.0)</td>
            <td><?php echo (int)(5 === 5.0); ?></td>
        </tr>

        <tr>
            <td>int(1) === bool(false)</td>
            <td><?php echo (int)(1 === false); ?></td>
        </tr>

        <tr>
            <td>float(5.0) === bool(true)</td>
            <td><?php echo (int)(5.0 === true); ?></td>
        </tr>



        <tr>
            <td colspan="2"><div>Not Equal to</div></td>
        </tr>
        <tr>
            <td>int(5) != int(5)</td>
            <td><?php echo (int)(5 != 5); ?></td>
        </tr>

        <tr>
            <td>int(5) != string("5")</td>
            <td><?php echo (int)(5 != "5"); ?></td>
        </tr>

        <tr>
            <td>int(5) != float(5.0)</td>
            <td><?php echo (int)(5 != 5.0); ?></td>
        </tr>

        <tr>
            <td>int(1) != bool(false)</td>
            <td><?php echo (int)(1 != false); ?></td>
        </tr>

        <tr>
            <td>float(5.0) != bool(true)</td>
            <td><?php echo (int)(5.0 != true); ?></td>
        </tr>




        <tr>
            <td colspan="2"><div>Not Double Equal to</div></td>
        </tr>
        <tr>
            <td>int(5) !== int(5)</td>
            <td><?php echo (int)(5 !== 5); ?></td>
        </tr>

        <tr>
            <td>int(5) !== string("5")</td>
            <td><?php echo (int)(5 !== "5"); ?></td>
        </tr>

        <tr>
            <td>int(5) !== float(5.0)</td>
            <td><?php echo (int)(5 !== 5.0); ?></td>
        </tr>

        <tr>
            <td>int(1) !== bool(false)</td>
            <td><?php echo (int)(1 !== false); ?></td>
        </tr>

        <tr>
            <td>float(5.0) !== bool(true)</td>
            <td><?php echo (int)(5.0 !== true); ?></td>
        </tr>


        <tr>
            <td colspan="2"><div>Spaceship comparison</div></td>
        </tr>
        <tr>
            <td>int(5) <=> int(5)</td>
            <td><?php echo (int)(5 <=> 5); ?><br/>(returns -1, 0, 1)</td>
        </tr>
    </tbody>
</table>