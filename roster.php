<?php
require "roster_logic.php"
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roster Project</title>
    <link rel="stylesheet" href="roster_styles.css" />
</head>

<body>
    <!-- Form to input the year and the month -->
    <form method="get" action="">
        <!-- <label for="yearMonth">Year and Month:</label> -->
        <input type="month" class="year-month-input" id="yearMonth" name="yearMonth" value="<?php echo $yearMonth; ?>" required>
        <button type="submit" class="go-button">Go</button>
    </form>


    <!-- Roster table -->
    <table>
        <thead>

            <tr>
                <th>Staff</th>
                <?php foreach ($days as $day): ?>
                    <th>
                        <?php echo htmlspecialchars($day['day']) . '<br>' . htmlspecialchars($day['weekday']); ?>
                    </th>
                <?php endforeach; ?>
            </tr>

        </thead>
        <tbody>
            <!-- Get the details of the staff -->
            <?php foreach ($departments as $department => $staffList): ?>

                <tr class="department-row">
                    <td colspan="<?php echo count($days) + 1; ?>">
                        <?php echo htmlspecialchars($department); ?>
                    </td>
                </tr>

                <?php foreach ($staffList as $staff): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($staff); ?></td>
                        <?php for ($i = 0; $i < count($days); $i++): ?>
                            <td></td>
                        <?php endfor; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>