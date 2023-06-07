


<!DOCTYPE html>
<html>
<head>
	<title>Table CRUD</title>
    <h2>Table latihan CURD</h2>
	<br>
	<div>
		<label>Select ID:</label>
		<select id="id">
		</select>
		<button onclick="getData()">Get Data</button>
		<button onclick="updateData()">Update</button>
		<button onclick="deleteData()">Delete</button>
	</div>
	<style>
        * {
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }
        h2 {
            color: black;
            text-shadow:1px 1px black;
            text-align: center;
        }
		table, th, td {
			border: 2px solid black;
			border-collapse: collapse;
			padding: 22px;
		}
		th {
			background-color: darkcyan;
			color: white;

		}
		input[type="text"], select {
			padding: 8px;
			border-radius: 5px;
			border: 2px solid gray;
		}
		button {
			padding: 5px 10px;
			background-color: gray;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<br>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
       
    </table>

	<br>


	<script>
        const tbody = document.getElementById('tbody');
const nameInput = document.getElementById('price');
const emailInput = document.getElementById('status');
const idSelect = document.getElementById('name');

let data = [];

// Function to add data to the table
function addData() {
    const name = nameInput.value;
    const email = emailInput.value;
    if (name && email) {
        const newData = {
            id: data.length + 1,
            name: name,
            email: email
        };
        data.push(newData);
        renderTable();
        clearInputs();
        fillIdSelect();
    } else {
        alert('Please fill all fields!');
    }
}

// Function to render the table
function renderTable() {
    let html = '';
    data.forEach((item) => {
        html += `<tr>
                    <td>${item.name}</td>
                    <td>${item.price}</td>
                    <td>${item.status}</td>
                    <td>
                        <button onclick="editData(${item.id})">Edit</button>
                        <button onclick="deleteItem(${item.id})">Delete</button>
                    </td>
                </tr>`;
    });
    tbody.innerHTML = html;
}

// Function to clear

    </script>

</body>
</html>