<div class="card mb-3">
    <img src="/img/student759.jpg" class="card-img-top" alt="student759.jpg">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This Student Information.</p>

    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">CNE</th>
            <th scope="col">First Name</th>
            <th scope="col">Second Name</th>
            <th scope="col">Age</th>
            <th scope="col">Speciality</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
        <tr>
            <td>{{ $student->cne }} </td>
            <td>{{ $student->firstName }}</td>
            <td>{{ $student->secondName }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->speciality }}</td>
            
            <td>
            <a href="{{ url('/edit/'.$student->id ) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
