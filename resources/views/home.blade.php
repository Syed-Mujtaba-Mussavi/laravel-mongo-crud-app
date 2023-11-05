@extends('layout')
@section('the-body')
    
    <div class="hero">
        <div>
        <h1>Heaven of the Mobile</h1>
        <p>Shop rapidly otherwise you lose the chance</p>
        <button>Shop now</button>
        </div>
        <img src="/phones/banner.png" alt="">
    </div>
    <div class="pic">
        <img src="/phones/a14.jpg" alt="">
        <img src="/phones/huawei-p60.jpg" alt="">
        <img src="/phones/iphone-15.jpg" alt="">
        <img src="/phones/mate-60.jpg" alt="">
    </div>
     <table>
        <thead>
           <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Company</td>
            <td>Memory</td>
            <td>Ram</td>
            <td>Year</td>
            <td>Price</td>
            <td>Delete</td>
            <td>Update</td>
           </tr>
        </thead>
        <tBody>
            @foreach($phones as $phone)
         <tr>
            <td class="image">
                <img src="{{$phone['image']}}" alt="">
            </td>
             <td>
                {{$phone['name']}}
             </td>
             <td>
                {{$phone['company']}}
             </td>
             <td>
                {{$phone['memory']}} GB
             </td>
             <td>
                {{$phone['ram']}} GB
             </td>
             <td>
                {{$phone['year']}}
             </td>
             <td>
                ${{$phone['price']}}
             </td>
             <td>
                <form action="{{route('phone.destroy',$phone->_id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                </form>
             </td>
             <td>
                <a href="{{route('phone.edit',$phone->id)}}">
                    <button>Update</button>
                </a>
             </td>
         </tr>
         @endforeach
        </tBody>
     </table>
@endsection