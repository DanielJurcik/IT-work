@include('base')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Companies</h4>
      <!-- <p class="card-description"> Add class <code>.table-striped</code> -->
      </p>  
      @if(count($companies) > 0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th> Company name </th>
            <th> Sector </th>
            <th> Number of employees </th>
            <th> Contact mail </th>
            <th> IČO </th>
            <th> Operations</th>
          </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->sector }}</td>
                <td>{{ $company->number_of_staff }} people</td>
                <td>{{ $company->contact_mail }}</td>
                <td>{{ $company->ICO }}</td>
                <td class="table-operations">
                    <a title="info" href="{{ route('select-company', ['id' => $company->id]) }}"><i class="mdi mdi-information"></i></a>
                    <a title="edit" href="{{ route('update-company-form', ['id' => $company->id]) }}"><i class="mdi mdi-application-edit"></i></a>
                    <a title="remove" onclick="return confirm('Do you want to remove {{ $company->name }}?')" href="{{ route('delete-company', ['id' => $company->id]) }}"><i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
      @else
          No companies in database
      @endif
    </div>
  </div>
</div>

</div>
</div>

@include('footer')
