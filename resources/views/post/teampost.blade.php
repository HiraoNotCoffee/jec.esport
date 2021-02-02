@section('content')
<form class="" action="{{ url('/post/teampost') }}" method="post">
@csrf



  <input type="text" name="body" value="" >
  <input type="submit" value="投稿" >

</form>

@endsection
