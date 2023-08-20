@extends('layouts.admin')

@section('content')
<div class="w-2/3 mx-auto">
    <div class="bg-white shadow-md rounded my-6">
        <ul class="divide-y divide-gray-200">
            @foreach ($categories as $category) <!-- เปลี่ยน $category เป็น $categories -->
            <li class="flex items-center py-4 px-6 hover:bg-gray-50">
                <span class="text-gray-700 text-lg font-medium mr-4">{{ $loop->iteration }}.</span>
                <div class="flex-1">
                    <a href="{{ route('category.show', ['category' => $category]) }}">
                        <h3 class="text-lg font-medium text-gray-800">{{ $category->name }}</h3>
                    </a>
                    <p class="text-gray-600 text-base"></p>
                </div>
                <span class="text-gray-400"></span>
            </li>
            @endforeach
        </ul>
    </table>
    <!-- Botón "Ver más" para la tabla de Autorizaciones Pendientes -->
                <div class="text-right mt-4">
                    <a href="{{route('admin.category_create')}}" class="bg-green-500 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                       Add Category</a>
                </div>
  </div>
</div>

@endsection