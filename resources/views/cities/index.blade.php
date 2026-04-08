   @extends('layouts.master')

   @section('title')  المدن @endsection


   @section('content')
       
   
   <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 page-title">إدارة المدن</h2>
                 
                    <a href="{{ route('cities.create') }}" class="btn btn-primary  px-3 shadow-sm">
                        <i class="fas fa-plus mr-1"></i> إضافة مدينة جديدة
                    </a>
                </div>

                <div class="card shadow">
                    <div class="card-body p-0">

                        @include('components.messages')

                        <table class="table table-hover table-border bg-white text-center mb-0">
                            <thead class="thead-light">
                                <tr>
                                  
                                    <th class="text-center">ID</th>
                                    <th class="text-center">الأسم</th>
                                    <th class="text-center">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cities as $city)
                             
                         
                            
                                    
                       
                                    <td class="text-muted">#{{ $city->id }}</td>
                                    
                       
                                    <td class="fw-bold text-dark">{{ $city->name }}</td>
                       
                                    <td>
                                        <div class="d-flex justify-content-center">
                                 
                                            <a href="{{ route('cities.edit',$city->id) }}" 
                                               class="btn  btn-primary shadow-sm px-3 mr-2">
                                                <i class="fas fa-edit"></i> تعديل
                                            </a>
                             
                                            <form action="{{ route('cities.destroy', $city->id) }}" method="POST" 
                                                  class="m-0">
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
