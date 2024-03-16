<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>Form Pendaftaran IT Club</h1>
    <form action="proses_form.php" method="POST">
    <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
        <input id="nim" name="nim" type="number" class="form-control" required="required">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-user"></i>
            </div>
            </div> 
            <input id="nama" name="nama" type="text" required="required" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label> 
        <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_0" type="radio" required="required" class="custom-control-input" value="laki-laki"> 
            <label for="jk_0" class="custom-control-label">Laki-laki</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input name="jk" id="jk_1" type="radio" required="required" class="custom-control-input" value="perempuan"> 
            <label for="jk_1" class="custom-control-label">Perempuan</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="program-studi" class="col-4 col-form-label">Program Studi</label> 
        <div class="col-8">
        <select id="program-studi" name="program-studi" required="required" class="custom-select">
            <option value="ti">Teknik Informatika</option>
            <option value="si">Sistem Informasi</option>
            <option value="bd">Bisnis Digital</option>
        </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-4">Keahlian</label> 
        <div class="col-8">
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="keahlian" id="keahlian_0" type="checkbox" class="custom-control-input" value="HTML"> 
            <label for="keahlian_0" class="custom-control-label">HTML</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="keahlian" id="keahlian_1" type="checkbox" class="custom-control-input" value="CSS"> 
            <label for="keahlian_1" class="custom-control-label">CSS</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="keahlian" id="keahlian_2" type="checkbox" class="custom-control-input" value="Javascript"> 
            <label for="keahlian_2" class="custom-control-label">Javascript</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="keahlian" id="keahlian_3" type="checkbox" class="custom-control-input" value="Python"> 
            <label for="keahlian_3" class="custom-control-label">Python</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="keahlian" id="keahlian_4" type="checkbox" class="custom-control-input" value="RWD"> 
            <label for="keahlian_4" class="custom-control-label">RWD Bootstrap</label>
        </div>
        <div class="custom-control custom-checkbox custom-control-inline">
            <input name="keahlian" id="keahlian_5" type="checkbox" class="custom-control-input" value="Lainnya"> 
            <label for="keahlian_5" class="custom-control-label">Lainnya</label>
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="domisili" class="col-4 col-form-label">Domisili</label> 
        <div class="col-8">
        <textarea id="domisili" name="domisili" cols="40" rows="3" class="form-control" required="required"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-envelope"></i>
            </div>
            </div> 
            <input id="email" name="email" type="email" required="required" class="form-control">
        </div>
        </div>
    </div> 
    <div class="form-group row">
        <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    </form>

</body>
</html>