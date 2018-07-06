<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <div class="form-group">
    <form method="POST" action="/session">
        <h2>Log In</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        

            <button style="cursor:pointer" type="submit" class="btn btn-success">Login</button>
            
       

               
        </div>
        

    
    </div>
        
    </form>
     <td>
    <tr>
</table>
<br>
<br>