<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}} ">
    <title>Student Management System</title>
  </head>
  <body>
    
    @include("navbar")

    <div class="row header-container">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-8 offset-2">
                    @include("studentlist")
                </section>
                {{-- <section class="col-md-5"></section> --}}
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZUVRGUBk5Hz-O_cXDOkH5TDwRdPqQ7sTetA&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Enter the information of the new student.</h5>
                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group mb-4">
                                    <label>NRC</label>
                                    <input type="text" name="NRC" class="form-control" placeholder="Enter NRC">
                                </div>
                                <div class="form-group mb-4">
                                    <label>First Name</label>
                                    <input type="text" name="firstName" class="form-control" placeholder="Enter the First Name">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Last Name</label>
                                    <input type="text" name="lastName" class="form-control" placeholder="Enter the Second Name">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Age</label>
                                    <input type="text" name="age" class="form-control" placeholder="Enter the Age">
                                </div>
                                <div class="form-group mb-4">
                                    <label>Speciality</label>
                                    <input type="text" name="speciality" class="form-control" placeholder="Enter the Speciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://dawnmagazines.com/wp-content/uploads/2020/10/EDUCATION.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Update information of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label>NRC</label>
                            <input type="text" value="{{ $student->NRC }}" name="NRC" class="form-control" placeholder="Enter NRC">
                            </div>
                            <div class="form-group mb-4">
                                <label>First Name</label>
                                <input type="text" value="{{ $student->firstName }}" name="firstName" class="form-control" placeholder="Enter the First Name">
                            </div>
                            <div class="form-group mb-4">
                                <label>Last Name</label>
                                <input type="text" value="{{ $student->lastName }}" name="lastName" class="form-control" placeholder="Enter the Second Name">
                            </div>
                            <div class="form-group mb-4">
                                <label>Age</label>
                                <input type="text" value="{{ $student->age }}" name="age" class="form-control" placeholder="Enter the Age">
                            </div>
                            <div class="form-group mb-4">
                                <label>Speciality</label>
                                <input type="text" value="{{ $student->speciality }}" name="speciality" class="form-control" placeholder="Enter the Speciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    @endif
    <footer></footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>