@extends('layouts.master')

@section('content')

<div class="col-12">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="h3 page-title">إضافة رسالة جديدة</h2>
    </div>
 

    <div class="card shadow-lg border-0">
        <div class="card-header  text-white">
          
        </div>

        <div class="card-body p-4">

            <form action="{{ route('messages.store') }}" method="POST">
                @csrf

                <div class="row">

            
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">الاسم</label>
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="ادخل اسمك"
                            value="{{ old('name') }}">

                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">البريد الإلكتروني</label>
                        <input type="email" name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="ادخل بريدك الإلكتروني"
                            value="{{ old('email') }}">

                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">رقم الهاتف</label>
                        <input type="text" name="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            placeholder="ادخل رقم هاتفك"
                            value="{{ old('phone') }}">

                        @error('phone')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

               
                    <div class="col-md-12 mb-3">
                        <label class="font-weight-bold">الرسالة</label>
                        <textarea name="message" rows="5"
                            class="form-control @error('message') is-invalid @enderror"
                            placeholder="اكتب رسالتك هنا...">{{ old('message') }}</textarea>

                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5 shadow">
                        <i class="fas fa-paper-plane"></i> إرسال
                    </button>

                    <a href="{{ route('messages.index') }}" class="btn btn-outline-secondary ml-2">
                        رجوع
                    </a>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection