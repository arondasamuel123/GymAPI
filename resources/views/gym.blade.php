<br><br><br>
<table width="40%" align="center" height="60%">
    <tr>
        <td>
    <div class="form-group">
    <form method="POST" action="/begin">
        <h2>Gym Locations</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group">
            <label >Latitude:</label>
            <input type="float" class="form-control" id="lat" name="lat">
        </div>
 
  <div class="form-group">
            <label >Longitude:</label>
            <input type="float" class="form-control" id="long" name="long">
        </div>
        

            <button style="cursor:pointer" type="submit" class="btn btn-success">ADD</button>
            
       

               
        </div>
        

    
    </div>
        
    </form>
     <td>
    <tr>
</table>
<br>
<br>