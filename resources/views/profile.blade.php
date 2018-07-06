<h4>Hi {{ auth()->user()->firstname }}</h4>
<form method="POST" action="/save">
        <h2>User Profile</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name"> Preferred Workout Location:</label>
            <input type="text" class="form-control" id="workout_location" name="workout_location">
        </div>
 
        <div class="form-group">
            <label for="email">Age:</label>
            <input type="text" class="form-control" id="age" name="age">
        </div>
 
        <div class="form-group">
            <label for="password">Gender:</label>
            <select class="form-control" id="gender"name="gender">
                <option selected>Gender...</option>
                <option>Male</option>
                <option>Female</option>
                </select>
        </div>
        <div class="form-group">
            <label for="password">Weight:</label>
            <input type="text" class="form-control" id="weight" name="weight">
        </div>

        <div class="form-group">
            <label for="password">Target Weight:</label>
            <input type="text" class="form-control" id="t_weight" name="t_weight">
        </div>

        <button style="cursor:pointer" type="submit" class="btn btn-success">ADD</button>
        
        </form>