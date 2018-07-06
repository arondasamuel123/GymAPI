<h4>Hi {{ auth()->user()->firstname }}</h4>
<form method="POST" action="/confirm">
        <h2>Add Workout Session</h2>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Location:</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>
 
        <div class="form-group">
            <label for="email">Exercise Type:</label>
            <input type="text" class="form-control" id="exercise_type" name="exercise_type">
        </div>
 
        <div class="form-group">
            <label for="password">Number of reps:</label>
            <input type="number" class="form-control" id="reps" name="reps">
        </div>
        <div class="form-group">
            <label for="password">Number of sets:</label>
            <input type="number" class="form-control" id="sets" name="sets">
        </div>

        <div class="form-group">
            <label for="password">Date:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>

        <button style="cursor:pointer" type="submit" class="btn btn-success">ADD</button>
        
        </form>