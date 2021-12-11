@include('base')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('select-company', ['id' => $company_id]) }}" class="btn btn-lg btn-gradient-info mb-4">< Back to {{ $company_name }}</a>
            <h4 class="card-title">Create job offer</h4>
            <p class="card-description">{{ $company_name }}</p>
            <form class="forms-sample" method="post" action="{{ route('insert-job-offer') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="company-id" value="{{ $company_id }}">
                <div class="form-group">
                    <label for="headline-text">Headline text</label>
                    <input required type="text" class="form-control" id="headline-text" placeholder="Headline text" name="headlineText">
                </div>
                <div class="form-group">
                    <label for="start-date">Start date</label>
                    <input required type="date" class="form-control" id="start-date" placeholder="Start date" name="startDate">
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
                    <input required type="text" class="form-control" id="work-place" placeholder="Work place" name="workPlace">
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
                <a class="btn btn-light" href="{{ route('select-company', ['id' => $company_id]) }}">Cancel</a>
            </form>
        </div>
    </div>
</div>

</div>
</div>

@include('footer')
