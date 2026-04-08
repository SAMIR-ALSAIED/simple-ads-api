@extends('layouts.master')

@section('content')

<div class="col-12">
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 page-title">إضافة حي جديد</h2>
    </div>

    <div class="card shadow">
        <div class="card-header bg-light">
            <h5 class="card-title mb-0">نموذج البيانات</h5>
        </div>

        <div class="card-body">
            <form action="{{ route('districts.store',) }}" method="POST">
                @csrf 

               
                <div class="form-group mb-4 text-left">
                    <label class="font-weight-bold">اسم الحي <span class="text-danger">*</span></label>

                    <input type="text" 
                           name="name" 
                           class="form-control  @error('name') is-invalid @enderror " 
                           placeholder="أدخل اسم الحي..." 
                           value="{{ old('name') }}" 
                           >

                    @error('name')
                        <span class="text-danger small d-block mt-1">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-4 text-left">
                    <label class="font-weight-bold">اختار المدينة <span class="text-danger">*</span></label>

                    <select name="city_id" class="form-control  @error('city_id') is-invalid @enderror">
                        <option value="">-- اختر مدينة --</option>

                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

             
                <div class="border-top pt-4 text-center">
                    <button type="submit" class="btn btn-primary px-5 shadow-sm">
                        حفظ البيانات
                    </button>

                    <a href="{{ route('districts.index') }}" class="btn  btn-danger px-4 border ml-2">إلغاء</a>
                </div>

            </form>
        </div>
    </div>

</div>

@endsection