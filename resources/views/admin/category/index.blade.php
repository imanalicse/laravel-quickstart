@extends('layouts.admin')

@section('content')    
    <div class="page-content">
            <div class="intro-section">
                <h2>Total Category - <span></span> &nbsp;&nbsp; <a href="{{route('products.create')}}" class="btn-success btn">Add New</a></h2>
                <div class="aside-button">
                    <form class="form-inline" role="form">
                        <input type="text" name="search_key" class="form-control" id="search" placeholder="Search" value=" {{$search_key ?? ''}} ">
                        <button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
                    </form>
                    <a href="/admin/categories?search_reset=1" class="reload-btn btn-default btn"></a>
                </div>
            </div>
            <table class="table-striped table table-responsive">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th class="fx-action-links text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td> {{ $category->id }} </td>
                            <td> {{ $category->name }} </td>
                            <td>
{{--                                <img src="{{asset('storage/'. $category->image)}}" alt=""> {{ $category->image }}--}}
                             </td>
                            <td class="fx-action-links text-center">
                                <div class="action-group">
                                    <a href="{{url('/admin/products/'.$category->id.'/edit')}}" class="action edit"></a>
                                     <form method="post" class="delete-form" action="{{ route('products.destroy', $category->id) }}">
                                        @method('delete')
                                        @csrf
                                        <input type="submit" value="Delete" class="delete-action-form">
                                     </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection