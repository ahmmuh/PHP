<?php
include './includes/menu.php';
include 'db_connection.php';

//write query for all users
$sql = 'SELECT name,email,telephone,id FROM user_table';

//make query and get result
$result = mysqli_query($conn,$sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($people);
// echo($people);

?>
<div class="container mt-4">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach($users as $user): ?>
            <tr>
                <td> <?php echo htmlspecialchars($user["id"]); ?></td>
                <td> <?php echo htmlspecialchars($user["name"]); ?></td>
                <td> <?php echo htmlspecialchars($user["email"]); ?></td>
                <td> <?php echo htmlspecialchars($user["telephone"]); ?></td>
            </tr>

            <?php endforeach ?>
        </tbody>
    </table>

</div>

<?php
include './includes/footer.php';

?>