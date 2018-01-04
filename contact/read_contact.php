<table class="table table-striped table-responsive-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
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
                    <th scope="row"><?php echo $row['contact_id'] ?></th>
                    <?php echo "<td><a href='/contact/edit_contact.php?contact_id=" . $row['contact_id'] . "'>" . $row['firstname'] . "</a></td>" ?>
                    <td><?php echo $row['lastname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
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
