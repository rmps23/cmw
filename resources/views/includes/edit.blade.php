<h1>Edit Contact</h1>
<form method="post" action="{{route('contact.update', $contacts->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <label for="name">Name</label>
    <input type="text" name="name" id="name" placeholder="Enter title" value="{{$contacts->name}}">
    @error('name')
        <span style="color:red;">Error: Name is required and with minimun of 5 characters</span>
    @enderror
    <br><br>

    <label for="contact">Contact</label>
    <input type="text" name="contact" id="contact" placeholder="Enter title" value="{{$contacts->contact}}">
    @error('contact')
        <span style="color:red;">Error: Contact has to be 9 digits</span>
    @enderror
    <br><br>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Enter title" value="{{$contacts->email}}">
    @error('email')
        <span style="color:red;">Error: Insert a valid email</span>
    @enderror
    <br><br>
    <button type="submit">Submit</button>
</form>
<br><br>

<a href="{{route('contact.view', $contacts->id)}}"><button>BACK</button></a>