@include('base')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Update company details</h4>
        <p class="card-description">  </p>
        <form class="forms-sample" method="post" action="{{ route('update-company') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $company->id }}">
            <div class="form-group">
                <label for="company-name">Company name</label>
                <input value="{{ $company->name }}" type="text" class="form-control" id="company-name" placeholder="Company name" name="companyName">
            </div>
            <div class="form-group">
                <label for="sector">Sector</label>
                <input value="{{ $company->sector }}" type="text" class="form-control" id="sector" placeholder="Sector" name="sector">
            </div>
            <div class="form-group">
                <label for="company-description">Company description</label>
                <textarea name="companyDescription" class="form-control" placeholder="Company description..." rows="8">{{ $company->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="number-of-employees">Number of employees</label>
                <input value="{{ $company->number_of_staff }}" type="number" class="form-control" id="number-of-employees" placeholder="Number of employees" name="numberOfEmployees">
            </div>
            <div class="form-group">
                <label for="contact-mail">Contact mail</label>
                <input value="{{ $company->contact_mail }}" type="emai;" class="form-control" id="contact-mail" placeholder="Contact mail" name="contactMail">
            </div>
            <div class="form-group">
                <label for="contact-phone">Contact phone</label>
                <input value="{{ $company->contact_phone }}" type="text" class="form-control" id="contact-phone" placeholder="Contact phone" name="contactPhone">
            </div>
            <div class="form-group">
                <label for="ico">ICO</label>
                <input value="{{ $company->ICO }}" type="number" class="form-control" id="ico" placeholder="ICO" name="ico">
            </div>
            <div class="form-group">
                <label for="dic">DIC</label>
                <input value="{{ $company->DIC }}" type="number" class="form-control" id="dic" placeholder="DIC" name="dic">
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Update company info</button>
            <a class="btn btn-light" href="{{ route('select-all-companies') }}">Cancel</a>
        </form>
        </div>
    </div>
</div>

</div>
</div>

@include('footer')
