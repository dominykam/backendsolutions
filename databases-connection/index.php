<?php
try {
    // Part 1:Connection
    // Passing correct path to chinook file
    $db = createSqliteDbConnection('chinook.sqlite'); 

    //(Select all genres)
    $artistsQuery = "SELECT * FROM artists"; 

    //Execute the query and return result as an array
    $artists = fetchResultForQuery($db, $artistsQuery);

    //customers column
    $customersColumnsQuery = "PRAGMA table_info(customers)";
    $customersColumns = fetchResultForQuery($db, $customersColumnsQuery);

    //Search for table columns based on table name
    if (isset($_GET['table'])) {
        $tableName = $_GET['table'];
        $columnsQuery = "PRAGMA table_info(" . $tableName . ")";
        $columns = fetchResultForQuery($db, $columnsQuery);
    }

    // closes DB connection
    closeSqliteDbConnection($db);
} 

catch (PDOException $e) {
    // Handle any errors
    echo "Error: " . $e->getMessage();
}

// Function to create a connection to the SQLite database
function createSqliteDbConnection($dbFilePath)
{
    // Create a new PDO instance for SQLite
    $db = new PDO("sqlite:" . $dbFilePath); 

    // Set error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db;
}

// Function to execute the query and return results as an associative array
function fetchResultForQuery($db, $query)
{
    $result = array();

    // Prepare the query (This is to prevent SQL injection)
    $preparedStatement = $db->prepare($query); 

    // Execute the query
    $preparedStatement->execute(); 

    // Fetch all results as an associative array
    $result = $preparedStatement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

// Function to close the database connection
function closeSqliteDbConnection($db)
{
    // Close the database connection
    $db = null;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/directory.css">
    <link rel="stylesheet" type="text/css" href="/css/facade.css">
</head>
<body>

    <h1>Databases: Connection</h1>

    <h2> Part 1 </h2>

    <h2>Getting all artists from the database</h2>

    <p><b>query:</b> <code><?= $artistsQuery ?></code></p>

    <table>
        <tr>
            <th>Artist Name</th>
        </tr>
        <?php foreach ($artists as $artist): ?>
        <tr>
            <td><?= $artist['Name'] ?></td>

        </tr>
        <?php endforeach ?>
    </table>


    <h2> Part 2 </h2>

     <!-- Part 2: Displaying Column Names for the 'customers' Table -->
     <h2>Column Names of the 'customers' Table</h2>

<table>
    <tr>
        <th>Column Name</th>
    </tr>
    <?php foreach ($customersColumns as $column): ?>  
    <tr>
        <td><?= $column['name'] ?></td>  <!-- shows column names -->
    </tr>
    <?php endforeach ?>
</table>


<h2> Part 3 </h2>

<!-- Search form -->
<form method="get" action="">
    <input type="text" name="table" placeholder="Enter table name" required>
    <input type="submit" value="Search">
</form>


<?php if (isset($tableName)): ?>
    <div id="results">
        <?php if (count($columns) > 0): ?>
            <h3>Columns in the '<?php echo htmlspecialchars($tableName); ?>' Table</h3>
            <ul>
                <?php foreach ($columns as $column): ?>
                    <li><?php echo htmlspecialchars($column['name']); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No results found for the table '<?php echo htmlspecialchars($tableName); ?>'.</p>
        <?php endif; ?>
    </div>
<?php endif; ?>

</body>
</html>
