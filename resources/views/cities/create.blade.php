@extends('layouts.master')

@section('content')

            <div class="col-12">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 page-title">إضافة مدينة جديدة</h2>
                 
                </div>

                <div class="card shadow">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">نموذج البيانات</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('cities.store') }}" method="POST">
                            @csrf 

                            <div class="form-group mb-4 text-left">
                                <label for="name" class="font-weight-bold">اسم المدينة <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="name" 
                                       id="name" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       placeholder="أدخل اسم المدينة هنا..." 
                                       value="{{ old('name') }}" 
                                        
                                       autofocus>
                                
                                                            
                        @error('name')
    <span class="text-danger d-block mt-1 small" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                            </div>

                            <div class="border-top pt-4 text-center">
                                <button type="submit" class="btn btn-primary px-5 shadow-sm">
                                    <i class="fas fa-save mr-1"></i> حفظ البيانات
                                </button>
                                <a href="{{ route('cities.index') }}" class="btn btn-danger px-4 border ml-2">إلغاء</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection