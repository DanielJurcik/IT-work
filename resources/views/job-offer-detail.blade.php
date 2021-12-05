@include('base')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <a href="{{ route('select-all-offers') }}"> < View all job offers</a>
        <br><br>
        <h1>{{ $job_offer->title }}</h1>
        <h4 class="card-title">{{ $company->name }}</h4>
        <hr> 
        <p>Start date : {{ $job_offer->start_date }}</p>
        <p>Salary range: {{ $job_offer->salary_min }} - {{ $job_offer->salary_max }} €</p>
        <p>Work place : {{ $job_offer->work_place }}</p>
        <h3>Job decription</h3>
        <p>{{ $job_offer->description }}</p>
        <h3>Experiences needed :</h3>
        <p>{{ $job_offer->experience }}</p>
        <h3>Benefits :</h3>
        <p>{{ $job_offer->benefits }}</p>
        <hr>
        <h2>About company</h2>
        <p>Contact mail : {{ $company->contact_mail }}</p>
        <p>Contact phone : {{ $company->contact_phone }}</p>
        <p>Number of employees : {{ $company->number_of_staff }}</p>
        <h3>Company description :</h3>
        <p>Number of employees : {{ $company->description }}</p>
    </div>
  </div>
</div>

</div>
</div>

@include('footer')
