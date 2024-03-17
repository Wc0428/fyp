<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers | Mah Heng Motor Enterprise</title>
    <link rel="stylesheet" href="../stylesheets/global-styles.css">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
    
        form {
            text-align: center;
        }
 
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        
        th {
            cursor: pointer;
        }
        
        .content{
            height: 590px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
  
</head>
<body>
    <div class="header">
        <div class="header-logo-excluder">
            <div class="header-logo"><img src="../image/logo.png"></div>
            <div class="header-button" onclick="window.location.href = 'customers.php'">Customers</div>
            <div class="header-button" onclick="window.location.href = 'suppliers.php'">Suppliers</div>
            <div class="header-button" onclick="window.location.href = 'invoices.php'">Invoices</div>
            <div class="header-button" onclick="window.location.href = 'services.php'">Services</div>
            <div class="header-button" onclick="window.location.href = 'stock.php'">Stock</div>
            <div class="header-button" onclick="window.location.href = 'report.php'">Report</div>
            <div class="header-button" onclick="window.location.href = '../index.html'">Log Out</div>
        </div>
    </div>
    <div class="content">
        <h1>Report</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date">
        <br>
        <label for="end_date">End Date   :</label>
        <input type="date" id="end_date" name="end_date">
        <br>
        <input type="submit" value="Generate Report" style="margin-top: 10px; text-align: left;">
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    
    if (!empty($start_date) && !empty($end_date)) {
        echo "<p>From: $start_date to $end_date</p>";
    } else {
        echo "<p>Please select valid date!</p>";
    }
}
?>
    </div>
    <div class="footer">
            <div class="footer-logo"><img src="../image/logo.png" alt="Logo"></div>
    </div>
    <script type="text/javascript" src="../scripts/global-scripts.js"></script>
</body>
</html>
