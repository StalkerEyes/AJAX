<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Busqueda real estilo Datatable</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row text-center text-white bg-info">
            <div class="col-md-12">
                <h2>Busqueda real con estilo datatable</h2>
            </div>
        </div>
    </div>

    <div class="container mt-5 border shadow">
        <div class="row mt-3">
            <div class="col-md-1">
                <select class="custom-select my-3" name="" id="">
                    <option value="1">10</option>
                    <option value="2">20</option>
                    <option value="3">30</option>
                    <option value="4">40</option>
                </select>
            </div>
            <div class="col-md-3 my-3">
                <span class="btn btn-danger">PDF</span>
                <span class="btn btn-info">XSV</span>
                <span class="btn btn-success">DOCS</span>
            </div>
            <div class="col-md-8 my-3">
                <form class="form-inline justify-content-end" action="">
                    <label class="mr-3" for="">Buscar:</label><input class="form-control mr-sm-2" type="search" id="busqueda" name="bsuqueda" aria-label="Search">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="datos">
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>