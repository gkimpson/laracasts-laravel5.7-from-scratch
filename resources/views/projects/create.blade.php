<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Projects</title>
  </head>
  <body>
    <h1>Create a project</h1>


    <form method="POST" action="/projects/">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project Title">
        </div>

        <div>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
        </div>

        <div>
            <button type="submit">Create Project</button>
        </div>
    </form>

  </body>
</html>