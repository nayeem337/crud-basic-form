
<h1>Jannatul Nayeem</h1>
<h3> Update Form </h3>
<h4> {{session('message')}} </h4>
<form action="{{route('update.form',['id' => $form->id])}}" method="POST">
    @csrf
    <label for="name"> </label>
    <input type="text"  id="name"
           name="name" value="{{$form->name}}" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email"
           name="email" value="{{$form->email}}" required>
    <br>

    <br>
    <br>
      <button type="submit"
                 id="submitButton">
          Update Form
        </button>
</form>

