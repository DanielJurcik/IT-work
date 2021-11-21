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
            <th> ID </th>
            <th> Job title </th>
            <th> Company </th>
            <th> Salary range </th>
            <th> Work place </th>
            <th> Operations </th>
          </tr>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td>{{ $offer->id }}</td>
                <td>{{ $offer->title }}</td>
                <td>{{ $offer->company->name }}</td>
                <td>{{ $offer->salary_min }} - {{ $offer->salary_max }} €</td>
                <td>{{ $offer->work_place }}</td>
                <td>
                  <a href="{{ route('select', ['id' => $offer->id]) }}">Detail</a>
                  <a href="{{ route('delete', ['id' => $offer->id]) }}">Vymazat</a>
                  <a href="{{ route('update-form', ['id' => $offer->id]) }}">Aktualizovat</a>
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
