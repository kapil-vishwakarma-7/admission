@extends('layouts.header')
@section('body')

  <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> New Enquiry Form</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="/">Home</a></li>
              <li><i class="icon_document_alt"></i>Enquiry</li>
              <li><i class="fa fa-files-o"></i>Details</li>
            </ol>
          </div>
        </div>        
  <table class="table table-hover content">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Contact</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
      @foreach($enquiries as $enquiry)

      <tr>
        <td>{{$enquiry->id}} </td>
        <td>{{$enquiry->name}} </td>
        <td>{{$enquiry->email}} </td>
        <td>{{$enquiry->course->name}} </td>
        <td>{{$enquiry->contact}} </td>
        <td>{{$enquiry->address}} </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $enquiries->links() }}
<script type="text/javascript">
  $(document).on('click','.pagination a',function(e){
    e.preventDefault();
    var page=$(this).attr('href').split('page=')[1];
    // console.log($(this).attr('href').split('page='));
    getEnquiry(page);
  });
  function getEnquiry(page){
    $.ajax({
    url:'/enquairyview?page='+page,
    type:'GET',
    }).done(function(data){
      $('.content').html(data);
      location.hash=page;
    });
  }
</script>

</body>
@endsection
