@extends('layouta.master')

@section('content')

<div class="col-12">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 page-title">تعديل حي</h2>
    </div>

    <div class="card shadow">
        <div class="card-header bg-light">
            <h5 class="card-title mb-0">تعديل البيانات</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('districts.update', $district->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-4 text-left">
                    <label class="font-weight-bold">اسم الحي</label>

                    <input type="text" 
                           name="name"
                           class="form-control  @error('name') is-invalid @enderror"
                           value="{{ old('name', $district->name) }}"
                           required>

                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-4 text-left">
                    <label class="font-weight-bold">اختار المدينة</label>

                    <select name="city_id" class="form-control  @error('city_id') is-invalid @enderror">
                        <option value="">-- اختر مدينة --</option>

                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}"
                                {{ old('city_id', $district->city_id) == $city->id ? 'selected' : '' }}>
                                {{ $city->name }}
                            </option>
                        @endforeach
                    </select>

                    @error('city_id')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="border-top pt-4 text-center">
                    <button type="submit" class="btn btn-primary px-5">
                        تحديث
                    </button>

                    <a href="{{ route('districts.index') }}" class="btn btn-danger">
                        إلغاء
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>

@endsection
