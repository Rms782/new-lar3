@extends('admin.layouts.app_admin')

@section('content')

@component('admin.components.breadcrumb')
    @slot('title') Список категорий @endslot
    @slot('parent') Главная @endslot
    @slot('active') Категории @endslot
@endcomponent
<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a>
<table class="table table-striped">
    <thead>
    <th>id</th>
    <th>Наименование</th>
    <th>Публикация</th>
    <th class="text-right">Действие</th>
    </thead>
    <tbody>
    @forelse ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->parent_id}}</td>
            <td>
                <a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
        </tr>
    @endforelse
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3">
            <ul>
               {{$categories->links()}}
            </ul>
        </td>
    </tr>
    </tfoot>
</table>
{{--</div>--}}
@endsection
