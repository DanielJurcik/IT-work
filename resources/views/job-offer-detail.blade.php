@include('base')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
        <a href="{{ route('select-all-offers') }}" class="btn btn-lg btn-gradient-info mb-4">< View all job offers</a>
        <a href="{{ route('select-company', ['id' => $company->id]) }}" class="btn btn-lg btn-gradient-success ml-4 mb-4">More info about {{ $company->name }}</a>
        <h1>{{ $job_offer->title }}</h1>
        <h4 class="card-title">{{ $company->name }}</h4>
        <hr> 
        <p><b>Start date :</b> {{ $job_offer->start_date }}</p>
        <p><b>Salary range:</b> {{ $job_offer->salary_min }} - {{ $job_offer->salary_max }} €</p>
        <p><b>Work place :</b> {{ $job_offer->work_place }}</p>
        <h3>Job decription</h3>
        <textarea name="experience" onkeyup="adjustHeight(this)" spellcheck="false" class="form-control detail-text-area" placeholder="Experiences needed..." rows="1">{{ $job_offer->description }} readonly</textarea>
        <h3>Experiences needed :</h3>
        <textarea name="experience" class="form-control detail-text-area" placeholder="Experiences needed..." >{{ $job_offer->experience }} readonly</textarea>
        <h3>Benefits :</h3>
        <textarea name="experience" class="form-control detail-text-area" placeholder="Experiences needed..." >{{ $job_offer->benefits }} readonly</textarea>
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

<script>
 window.onload = initTextArea();

function initTextArea(){
  let textareas = document.querySelectorAll('.detail-text-area');
  textareas.forEach(element => {
    adjustHeight(element);
  });
}
 
function adjustHeight(el){
    el.style.height = (el.scrollHeight > el.clientHeight) ? (el.scrollHeight+20)+"px" : "60px";
}



</script>

</div>
</div>

@include('footer')
