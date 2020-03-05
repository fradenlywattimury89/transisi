<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"></div>
  <div class="list-group list-group-flush">
    <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="{{ route('company') }}" class="list-group-item list-group-item-action bg-light">Company</a>
    <a href="{{ route('employe') }}" class="list-group-item list-group-item-action bg-light">Employe</a>
  </div>
</div>

<!-- /#sidebar-wrapper -->

<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
