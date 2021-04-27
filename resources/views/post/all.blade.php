<h1>Post Information Gors Here ..</h1>
<a href=""> all Post</a>
<a href=""> new post</a>
<table border="1" width="1200" style="margin-top: 50px;">
    <tr>
        <th>SL NO</th>
        <th>Post Title</th>
        <th>Author Name</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>1</td>
        <td>{{$post->title}}</td>
        <td>{{$post->author_name}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->status}}</td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr>
    @endforeach
</table>
