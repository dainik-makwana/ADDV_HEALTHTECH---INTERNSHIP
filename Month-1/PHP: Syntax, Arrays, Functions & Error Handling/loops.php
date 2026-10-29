<table>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <?php
    $products = ["Laptop", "Mouse", "Keyboard", "USB"];
    ?>
    <tbody>
        <tr>
            <td colspan="2"><div>$products = ["Laptop", "Mouse", "Keyboard", "USB"];</div></td>
        </tr>
        <tr>
            <td>
                for ($i = 0; $i
                < sizeof($products); $i++)<br />
                &emsp;echo $products[$i] . ", " ;<br />
            </td>
            <td>
                <?php for ($i = 0; $i < sizeof($products); $i++)
                    echo $products[$i] . ", ";
                ?>
            </td>
        </tr>
        <tr>
            <td>
                foreach ($products as $pr)<br />
                &emsp;echo $pr.", ";
            </td>
            <td>
                <?php foreach ($products as $pr)
                    echo $pr . ", ";
                ?>
            </td>
        </tr>

        <tr>
            <td>
                $i = 0;<br />
                while ($i
                < sizeof($products)) {<br />
                &emsp;echo $products[$i] . ", ";<br />
                &emsp;$i++;<br />
                }
            </td>
            <td>
                <?php $i = 0;
                while ($i < sizeof($products)) {
                    echo $products[$i] . ", ";
                    $i++;
                }
                ?>
            </td>
        </tr>


        <tr>
            <td>
                $i = 0;<br />
                do{<br />
                &emsp;echo $products[$i] . ", ";<br />
                &emsp;$i++;<br />
                }while ($i < sizeof($products));
                    </td>
            <td>
                <?php $i = 0;
                do {
                    echo $products[$i] . ", ";
                    $i++;
                } while ($i < sizeof($products));
                ?>
            </td>
        </tr>
    </tbody>
</table>