<div class="form-group row">
    <label for="companyCombo" class="col-sm-2 title_color">Select Company</label>
    <div class="col-sm-4">
        <select class="form-control @error('company_id') is-invalid @endif" id="companyCombo" name="company_id">
            @if(isset($company))
                <option value="" >Select Company</option>
                @foreach($company as $cmp)
                    <option value="{{ $cmp->id }} ">{{ $cmp->name }}</option>
                @endforeach
            @else
                <option value="{{ $empolyee->company()->first()->id }} " selected>{{ $empolyee->company()->first()->name }}</option>
            @endif
        </select>
        @error('company_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="name" class="col-sm-2 title_color">Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control @error('name') is-invalid @endif" id="name" name="name"
            value="{{ old('name') ?? $empolyee->name }}">
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
            value="{{ old('email') ?? $empolyee->email }}">
        @error('email')
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
            rows="3" value="">{{ old('address') ?? $empolyee->address }}</textarea>
        @error('address')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="salary" class="col-sm-2 title_color">Salary</label>
    <div class="col-sm-4">
        <input type="number" class="form-control @error('salary') is-invalid @endif" id="salary" name="salary"
            value="{{ old('salary') ?? $empolyee->salary }}">
        @error('salary')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @endif
    </div>
</div>
