<?php
date_default_timezone_set('Asia/Tokyo');
$now = date("Y-m-d H:i");
$now[10] = 'T';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container-fulid">
        <div class="row">
            <div class="col-12">
                     <nav class="navbar navbar-dark bg-dark">
                    <a href="index.php" class="navbar-brand">Todo</a>
                </nav>
            </div>
        </div>
        <div class="row mt-4 px-4">
            <div class="col-12">
                <form action="store.php" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="deadline">Deadline</label>
                        <input type="datetime-local" class="form-control" name="deadline" id="deadline" value="<?= $now ?>">
                    </div>
                    <div class="form-group">
                        <label for="contents">Contents</label>
                        <textarea class="form-control" name="contents" id="contents" cols="30" rows="10"></textarea>
                    </div>
                   
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">POST</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

</head>
<body>
    
</body>
</html>