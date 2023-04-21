<label for="name">Name</label>
{{ Form::text('name', null, ['id'=> "name", "class"=>"name"] ) }}

<label for="phone">Phone Number</label>
{{ Form::number('phone', null, ['id'=> "phone", "class"=>"phone"] ) }}

<button type="submit"> Submit </button>