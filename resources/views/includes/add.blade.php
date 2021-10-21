<h1>Create Contact</h1>
<form method="post" action="{{route('addcontact.store')}}">
@csrf
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    @error('name')
        <span style="color:red;">Error: Name is required and with minimun of 5 characters</span>
    @enderror
    <br><br>
    <label for="contact">Contact</label>
    <input type="text" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror">
    @error('contact')
        <span style="color:red;">Error: Contact has to be 9 digits</span>
    @enderror
    <br><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
    @error('email')
        <span style="color:red;">Error: Insert a valid email</span>
    @enderror
    <br><br>

</div>
<button type="submit">Create</button>
<br><br>
<a href="{{route('index')}}">Home</a>
</form>

