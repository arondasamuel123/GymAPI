<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <form method="POST" action="/store">
        <h2>Register</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Firstname:</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
 
        <div class="form-group">
            <label for="email">Lastname:</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
 
        <div class="form-group">
            <label for="password">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

      
 
 
        <div class="form-group" align="center">
            <button style="cursor:pointer" type="submit" class="btn btn-success">Register</button>
        </div>
       
    </form>
     Already have an account?<a href="/login"> Sign In</a>
    <td>
    <tr>
</table>
<br>
<br>