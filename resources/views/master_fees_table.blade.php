@if(!is_null($res))
<div  id="result">
  <div class="col-md-6">
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Contact</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th scope="col">Father Name</th>
              <th scope="col">Course</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
            <?php $i=1 ?>
               
            @foreach($res as $student)
            <tr>
              <th scope="row"> {{$i++}}</th>
              <td>{{$student->student_name}}</td>
              <td>{{$student->student_contact}}</td>
              <td>{{$student->gender}}</td>
              <td>{{$student->email}}</td>
              <td>{{$student->father_name}}</td>
              <td>{{$student->course_id}}</td>
              <td>
                <button class="btn-delete btn btn-info btn-sm" data-id={{$student->id}} >Delete</button>

                <button data-student_id="{{ $student->id }}" data-student_name="{{$student->student_name}}" data-student_email="{{$student->email}}" class="edit-student btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Edit</button>

              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
  </div>
</div>
@endif
 