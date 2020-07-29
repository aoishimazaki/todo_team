<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container-fulid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-dark bg-dark">
                    <a href="index.php" class="navbar-brand">Todo_Team</a>
                    <ul class="nav nav-pills">
                        
                        <li class="nav-item">
                            <a class="nav-link text-light"></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link text-light" href="create.php">Create</a>
                        </li>
                      
                        
                                <a class="nav-link text-light" href="signout.php">Sign out</a>
                        </li>
                       
                            <li class="nav-item">
                                <a class="nav-link text-light" href="signupform.php">Sign up</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="signinform.php">Sign in</a>
                            </li>

                        <li class="nav-item">
                            <form class="form-inline" method="get">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="title">
                                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>

                </nav>
            </div>
        </div>

        <div class="row p-3">
           
                <div class="col-sm-6 col-md-4 col-lg-3 py-3 py-3">
                    <div class="card">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                
                            </p>

                             <div class> 
                                 <h4>title</h4>
                                 <p>contents</p>
        
                             
                             </div class>
                             

                            <div class="text-right d-flex justify-content-end">

                                <a href="edit.php?id=" class="btn text-success">EDIT</a>
                                

                                <form action="delete.php" method="post">
                                    <input type="hidden" name="id" value=" ">
                                    <button type="submit" class="btn text-danger">DELETE</button>
                               
                                 </form>


                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</body>
</html>