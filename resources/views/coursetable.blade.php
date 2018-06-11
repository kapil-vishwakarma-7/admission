<div  id="result">
  <div class="col-md-6">
         <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1 ?>
            @foreach($courses as $course)
            <tr>
              <th scope="row"> {{$i++}}</th>
              <td>{{$course->name}}</td>
              <td>{{$course->duration}}</td>
              <td>
                <button class="btn-delete btn btn-info btn-sm" data-id={{$course->id}} >Delete</button>

                <button data-course_id="{{ $course->id }}" data-course_name="{{$course->name}}" data-course_duration="{{$course->duration}}" class="edit-course btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">Edit</button>

              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
  </div>
</div>
 