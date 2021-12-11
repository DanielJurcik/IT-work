@include('base')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <a class="underline" href="{{ route('select-all-offers') }}"> < View all job offers</a><br><br>
        <h4 class="card-title">Update job offer info</h4>
        <p class="card-description">{{ $company->name }}</p>
        <form class="forms-sample" method="post" action="{{ route('update-job-offer') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="company-id" value="{{ $company->id }}">
            <input type="hidden" name="jobOfferId" value="{{ $job_offer->id }}">
            <div class="form-group">
                <label for="headline-text">Headline text</label>
                <input value="{{ $job_offer->title }}" required type="text" class="form-control" id="headline-text" placeholder="Headline text" name="headlineText">
            </div>
            <div class="form-group">
                <label for="start-date">Start date</label>
                <input value="{{ $job_offer->start_date }}" required type="date" class="form-control" id="start-date" placeholder="Start date" name="startDate">
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text btn-gradient-info text-white">€</span>
                    </div>
                    <input type="number" id="salary-min" placeholder="Salary min" name="salaryMin" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text btn-gradient-info text-white">€</span>
                    </div>
                    <input type="number" id="salary-min" placeholder="Salary max" name="salaryMax" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="work-place">Work place</label>
                <input value="{{ $job_offer->work_place }}" required type="text" class="form-control" id="work-place" placeholder="Work place" name="workPlace">
            </div>
            <div class="form-group">
                <label for="job-desc">Job description</label>
                <textarea name="job-desc" class="form-control" placeholder="Job description ..." rows="8">{{ $job_offer->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="experience">Experience needed</label>
                <textarea name="experience" class="form-control" placeholder="Experiences needed..." rows="12">{{ $job_offer->experience }}</textarea>
            </div>
            <div class="form-group">
                <label for="benefits">Benefits</label>
                <textarea name="benefits" class="form-control" placeholder="Benefits..." rows="12">{{ $job_offer->benefits }}</textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Update job offer</button>
            <a class="btn btn-light" href="{{ route('select-all-offers') }}">Cancel</a>
        </form>
        </div>
    </div>
</div>

</div>
</div>

@include('footer')
