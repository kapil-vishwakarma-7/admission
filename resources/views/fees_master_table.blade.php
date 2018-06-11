<div class="table-responsive" id="tab-fee_masters">
@if(!is_null($masters))

								 <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th width="5%">#</th>
        <th width="15%">Fees Type</th>
        <th width="20%">Amount</th>
        <th width="40%">Description</th>
        <th width="20%">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($masters as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->fees_type }}</td>
          <td>{{ $e->amount }}</td>
          <td>{{ $e->description }}</td>
          <td>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>			
@endif

									</div>
