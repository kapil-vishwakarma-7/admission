@extends('layouts.header')
@section('body')

  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Admission List</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="icon_document_alt"></i>Admission</li>
              <li><i class="fa fa-files-o"></i>Details</li>
            </ol>
          </div>
        </div>  
          
        <section class="panel">
                <header class="panel-heading">
                  Student List
                </header>
                <div class="panel-body">
            <div class="col-md-4">
  <input type="" class="form-control" placeholder="Search" name="">
  <br>
</div>
<div class="col-md-8">
  
</div>
<br>
                <div class="table-responsive">

                 
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th class="success">#</th>
        <th class="success">Name</th>
        <th class="success">Email</th>
        <th class="success">Student Contact</th>
        <th>Father Name</th>
        <th>Course</th>
      </tr>
    </thead>
    <tbody>
      @foreach($admissions as $admission)

      <tr>
        <td>{{$admission->id}} </td>
        <td>{{$admission->student_name}} </td>
        <td>{{$admission->email}} </td>
        <td>{{$admission->student_contact}} </td>
        <td>{{$admission->father_name}} </td>
        <td>{{$admission->course_id}} </td>
        <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">View Detail</a></li>
    <li><a href="#">Add Fee</a></li>
    <li><a href="#">Admission Update</a></li>
    <li><a href="#">Fee Update </a></li>
  </ul>
</div></td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
                  </div>

                      

                
              </section>      
  
</body>
@endsection
