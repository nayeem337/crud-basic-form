
<h1>Jannatul Nayeem</h1>
<h3> Form </h3>
<h4> {{session('message')}} </h4>
<form action="{{route('create.form')}}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name"
           name="name" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email"
           name="email" required>
    <br>
    <button type="submit"
            id="submitButton">
        Submit
    </button>
    <br>
    <br>
    <a href="{{route('manage.form')}}"> Manage Form </a>
</form>

