
<div class="form-group row">
    <label for="name" class="col-sm-2 title_color">Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('name') is-invalid @endif" id="name" name="name"
            value="{{ old('name') ?? $company->name }}">
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 title_color">Email</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('email') is-invalid @endif" id="email" name="email"
            value="{{ old('email') ?? $company->email }}">
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="website" class="col-sm-2 title_color">Website</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('website') is-invalid @endif" id="website" name="website"
            value="{{ old('website') ?? $company->website }}">
        @error('website')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="image" class="col-sm-2 title_color">image</label>
    <div class="col-sm-4">
        <input type="file" class="form-control @error('image') is-invalid @endif" id="image" name="image_url"
            value="{{ old('image') ?? $company->image }}">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="address" class="col-sm-2 title_color">Address</label>
    <div class="col-sm-4">
        <textarea type="text" class="form-control @error('address') is-invalid @endif" id="address" name="address"
            rows="3" value="">{{ old('address') ?? $company->address }}</textarea>
        @error('address')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
