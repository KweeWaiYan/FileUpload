@if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

{!! Form::open(['method' => 'post','class'=>'form-horizontal','url' => 'video','files'=>true])!!}
{{ csrf_field() }}
Product name:
<br />
<input type="text" name="name" />
<br />
Product photos (can attach more than one):
<br />
<input type="file" name="video"  />
<br /><br />
<input type="submit" value="Upload" />

{!!Form::close()!!}