
const mysql = require('mysql');

// Create a connection to the database
const connection = mysql.createConnection({
    host: 'srv861.hstgr.io',
    user: 'u711777167_alicia',
    password: '',
    database: 'u711777167_blogDB'
});

// Connect to the MySQL server
connection.connect((err) => {
    if (err) {
        console.error('Error connecting to the database: ' + err.stack);
        return;
    }

    console.log('Connected to database with ID ' + connection.threadId);

    // Perform a query
    const query = 'SELECT * FROM users'; // Replace with your query
    connection.query(query, (error, results, fields) => {
        if (error) {
            console.error('An error occurred while executing the query: ' + error.stack);
            return;
        }

        // Process the query results here
        console.log(results);
    });

    // End the connection
    connection.end(() => {
        console.log('Connection to database closed.');
    });
});
