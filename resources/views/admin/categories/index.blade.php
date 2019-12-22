@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breadcrumb')
         @slot('title') Список Категорий @endslot
         @slot('parent') Главная @endslot
             @slot('active') Список Категорий @endslot
    @endcomponent
    <hr>
    <a href="{{route('admin.category.create')}}" calss="btn btn-primary pull-right">
        <i class="fa fa-plus-square-o"></i>Создать категорию</a>
    <table class="table table-striped">
        <thead>
            <th>Наименование</th>
            <th>Публекация</th>
            <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse($categories as $category)
                <tr>
                    <td>{{$category->categories}}</td>
                    <td>{{$category->published}}</td>
                    <td><a href="{{route('admin.category.edit', ['id'=>$category->id])}}"><i class="fa fa-edit"></i></a></td>

                </tr>
            @empty

            <tr colspan="3" class="text-center"><h2>Данные отсутствуют</h2></tr>

        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">
                    {{$categories->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
</div>


@endsection
