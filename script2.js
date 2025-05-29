const profileLink = document.getElementById('profileLink');// Get the profile link and profile form container
const profileFormContainer = document.getElementById('profileFormContainer');
const dashboardLink = document.getElementById('dashboardLink');// Get the dashboard link and dashboard content
const dashboardContent = document.getElementById('dashboardContent');
const expenseLink = document.getElementById('expenseLink');
const expensecontainer = document.getElementById('expensecontainer');

// Add an event listener to the profile link for click event
profileLink.addEventListener('click', function (event) {
  event.preventDefault();

  if (profileFormContainer.style.display === 'none') {
    profileFormContainer.style.display = 'block';
    dashboardContent.style.display = 'none';
    expensecontainer.style.display = 'none';
  }
  else {
    profileFormContainer.style.display = 'none';
  }
});

// Add an event listener to the dashboard link for click event
dashboardLink.addEventListener('click', function (event) {
  event.preventDefault();
  if (dashboardContent.style.display === 'none') {
    dashboardContent.style.display = 'block';
    profileFormContainer.style.display = 'none';
    expensecontainer.style.display = 'none';
  }
  else {
    dashboardContent.style.display = 'none';
  }

});

//Add an event listner to the dashboard link for the click event
expenseLink.addEventListener('click', function (event) {
  event.preventDefault();

  if (expensecontainer.style.display === 'none') {
    expensecontainer.style.display = 'block';
    profileFormContainer.style.display = 'none';
    dashboardContent.style.display = 'none';

  }
  else {
    expensecontainer.style.display = 'none';
  }
});

profileFormContainer.style.display = 'none';
expensecontainer.style.display = 'none';


/// Expanse adding logical approach :-



const expensesData = [];
// Function to update the table with expenses data
function UpdateTable() {
  const tableBody = document.querySelector('#expenses-table tbody');
  tableBody.innerHTML = '';
  expensesData.forEach((expense) => {
    const row = document.createElement('tr');

    row.innerHTML = `
        <td>${expense.date}</td>
        <td>${expense.transactionName}</td>
        <td>${expense.description}</td>
        <td>${expense.amount}</td>
        <td>${expense.category}</td>
        <td><button class="edit-btn">Edit</button></td>
        <td><button class="delete-btn">Delete</button></td>
      `;

    tableBody.appendChild(row);
  });
}
function addExpense() {
  const expensesId = document.getElementById('Exp_ID').value;
  const expenseName = document.getElementById('expenseName').value;
  const expenseAmount = document.getElementById('expenseAmount').value;
  const date = document.getElementById('Date').value;
  const category = document.getElementById('cat').value;
  const description = document.getElementById('details').value;
  
  // Adding the new expense to the expensesData array
  expensesData.push({
    date: date,
    transactionName: expenseName,
    description: description,
    amount: `${expenseAmount}`,
    category: category,
  });

  UpdateTable();
  totalExpenses();
  deleteExpense() ;
}

// Add event listener to the Add Expense button
const frm = document.getElementById('expenseForm');
frm.addEventListener('submit', function (event) {
  event.preventDefault();
  addExpense();
  alert("YOUR EXPENSES ADDED SUCESSFULLY.");
  frm.reset();
});


function deleteExpense() 
{
  var table = document.getElementById('expenses-table');
  for (var i = 1; i < table.rows.length; i++) 
  {
    table.rows[i].cells[6].onclick = function () 
    {
      var choice = confirm("Do you want to delete ?");
      if (choice === true) 
      {
        var index = this.parentNode.rowIndex;
        console.log("Clicked row index:", index);
        table.deleteRow(index);
        alert("Expenses Deleted Sucessfully.");
        
      }

    };
  }
}

function totalExpenses()
{
  var table = document.getElementById("expenses-table"), sumVal = 0;
            
  for(var i = 1; i < table.rows.length; i++)
  {
    sumVal = sumVal + parseInt(table.rows[i].cells[3].innerHTML);
  }
  
  document.getElementById("val").innerHTML = "Rupees: " + sumVal;
  console.log(sumVal);

}
function sal()
{ var money;
  var salary = document.getElementById('salary').value;
  money=parseInt(salary);
  document.getElementById("val2").innerHTML = "Rupees: " + money;
  console.log(money);
}

const frm1= document.getElementById('profileForm');
frm1.addEventListener('submit', function (event) {
  event.preventDefault();
  sal();
  emi();
  savings();
  alert("YOUR PROFILE UPDATED SUCESSFULLY.");
});

function emi()
{
  var emi;
  var rent1 = document.getElementById('rent1').value;
  var rent2=document.getElementById('rent2').value;
  var rent3=document.getElementById('rent3').value;
  emi=parseInt(rent1)+parseInt(rent2)+parseInt(rent3);
  document.getElementById("val3").innerHTML = "Rupees: " + emi;
  console.log(emi);

}
function savings()
{ var save;
  var salary = document.getElementById('salary').value;
  var rent1 = document.getElementById('rent1').value;
  var rent2=document.getElementById('rent2').value;
  var rent3=document.getElementById('rent3').value;
  var table = document.getElementById("expenses-table"), totalexp = 0;      
  for(var i = 1; i < table.rows.length; i++)
  {
    totalexp = totalexp + parseInt(table.rows[i].cells[3].innerHTML);
  }
  save=parseInt(salary)-parseInt(rent1)-parseInt(rent2)-parseInt(rent3)-totalexp;
  document.getElementById("val4").innerHTML = "Rupees: " + save;
  console.log(save);


}


