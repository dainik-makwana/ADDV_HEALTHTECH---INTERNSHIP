<table>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td colspan="2"><div>Nullable Type</div></td>
        </tr>
        <tr>
            <td>
                function concat (string $str1, string $str2): string {<br />
                &emsp;return ($str1 !== "") ? $str1 . " " . $str2 : null;<br />
                }<br />
                concat("Makwana", "Dainik")<br />
                concat("", "Dainik")
            </td>
            <td>
                <?php function concat(string $str1, string $str2): ?string
                {
                    return ($str1 !== "") ? $str1 . " " . $str2 : null;
                }
                echo "\"Makwana\" + \"Dainik\" = " . concat("Makwana", "Dainik");
                echo "<br/>Null:  " . concat("", "Dainik"); ?>
            </td>
        </tr>


        <tr>
            <td colspan="2"><div>Union Type</div></td>
        </tr>

        <tr>
            <td>
                function printId (int | string $id) {<br/>
                    &emsp;echo "ID: " . $id. "Input Type:"; var_dump($id);<br/>
                }<br/>
                printId(100);<br/>
                printId("501")<br/>
            </td>
            <td>
                <?php
                function printId(int|string $id)
                {
                    echo "ID: " . $id. "&emsp;&emsp;Input Type:&emsp;";
                    var_dump($id);
                    echo "<br/>";
                }
                printId(100);
                printId("501")
                ?>
            </td>
        </tr>
    </tbody>
</table>