@extends('layout')
@section('the-body')

    <form class="form" action="{{route('phone.store')}}" method="POST">
        @csrf
        
        <input type="text" name="image" placeholder="Enter image URL">
        <input type="text" name="name" placeholder="Enter Phone name">
        <input type="text" name="company" placeholder="Enter Company name">
        <input type="number" name="memory" placeholder="Enter memery size">
        <input type="number" name="ram" placeholder="Enter ram size">
        <input type="date" name="year" placeholder="Enter release year">
        <input type="number" name="price" placeholder="Enter price">
        <button>ADD</button>
    </form>

@endsection