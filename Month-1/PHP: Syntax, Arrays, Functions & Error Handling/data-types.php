<table>
    <thead>
        <tr>
            <th>PHP Code</th>
            <th>Output</th>
        </tr>
    </thead>

    <?php
    $name = "Laptop";
    $quantity = 22;
    $price = 250.90;
    $isAvailable = true;
    $other = null;

    $products = ["Laptop", "Mouse", "Keyboard", "USB"];
    ?>
    <tbody>
        <tr>
            <td>$name = "Laptop";</td>
            <td><?php var_dump($name); ?></td>
        </tr>

        <tr>
            <td>$quantity = 22;</td>
            <td><?php var_dump($quantity); ?></td>
        </tr>

        <tr>
            <td>$price = 250.90;</td>
            <td><?php var_dump($price); ?></td>
        </tr>

        <tr>
            <td>$isAvailable = true;</td>
            <td><?php var_dump($isAvailable); ?></td>
        </tr>

        <tr>
            <td>$other = null;</td>
            <td><?php var_dump($other); ?></td>
        </tr>

        <tr>
            <td>$products = ["Laptop", "Mouse", "Keyboard", "USB"];</td>
            <td><?php var_dump($products); ?></td>
        </tr>
    </tbody>
</table>