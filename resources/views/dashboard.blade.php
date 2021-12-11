@include('base')
</div>
  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon btn-gradient-info text-white mr-2">
        <i class="mdi mdi-home"></i>
      </span> Dashboard
    </h3>
  </div>
  <div class="row">
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-danger card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
          <h4 class="font-weight-normal mb-3">Companies<i class="mdi mdi-chart-line mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-3">{{  $companies_count }}</h2>
          <h6 class="card-text">Increased by 8%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-info card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
          <h4 class="font-weight-normal mb-3">Jobs offers<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-3">{{  $offers_count }}</h2>
          <h6 class="card-text">Decreased by 10%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-success card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
          <h4 class="font-weight-normal mb-3">Job offers per company<i class="mdi mdi-diamond mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-3">{{  round($offers_count/$companies_count,2) }}</h2>
          <h6 class="card-text">Increased by 5%</h6>
        </div>
      </div>
    </div>
    <div class="col-md-3 stretch-card grid-margin">
      <div class="card bg-gradient-warning card-img-holder text-white">
        <div class="card-body">
          <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image">
          <h4 class="font-weight-normal mb-3">Salary average <i class="mdi mdi-diamond mdi-24px float-right"></i>
          </h4>
          <h2 class="mb-3">{{  round($salary_avg_min)}} - {{round($salary_avg_max)}} €</h2>
          <h6 class="card-text">Increased by 5% from 2020</h6>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Latest job offers</h4>
          <div class="table-responsive">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th> Headline </th>
                  <th> Company </th>
                  <th> Salary range </th>
                  <!-- <th> Work place </th> -->
                  <!-- <th> Operations </th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($job_offers as $offer)
                  <tr>
                      <td>{{ $offer->title }}</td>
                      <td>{{ $offer->company->name }}</td>
                      <td>{{ $offer->salary_min }} - {{ $offer->salary_max }} €</td>
                      <!-- <td>{{ $offer->work_place }}</td> -->
                      
                      <td class="table-operations">
                          <a title="info" href="{{ route('select-job-offer', ['id' => $offer->id]) }}"><i class="mdi mdi-information"></i></a>
                          <!--
                          <a title="edit" href="{{ route('update-job-offer-form', ['id' => $offer->id]) }}"><i class="mdi mdi-application-edit"></i></a>
                          <a title="delete" href="{{ route('delete-job-offer', ['id' => $offer->id]) }}"><i class="mdi mdi-delete"></i></a>
                          -->
                      </td>
                      
                  </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Newest companies</h4>
          <table class="table table-striped">
              <thead>
                <tr>
                  <th> Company </th>
                  <th> Sector </th>
                  <!-- <th> Operations </th> -->
                </tr>
              </thead>
              <tbody>
              @foreach($companies as $company)
                  <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->sector }}</td>
                      <!-- <td>{{ $offer->work_place }}</td> -->
                      
                      <td class="table-operations">
                          <a title="info" href="{{ route('select-company', ['id' => $company->id]) }}"><i class="mdi mdi-information"></i></a>
                          <!--
                          <a title="edit" href="{{ route('update-job-offer-form', ['id' => $offer->id]) }}"><i class="mdi mdi-application-edit"></i></a>
                          <a title="delete" href="{{ route('delete-job-offer', ['id' => $offer->id]) }}"><i class="mdi mdi-delete"></i></a>
                          -->
                      </td>
                  </tr>
              @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>

</div>



@include('footer')
