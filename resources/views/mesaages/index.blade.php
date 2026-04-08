   @extends('layouts.master')

   @section('title')  المدن @endsection


   @section('content')
       
   
   <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2 class="h3 page-title">إدارة الرسائل</h2>
                 
                    <a href="{{ route('messages.create') }}" class="btn btn-primary  px-3 shadow-sm">
                        <i class="fas fa-plus mr-1"></i> إضافة رسالة جديدة
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
                                    <th class="text-center">البريد الإلكتروني</th>
                                    <th class="text-center">الهاتف</th>
                                    <th class="text-center">الرسالة</th>
                                    <th class="text-center">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                
                             
                         
                             

                                @foreach ($messages as $message)
                                    <tr>

                       
                                    <td class="text-muted">{{ $message->id }}</td>
                                    
                                    <td>{{ $message->name }}</td>
                                    <td>{{ $message->email }}</td>
                                    <td>{{ $message->phone }}</td>
                                    <td>{{ Str::limit($message->message, 50) }}</td>
                               

                                    <td>
                  
                                        <div class="d-flex justify-content-center">
                                 
                                       
                             
                                            <form action="{{ route('messages.destroy', $message->id) }}" method="POST" 
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
