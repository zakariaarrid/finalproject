@extends("layouts.admin")
@section("content")
    <h1>Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>user_id</th>
            <th>category_id</th>
            <th>photo</th>
            <th>title</th>
            <th>body</th>
            <th>created</th>
            <th>updated</th>
        </tr>
        </thead>
        <tbody>
           @if($posts)
               @foreach($posts as $post)
                 <tr>
                     <td>{{$post->id}}</td>
                     <td><a href={{route('posts.edit',$post->id)}}>{{$post->user->name}}</a></td>
                     <td>{{$post->category_id}}</td>
                     <td><img style="height:100px;"  src="{{$post->photo ? $post->photo->file:"https://via.placeholder.com/150"}}"></td>
                     <td>{{$post->title}}</td>
                     <td>{{$post->body}}</td>
                     <td>{{$post->created_at->diffForHumans()}}</td>
                     <td>{{$post->updated_at->diffForHumans()}}</td>
                 </tr>

               @endforeach
           @endif


        </tbody>
    </table>



@stop
