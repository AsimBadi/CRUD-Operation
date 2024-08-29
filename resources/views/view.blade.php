<p><strong>Id: </strong>{{$student->id}}</p>
<p><strong>Name: </strong>{{$student->name}}</p>
<p><strong>Email: </strong>{{$student->email}}</p>
<p><strong>Description: </strong>{{$student->description}}</p>
<p><strong>Machines: </strong>{{$student->machines}}</p>
<p><strong>Gender: </strong>{{$student->gender}}</p>
<p><strong>Country: </strong>{{strtoupper($student->country)}}</p>
<p><strong>Category: </strong>{{$student->category->name}}</p>
<p><strong>Created at: </strong>{{$student->created_at}}</p>
<p><strong>Updated at: </strong>{{$student->updated_at}}</p>
<p><strong>Image: </strong><img src="{{url('storage/'.$student->image_path)}}" style="width: 200px; height: 200px;" alt=""></p>
<a href="/">Back To list</a>
