@extends('layout')
@section('the-body')

<form class="form" action="{{route('phone.update',$phone->_id)}}" method="POST">
        @csrf
        @method('PUT')

        <input value="{{$phone->image}}" type="text" name="image" placeholder="Enter image URL">
        <input value="{{$phone->name}}" type="text" name="name" placeholder="Enter Phone name">
        <input value="{{$phone->company}}" type="text" name="company" placeholder="Enter Company name">
        <input value="{{$phone->memory}}" type="number" name="memory" placeholder="Enter memery size">
        <input value="{{$phone->ram}}" type="number" name="ram" placeholder="Enter ram size">
        <input value="{{$phone->year}}" type="date" name="year" placeholder="Enter release year">
        <input value="{{$phone->price}}" type="number" name="price" placeholder="Enter price">
        <button>Update</button>
    </form>

@endsection