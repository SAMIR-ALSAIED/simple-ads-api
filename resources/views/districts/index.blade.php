   @extends('layouts.master')
@section('title')  الاحياء @endsection



   @section('content')
       
   
   <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 page-title">إدارة الاحياء</h2>
                 
                    <a href="{{ route('districts.create') }}" class="btn btn-primary  px-3 shadow-sm">
                        <i class="fas fa-plus mr-1"></i> إضافة حى جديدة
                    </a>
                </div>

                <div class="card shadow">
                    <div class="card-body p-0">

                        @include('components.messages')


                        <table class="table table-hover table-bordered  text-center mb-0">
                            <thead class="thead-light">
                                <tr>
                                  
                                    <th class="text-center ">ID</th>
                                    <th class="text-center">الأسم</th>
                                    <th class="text-center">المدينة</th>
                                    <th class="text-center">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dirtricts as $dirtrict)
                             
                         
                            
                                    
                       
                                    <td class="text-muted">{{ $dirtrict->id }}</td>
                                    
                       
                                    <td class="fw-bold text-dark">{{ $dirtrict->name }}</td>
                                    <td class="fw-bold text-dark">{{ $dirtrict->city->name }}</td>
                       
                                    <td>
                                        <div class="d-flex justify-content-center">
                                 
                                            <a href="{{ route('districts.edit', $dirtrict->id) }}" 
                                               class="btn btn-primary shadow-sm px-3 mr-2">
                                                <i class="fas fa-edit"></i> تعديل
                                            </a>
                             
                                            <form action="{{ route('districts.destroy',$dirtrict->id) }}" method="POST" class="m-0">
                                                                     
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger shadow-sm px-3">
                                                    <i class="fas fa-trash-alt"></i> حذف
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>




   @endsection
