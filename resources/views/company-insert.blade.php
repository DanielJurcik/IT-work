@include('base')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <a href="{{ route('select-all-companies') }}" class="btn btn-lg btn-gradient-info mb-4">< View all companies</a>
        <h4 class="card-title">Add new company</h4>
        <p class="card-description">  </p>
        <form class="forms-sample" method="post" action="{{ route('insert-company') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="company-name">Company name</label>
                <input required type="text" class="form-control" id="company-name" placeholder="Company name" name="companyName">
            </div>
            <div class="form-group">
                <label for="sector">Sector</label>
                <input type="text" class="form-control" id="sector" placeholder="Sector" name="sector">
            </div>
            <div class="form-group">
                <label for="company-description">Company description</label>
                <textarea name="companyDescription" class="form-control" placeholder="Company description..." rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="number-of-employees">Number of employees</label>
                <input type="number" class="form-control" id="number-of-employees" placeholder="Number of employees" name="numberOfEmployees">
            </div>
            <div class="form-group">
                <label for="contact-mail">Contact mail</label>
                <input required type="email" class="form-control" id="contact-mail" placeholder="Contact mail" name="contactMail">
            </div>
            <div class="form-group">
                <label for="contact-phone">Contact phone</label>
                <input type="text" class="form-control" id="contact-phone" placeholder="Contact phone" name="contactPhone">
            </div>
            <div class="form-group">
                <label for="ico">ICO</label>
                <input type="number" class="form-control" id="ico" placeholder="ICO" name="ico">
            </div>
            <div class="form-group">
                <label for="dic">DIC</label>
                <input type="number" class="form-control" id="dic" placeholder="DIC" name="dic">
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Add company</button>
            <a class="btn btn-light" href="{{ route('select-all-companies') }}">Cancel</a>
        </form>
        </div>
    </div>
</div>

</div>
</div>

@include('footer')
