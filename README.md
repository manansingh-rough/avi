Running the Project
Start XAMPP: Ensure Apache and MySQL are running.

Create the Database and Table:

Open phpMyAdmin at http://localhost/phpmyadmin/.
Import create_table.sql from the /sql directory to create the database and table.
Import CSV Data:

Open a browser and navigate to http://localhost/data_dashboard/import_data.php. This will import data from Data.csv into the data_dashboard database.
Access the Dashboard:

Open a browser and navigate to http://localhost/data_dashboard/index.html to view the data visualization dashboard.


/projectName
│
├── /data_dashboard/
│   ├── api_endpoint.php
│   ├── db_connection.php
│   ├── import_data.php
│   ├── index.html
│   └── Data.csv
└── /sql/
    └── create_table.sql
