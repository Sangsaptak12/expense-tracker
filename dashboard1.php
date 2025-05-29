<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Dashboard Design</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="logo"> </div>
        <ul class="menu">
            <li class="active">
                <a href="#" id="dashboardLink">
                    <span class="ic2"><ion-icon name="aperture-outline"></ion-icon></span>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" id="profileLink">
                    <span class="ic2"><ion-icon name="person-outline"></ion-icon></span>
                    <span>Profile</span>
                </a>
            </li>

            <li>
                <a href="#" id="expenseLink">
                    <span class="ic2"><ion-icon name="folder-open-outline"></ion-icon></span>
                    <span>Expanse</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="ic2"><ion-icon name="stats-chart-outline"></ion-icon></span>
                    <span>Statistics</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="ic2"><ion-icon name="settings-outline"></ion-icon></span>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="logout_db.php" id="logoutButton">
                    <span class="ic2"><ion-icon name="log-out-outline"></ion-icon></span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    </div>
    <div class="main--content">
        <div class="dashboard-content" id="dashboardContent">
            <div class="header_wrapper">
                <div class="header--title">
                    <span>Primary</span>
                    <h2>Dashboard</h2>
                </div>
                <div class="user--info">
                    <div class="search--box">
                        <span class="sr_btn"><ion-icon name="search-outline"></ion-icon></span>
                        <input type="text" placeholder="Search" />
                    </div>
                </div>
            </div>
            <div class="exp--container">
                <h3 class="main--title">
                    Expanse data :</h3>
                <div class="card--wrapper">
                    <div class="box1">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">TODAYS EXPENSE :</span>
                                <span class="rupee" id="val"></span>
                            </div>
                            <!-- <span class="rupee"></span><br> -->
                            
                        </div>

                    </div>
                    <div class="box1">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">YOUR SALARY:</span>
                                <span class="rupee" id="val2"></span><br>
                            </div>
                            
                        </div>

                    </div>
                    <div class="box1">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">YOUR EMI/BILL:</span>
                                <span class="rupee" id="val3"></span>
                            </div>
                                                        
                        </div>

                    </div>
                    <div class="box1">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">MONTHLY SAVINGS :</span>
                                <span class="rupee" id="val4"></span>
                            </div>
                            
                            
                        </div>

                    </div>
                </div>
            </div>

            <div class="table-container">
                <table id="expenses-table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Transaction Name</th>
                            <th>Description</th>
                            <th>Amount</th>
                            <th>Category of Expense</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Table rows will be dynamically displayedhere -->
                    </tbody>
                </table>
            </div>
        </div>
        <!-- profile form-->
        <div class="profile-details" id="profileFormContainer">

            <h2>Profile Details</h2>
            <form id="profileForm" action="profile_db.php" method="post">
                <div class="form-group">
                    <label for="fullName">Full Name:</label>
                    <input type="text" id="fullName" name="fullName" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="profession">Profession:</label>
                    <input type="text" id="profession" name="profession" required>
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" id="salary" name="salary" required>
                </div>
                <div class="form-group">
                    <label for="rent1">Home EMI:</label>
                    <input type="text" id="rent1" name="rent1" required>
                </div>
                <div class="form-group">
                    <label for="rent2">Car EMI:</label>
                    <input type="text" id="rent2" name="rent2" required>
                </div>
                <div class="form-group">
                    <label for="rent3">Electric Bill:</label>
                    <input type="text" id="rent3" name="rent3" required>
                </div>

                <button type="submit">Save</button>
            </form>


        </div>
        <!-- add a expense -->
        <div class="addexpense" id="expensecontainer">
            <h2>Expenses Details</h2>
            <form id="expenseForm" action="exp_db.php" method="post">
                <div class="form-group">
                    <label for="Exp_ID">Expense ID :</label>
                    <input type="text" id="Exp_ID" required>
                </div>
                <div class="form-group">
                    <label for="expenseName">Expense Name:</label>
                    <input type="text" id="expenseName" name="expenseName" required>
                </div>
                <div class="form-group">
                    <label for="details">Add Details</label>
                    <textarea rows="4" cols="50" id="details" name="details" required></textarea>
                </div>
                <div class="form-group">
                    <label for="expenseAmount">Expense Amount (Rs.):</label>
                    <input type="number" id="expenseAmount" name="expenseAmount" required>
                </div>

                <div class="form-group">
                    <label for="Date">Date:</label>
                    <input type="date" id="Date" name="Date" required>
                </div>
                <div class="form-group">
                    <label for="category">Category Of Expenses:</label>
                    <select id="cat" name="category" required>
                        <option value="Food">Food</option>
                        <option value="housing">Housing</option>
                        <option value="medical">Medical</option>
                        <option value="rent">Rent</option>
                        <option value="transport">Transportation</option>
                        <option value="other">Others</option>
                    </select>
                </div>


                <button type="submit">Add Expense</button>
            </form>

        </div>

    </div>
    <script src="script2.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>