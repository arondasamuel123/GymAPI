<form method="POST" action="/post" enctype="multipart/form-data">
        <h2>Add Instructor</h2>
        {{ csrf_field() }}
       <div class="form-group">
            <label >Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

      <div class="form-group">
            <label >Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

      <div class="form-group">
            <label >Gender:</label>
                <select class="form-control" name="gender">
                <option selected>Gender...</option>
                <option>Male</option>
                <option>Female</option>
                </select>
        </div>

        <div class="form-group">
            <label >Phone:</label>
            <input type="tel" class="form-control" id="phoneno" name="phoneno">
        </div>


        <div class="form-group">
            <label >Photo:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button  type="submit" class="btn btn-success">ADD</button>
        
        </form>

