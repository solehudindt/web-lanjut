<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sources/bootstrap.css">
    <title>Input</title>
</head>
<body>
<div class="p-3 mb-1 bg-dark text-white text-center">
  <h2>Tambah data</h2>
</div>

<div class="container">
    <form method="POST" action="proses-input.php" >
        <div class="form-group">
      
            <label for="firstname">First Name</label>
            <input class="form-control" type="text" name="firstname" id="firstname">
            
            <label for="lastname">Last Name :</label>
            <input class="form-control" type="text" name="lastname" id="lastname">
            <!-- <input type="hidden" name="lastupdate" value="<?= date('Y h:i:s') ?>"> -->

        </div>

        <button type="submit" class="btn btn-primary" name="submit" onclick="return alert('Data berhasil ditambahkan')">Submit</button>
        
    </form>
</div>

    <script src="sources/bootstrap.js"></script>
    <script src="sources/jquery.js"></script>
    <script src="sources/popper.js"></script>

</body>
</html>
