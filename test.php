<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                    <input type="number" id="expenseAmount" name="expenseAmount"required>
                </div>

                <div class="form-group">
                    <label for="Date">Date:</label>
                    <input type="date" id="Date" name="Date"required>
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
    
</body>
</html>