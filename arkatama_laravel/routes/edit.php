<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<style>
        h2 {
            color: midnightblue;
            text-shadow:1px 1px black;
            text-align: center;
        }
        
		table, th, td {
			border: 2px solid black;
			border-collapse: collapse;
			padding: 20px;
            height: 10px;
    
        
		}
		input {
			color:black;
            border: 2px solid gray;
            width: 300px
            
		}
		input[type="text"], select {
			padding: 8px;
			border-radius: 5px;
			border: 2px solid gray;
		}
		button {
			padding: 5px 10px;
			background-color:darkcyan;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}

	</style>
    <h3>Edit Data</h3>
<!-- form id -->
    <label for="name">Nama Lengkap</label> <br>
    <input id="nama" type="input"> 
    
    <br><label for="isian-email">Email</label> <br>
    <input id="isian-email" type ="email"> <br>
    <label for="isian-password">Masukan Password</label> <br>
    <input type="isian-password" value ="********" name="password" >
    <br><button type="button" onclick="submit">Submit</button> <br>
    <br>
    <label type="isian-jenis kelamin">Jenis Kelamin</label>
    <br><input type="checkbox"> Laki-laki</label>
    <br><input type="checkbox"> Perempuan</input><br>
<!-- Alamat -->
    <br>
    <label type="isian-alamat">Alamat</label>
    <label for="isian-alamat">Alamat</label> <br>
    <textarea name="massage" rows="10" cols="30">Masukan Alamat</textarea>
<!-- Upload file -->
    <br>
    <label for ="isian-foto">Upload Foto</label> <br> 
    <button type="button" onclick="alert('foto')">Choose file</button> <br>
<!-- role -->
    <br>
    <label type="isian-jurusan">Role Pengguna</label> <br>
    <form action="/action_page.php">
    <input list="browsers">
    <datalist id="browsers">
    <input value="Mahasinswa">
    <option value="Staf">
    <option value="Dosen">
    <option value="Pelajar">
    </form>
    <br>
</body>
</html>
