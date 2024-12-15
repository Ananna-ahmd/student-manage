<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <style>

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #d5a5df;
  position: fixed;
  height: 100%;
  overflow: auto;
  text-decoration: none;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration:none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #055d153a;
  color:black;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><h2>Student Profile</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

              <form  method="POST" action=""class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
              </form>
            </div>
          </nav>
        </div>
    </div>
    <div class="row">

            <!-- The sidebar -->
            <div class="col-md-3">
<div class="sidebar">
    <a class="active" href="<?php echo e(url('/')); ?>">Home</a>
    <a href="<?php echo e(url('/students')); ?>">Student</a>
    <a href="">Academic</a>
    <a href="">Lesson Plan</a>
  </div>
</div>
  <div class="col-md-6">

    <?php echo $__env->yieldContent('content'); ?>


        </div>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\studentmanage\studentmanage\resources\views/layout.blade.php ENDPATH**/ ?>