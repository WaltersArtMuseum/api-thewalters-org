<!DOCTYPE html>
<html>
<head>
    <title>Walters Object Tombstone Generator</title>
    <style>
      hgroup * {font-size: 125%;}
      form, #tombstone {margin-bottom:5em;}
        .italic-title {
            font-style: italic;
        }
    </style>
    <script>
        function toggleAccessionNumber() {
            var numberElement = document.getElementById('accessionNumber');
            if (numberElement.style.display === 'none') {
                numberElement.style.display = 'inline';
            } else {
                numberElement.style.display = 'none';
            }
        }

        function toggleItalics() {
            var titleElement = document.getElementById('title');
            if (titleElement) {
                var fontStyle = window.getComputedStyle(titleElement).fontStyle;
                titleElement.style.fontStyle = fontStyle === 'italic' ? 'normal' : 'italic';
            }
        }
    </script>
</head>
<body>
    <hgroup><h1>Tombstone Generator</h1>

    <p>This tool writes a "tombstone" credit line for online artworks from the Walters Art Museum. Since most artworks are online, it should be able to describe most any artwork you want to work with in any marketing and communications materials. The output is formatted according to the M&C section of the Walters Styleguide.</p></hgroup>

    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="accessionNumber">Accession Number:</label>
        <input type="text" name="accessionNumber" id="accessionNumber" required>
        <input type="submit" value="Search">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_GET['accessionNumber'])) {
        // Sanitize and validate the user input
        $accessionNumber = trim($_GET['accessionNumber']);
        if (!preg_match('/^[a-zA-Z0-9.-]+$/u', $accessionNumber)) {
            echo "<h2>Invalid Accession Number format.</h2>";
            exit;
        }

        // Establish a connection to the MySQL database
        $servername = "localhost";
        $dbname = "collections";
        $username = "fastspot";
        $password = "wheat1";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare the SQL query with a parameter placeholder
        $sql = "SELECT
    TRIM(CASE
        WHEN creator.gender IS NOT NULL THEN art.creator_search_string
        ELSE NULL
    END) AS creator_search_string,
    TRIM(art.title) AS title,
    TRIM((
        SELECT location
        FROM em_geography_other
        WHERE art = art.id
        LIMIT 1
    )) AS place_of_origin,
    TRIM(art.date) AS date,
    TRIM(art.credit) AS credit,
    TRIM(art.number) AS number,
    art.id,
    art.route
FROM
    em_art AS art
    INNER JOIN em_art_creators AS a_c ON art.id = a_c.art
    INNER JOIN em_creators AS creator ON a_c.creator = creator.id
    INNER JOIN em_geography_other AS geo ON geo.art = a_c.art
WHERE
    art.number = ?
LIMIT 1";

        // Prepare and bind the parameter
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $accessionNumber);

        // Execute the query
        $stmt->execute();

        // Retrieve and display the results
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p id='tombstone'>";

                // Show artist name, if available
                if ($row['creator_search_string'] !== null) {
                    echo $row['creator_search_string'] . ", ";
                }

                // always show a title
                echo "<a href='https://purl.thewalters.org/art/{$row['number']}'><em id='title' style='font-style: italic;'>{$row['title']}</em></a>, ";

                // when artist is unknown, show place of origin
                if ($row['creator_search_string'] === null) {
                    echo $row['place_of_origin'] . ", ";
                }

                // Display date but without the parenthetical suffix
                $date = preg_replace('/\s*\([^)]*\)/', '', $row['date']);
                echo trim($date) . ". ";

                echo $row['credit'];
                echo "<span id='accessionNumber'>, acc. no. " . $row['number'] . "</span>";
                echo "</p>";

                // Add a button to toggle the accession number text
                echo "<button onclick='toggleAccessionNumber()'>Toggle Accession Number</button>";

                // Add a button to toggle the title's italics
                echo "<button onclick='toggleItalics()'>Toggle Italics</button>";
            }
        } else {
            echo "<h2>No results found for the provided Accession Number.</h2>";
        }

        // Close the statement and database connection
        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
