@include('base')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Jobs offers</h4>
      </p>  
      @if(count($offers) > 0)
      <table class="table table-striped">
        <thead>
          <tr>
            <th> Headline </th>
            <th> Company </th>
            <th> Salary range </th>
            <th> Work place </th>
            <th> Operations </th>
          </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>{{ $offer->title }}</td>
                <td>{{ $offer->company->name }}</td>
                <td>{{ $offer->salary_min }} - {{ $offer->salary_max }} €</td>
                <td>{{ $offer->work_place }}</td>
                <td class="table-operations">
                    <a title="info" href="{{ route('select-job-offer', ['id' => $offer->id]) }}"><i class="mdi mdi-information"></i></a>
                    <a title="edit" href="{{ route('update-job-offer-form', ['id' => $offer->id]) }}"><i class="mdi mdi-application-edit"></i></a>
                    <a title="delete" href="{{ route('delete-job-offer', ['id' => $offer->id]) }}"><i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>
      @else
          Neexistuju ziadne ulohy
      @endif
    </div>
  </div>
</div>

</div>
</div>

@include('footer')
