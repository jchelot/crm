<table class="table table-striped table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Address</th>
            <th scope="col">Postcode</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {
    // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row['premise_id'] ?></th>
                    <?php echo "<td><a href='/premise/edit_premise.php?premise_id=" . $row['premise_id'] . "'>" . $row['address'] . "</a></td>" ?>
                    <td><?php echo $row['postcode'] ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['country'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><?php echo $row['updated_at'] ?></td>
                </tr>
                <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </tbody>
</table>
