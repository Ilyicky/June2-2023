<html>
    <head>
        <title>
            Reports
        </title>
    <link rel="stylesheet" href="/assets/css/reports.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <Header>
            <div class="navbar">
            <img src="/assets/images/icon2.png" class="logo">
                <ul>
                    <li><a href="/adminhome">Home</a></li>
                    <li><a href="/adminabout">About</a></li>
                    <li><a href="/virtualmap">Virtual Map</a></li>
                    <li><a href="/adminsearch">Search Land</a></li>
                    <li><a href="/documents">Land Documents</a></li>
                    <li><a href="/reports">Reports</a></li>
                    <li><a href="/profile">
                        <img src="/assets/images/user.png" alt="Profile" class="user">
                    </a>
                    <ul class="dropdown">
                        <li><a href="/homepage" onclick="logout()">Logout</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </Header>

        <div class="document-page">
            <h1>Generated Reports</h1>

        <main>
            <div class="report-container">
                <div class="report-box">
                    <h3>Total Size of Area: </h3>
                    <p id="total-area"><?php echo $totalArea; ?></p>
                </div>
                <div class="report-box">
                    <h3>Total number of Lots:</h3>
                    <p id="total-lots"><?php echo $totalLot; ?></p>
                </div>
                <div class="report-box">
                    <h3>Number of Land Report:</h3>
                    <p id="total-reports"><?php echo $totalReports; ?></p>
                </div>
                <div class="report-box">
                    <h3>Number of Land without Papers:</h3>
                    <p id="total-papers"><?php echo $totalNoReports; ?></p>
                </div>
            </div>
	    </main>
    </body>
</html>
    