<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {


?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salary and Hourly Wage Calculator</title>
        <link rel="stylesheet" href="salary_calc.css">
        <script src="calculator.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/canvas-confetti"></script>
    </head>

    <body>
        <nav>
            <a href="../HomePage/index.php" id="FUNI-logo">
                <h1>FUNI</h1><img src="../images/IMG_0049.jpg" alt="FUNI logo">
            </a>
            <ul>
                <li><a href="../Calendar/index.php">CALENDAR</a></li>
                <li><a href="../GoalTracker/index.php">GOAL TRACKER</a></li>
                <li class="dropdown">CALCULATORS
                    <div class="dropdown-content">
                        <a href="../Billing/index.php">BUDGET
                            CALCULATOR</a>
                        <a href="../Salary Calc/index.php">SALARY
                            CALCULATOR</a>
                        <a href="../Loan Calc/index.php">LOAN
                            CALCULATOR</a>
                    </div>
                </li>
                <li class="dropdown"><?php echo $_SESSION['user_name']; ?>
                    <div class="dropdown-content">
                        <a href="#">EDIT PROFILE</a>
                        <a href="#">OPTIONS</a>
                        <a href="../Logout/logout.php" id="signOut">LOGOUT</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="salary-container">
            <h2 class="fade-in">SALARY CALCULATOR</h2>
            <div class="form-container">
                <form id="wageForm">
                    <div class="input-background">
                        <div>
                            <label for="incomeType">Select Income Type:</label>
                            <select id="incomeType">
                                <option value="salary">Annual Income</option>
                                <option value="hourly">Hourly Wage</option>
                            </select>
                        </div>
                        <div>
                            <label for="incomeAmount">Enter Amount ($):</label>
                            <input type="number" id="incomeAmount" required>
                        </div>
                        <div id="hoursPerWeekContainer" class="hidden">
                            <label for="hoursPerWeek">Hours per Week:</label>
                            <input type="number" id="hoursPerWeek">
                        </div>
                        <div>
                            <label for="state">Select State:</label>
                            <select id="state">
                                <option value="0">Alabama</option>
                                <option value="0.02">Alaska</option>
                                <option value="0.035">Arizona</option>
                                <option value="0.055">Arkansas</option>
                                <option value="0.06">California</option>
                                <option value="0.0463">Colorado</option>
                                <option value="0.05">Connecticut</option>
                                <option value="0">Delaware</option>
                                <option value="0">Florida</option>
                                <option value="0.0575">Georgia</option>
                                <option value="0.04">Hawaii</option>
                                <option value="0.075">Idaho</option>
                                <option value="0.0495">Illinois</option>
                                <option value="0.0323">Indiana</option>
                                <option value="0.0898">Iowa</option>
                                <option value="0.0525">Kansas</option>
                                <option value="0.05">Kentucky</option>
                                <option value="0.04">Louisiana</option>
                                <option value="0.0715">Maine</option>
                                <option value="0">Maryland</option>
                                <option value="0.051">Massachusetts</option>
                                <option value="0.0425">Michigan</option>
                                <option value="0.0765">Minnesota</option>
                                <option value="0.05">Mississippi</option>
                                <option value="0.054">Missouri</option>
                                <option value="0.0689">Montana</option>
                                <option value="0.0684">Nebraska</option>
                                <option value="0">Nevada</option>
                                <option value="0.05">New Hampshire</option>
                                <option value="0.055">New Jersey</option>
                                <option value="0.0485">New Mexico</option>
                                <option value="0.065">New York</option>
                                <option value="0.0575">North Carolina</option>
                                <option value="0.0175">North Dakota</option>
                                <option value="0">Ohio</option>
                                <option value="0.05">Oklahoma</option>
                                <option value="0.099">Oregon</option>
                                <option value="0.0307">Pennsylvania</option>
                                <option value="0">Rhode Island</option>
                                <option value="0.07">South Carolina</option>
                                <option value="0">South Dakota</option>
                                <option value="0.06">Tennessee</option>
                                <option value="0">Texas</option>
                                <option value="0.05">Utah</option>
                                <option value="0.035">Vermont</option>
                                <option value="0.0575">Virginia</option>
                                <option value="0">Washington</option>
                                <option value="0.065">West Virginia</option>
                                <option value="0.0765">Wisconsin</option>
                                <option value="0">Wyoming</option>
                            </select>
                        </div>
                        <div>
                            <button type="button" onclick="calculateNetIncome()">Calculate
                                Net Income</button>
                        </div>
                    </div>
                </form>
                <div class="results-container">
                    <h2>RESULTS</h2>
                    <div class="text-container">
                        <h3>Yearly Income After Taxes: $<span id="netIncome">0.00</span></h3>
                        <h3>Yearly Net Income Before Taxes: $<span id="yearlyIncomeBeforeTaxes">0.00</span></h3>
                        <h3>Weekly Income Before Taxes: $<span id="weeklyIncomeBeforeTaxes">0.00</span></h3>
                        <h3>Weekly Income After Taxes: $<span id="weeklyIncomeAfterTaxes">0.00</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("Location: ../Login/log.php");
    exit();
}
?>