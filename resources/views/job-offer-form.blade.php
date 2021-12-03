@include('base')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Create job offer</h4>
        <p class="card-description">{{ $company_name }}</p>
        <form class="forms-sample" method="post" action="{{ route('insert-job-offer') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="company-id" value="{{ $company_id }}">
            <div class="form-group">
                <label for="headline-text">Headline text</label>
                <input type="text" class="form-control" id="headline-text" placeholder="Headline text" name="headlineText">
            </div>
            <div class="form-group">
                <label for="start-date">Start date</label>
                <input type="date" class="form-control" id="start-date" placeholder="Start date" name="startDate">
            </div>
            <div class="form-group">
                <label for="salary-min">Salary min</label>
                <input type="number" class="form-control" id="salary-min" placeholder="Salary min" name="salaryMin">
            </div>
            <div class="form-group">
                <label for="salary-max">Salary max</label>
                <input type="number" class="form-control" id="salary-max" placeholder="Salary max" name="salaryMax">
            </div>
            <div class="form-group">
                <label for="work-place">Work place</label>
                <input type="text" class="form-control" id="work-place" placeholder="Work place" name="workPlace">
            </div>
            <div class="form-group">
                <label for="job-desc">Job description</label>
                <textarea name="job-desc" class="form-control" placeholder="Job description ..." rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="experience">Experience needed</label>
                <textarea name="experience" class="form-control" placeholder="Experiences needed..." rows="12"></textarea>
            </div>
            <div class="form-group">
                <label for="benefits">Benefits</label>
                <textarea name="benefits" class="form-control" placeholder="Benefits..." rows="12"></textarea>
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Create new job offer</button>
            <!--<a class="btn btn-light" href="">Cancel</a>-->
        </form>
        </div>
    </div>
</div>

</div>
</div>

@include('footer')
