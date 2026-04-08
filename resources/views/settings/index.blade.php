@extends('layout.master')

@section('title') الإعدادات @endsection

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="h3 page-title"> إعدادات الموقع</h2>

    @if($setting)
        <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning shadow-sm">
            <i class="fas fa-edit"></i> تعديل
        </a>
    @endif
</div>

<div class="card shadow">
    <div class="card-body">

        @include('components.messages')

        @if($setting)

            <div class="row text-center">

                <div class="col-md-6 mb-3">
                    <h5 class="text-muted">اسم الموقع</h5>
                    <p class="fw-bold">{{ $setting->site_name }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <h5 class="text-muted">رقم الهاتف</h5>
                    <p class="fw-bold">{{ $setting->phone }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <h5 class="text-muted">العنوان</h5>
                    <p class="fw-bold">{{ $setting->address }}</p>
                </div>

                <div class="col-md-6 mb-3">
                    <h5 class="text-muted">البريد الإلكتروني</h5>
                    <p class="fw-bold">{{ $setting->email }}</p>
                </div>

                <div class="col-12 mt-3">
                    <h5 class="text-muted">عن الموقع</h5>
                    <p>{{ $setting->about_us }}</p>
                </div>

            </div>

        @else

            <div class="text-center">
                <p class="text-muted">لا توجد إعدادات حتى الآن</p>

                <a href="{{ route('settings.create') }}" class="btn btn-primary">
                    إضافة إعدادات
                </a>
            </div>

        @endif

    </div>
</div>

@endsection