<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" href=" {{ asset('css/style.css')}} ">
    <title>Student Managment System</title>
  </head>
  <body>
    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Managment System</h1>
        </div>
    </div>

    @if ($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
            </div>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">
            <div class="card mb-3">
                <img src="/img/smiling-girl-brunette-student-holding-notebooks-textbooks-stands-university_73872-1490.jpg" class="card-img-top" alt="smiling-girl-brunette-student-holding-notebooks-textbooks-stands-university_73872-1490.jpg">
                <div class="card-body">
                    <h5 class="card-title">Enter New Student Information</h5>

                <form action="{{ url('/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label >CNE</label>
                      <input type="text" name="cne" class="form-control" placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                        <label >Fist Name</label>
                        <input type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label >Second Name</label>
                        <input type="text" name="secondName" class="form-control" placeholder="Enter Second Name">
                    </div>
                    <div class="form-group">
                        <label >Age</label>
                        <input type="text" name="age" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label >Speciality</label>
                        <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                    </div>
                    <input value="Save" type="submit" class="btn btn-info">
                    <input value="Reset" type="reset" class="btn btn-warning">
                  </form>
                </div>
            </div>
            </section>
        </div>
    </div>

    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include('studentslist')
            </section>
            <section class="col"></section>
        </div>
    </div>

    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include('studentslist')
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="/img/smiling-girl-brunette-student-holding-notebooks-textbooks-stands-university_73872-1490.jpg" class="card-img-top" alt="smiling-girl-brunette-student-holding-notebooks-textbooks-stands-university_73872-1490.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Enter New Student Information</h5>
                <form action="{{ url('/update/'.$student->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label >CNE</label>
                      <input value="{{ $student->cne }}" type="text" name="cne" class="form-control" placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                        <label >Fist Name</label>
                        <input value="{{ $student->firstName }}" type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label >Second Name</label>
                        <input value="{{ $student->secondName }}" type="text" name="secondName" class="form-control" placeholder="Enter Second Name">
                    </div>
                    <div class="form-group">
                        <label >Age</label>
                        <input value="{{ $student->age }}" type="text" name="age" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label >Speciality</label>
                        <input value="{{ $student->speciality }}" type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                    </div>
                    <input value="Update" type="submit" class="btn btn-info">
                    <input value="Reset" type="reset" class="btn btn-warning">
                  </form>
                </div>
            </div>
            </section>
        </div>
    </div> 
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>