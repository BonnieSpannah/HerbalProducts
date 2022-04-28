<div class="form-group">
    <label for="luo_name">Luo name</label>
    <input type="text" class="form-control form-control-lg @error('luo_name') is-invalid @enderror" id="luo_name"
           placeholder="Luo name" name="luo_name" value="{{ old('luo_name') ?? $product->luo_name  }}" autocomplete="luo_name" autofocus>
    @include('alerts.feedback', ['field' => 'luo_name'])
</div>

<div class="form-group">
    <label for="scientific_name">Scientific name</label>
    <input type="text" class="form-control form-control-lg @error('scientific_name') is-invalid @enderror" id="scientific_name"
           placeholder="Scientific name" name="scientific_name" value="{{ old('scientific_name') ?? $product->scientific_name  }}" autocomplete="scientific_name">
    @include('alerts.feedback', ['field' => 'scientific_name'])
</div>

<div class="form-group">
    <label for="treatment">Treatment</label>
    <input type="text" class="form-control form-control-lg @error('treatment') is-invalid @enderror" id="treatment"
           placeholder="Treatment" name="treatment" value="{{ old('treatment') ?? $product->treatment  }}" autocomplete="treatment">
    @include('alerts.feedback', ['field' => 'treatment'])
</div>

<div class="form-group">
    <label for="role">Select type</label>
    <select class="js-example-basic-single w-100 @error('type') is-invalid @enderror" id="type" name="type">
        @if(auth()->user()->role == 'Human Admin')
            <option value="1">Human</option>
        @elseif(auth()->user()->role == 'Animal Admin')
            <option value="2">Animal</option>
        @else
            <option value="1">Human</option>
            <option value="2">Animal</option>
        @endif
    </select>
    @include('alerts.feedback', ['field' => 'type'])
</div>
