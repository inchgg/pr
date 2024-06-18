const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');
const employeeList = document.getElementById('employeeList');

searchButton.addEventListener('click', searchEmployees);
searchInput.addEventListener('keyup', (event) => {
  if (event.key === 'Enter') {
    searchEmployees();
  }
});

function searchEmployees() {
  const searchTerm = searchInput.value.toLowerCase();
  const employees = employeeList.getElementsByClassName('employee');

  for (let i = 0; i < employees.length; i++) {
    const employee = employees[i];
    const employeeText = employee.textContent.toLowerCase();

    if (employeeText.includes(searchTerm)) {
      employee.style.display = 'block';
    } else {
      employee.style.display = 'none';
    }
  }
}
