<?php
$mysqli = mysqli_connect('localhost', 'root', '', '6a-database');
$result = mysqli_query($mysqli, "SELECT `name`.`name`, `work`.`name`, `salary`.`salary` FROM `name`, `work`, `salary` WHERE `work`.`id` = `name`.`id_work` AND `salary`.`id` = `name`.`id_salary`;");
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ARKADEMY BOOTCAMP</title>

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-light bg-white shadow">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="assets/images/logo1.jpg" width="10%">&nbsp;&nbsp;ARKADEMY BOOTCAMP</a>
    </nav>

    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="col-md-12" align="right">
              <button href="#mAdd" role="button" class="btn btn-warning btn-md" data-toggle="modal">ADD</button>
            </div>
            <br/>
            <div class="col-md-12">
      <table class="table table-bordered text-center">
        <thead>
          <tr class="table-active" align="center">
            <th>Name</th>
            <th>Work</th>
            <th>Salary</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody align="center">
          <?php
          while($data = mysqli_fetch_array($result)) {
              echo '<tr>';
              echo "<td>".$data[0]."</td>";
              echo "<td>".$data[1]."</td>";
              echo "<td>".$data[2]."</td>";
              echo '<td>';
              echo '<a href="#mDelete" data-toggle="modal" data-name="'.$data[0].'"><i class="far fa-trash-alt" style="font-size:25px; color: red;"></i></a>';
              echo "&nbsp;&nbsp;&nbsp;";
              echo '<a href="#mEdit" data-toggle="modal" data-name="'.$data[0].'"><i class="far fa-edit" style="font-size:25px; color: blue;"></i></a>';
              echo '</td>';
              echo '</tr>';
          }
          ?>
        </tbody>
      </table>
          </div>
        </div>
      </div>
    </section>

   <div class="modal fade" id="mAdd" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">ADD DATA</h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form">
                <div class="form-group">
                  <input type="email" class="form-control"/>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option value="" disabled selected>Work</option>
                        <option>Frontend Dev</option>
                        <option>Backend Dev</option>
                      </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option value="" disabled selected>Salary</option>
                        <option>10.000.000</option>
                        <option>12.000.000</option>
                      </select>
                </div>
                <div class="form-group" align="right">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">ADD</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="mEdit" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">EDIT DATA </h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form">
                <div class="form-group">
                  <input type="email" class="form-control"/>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option value="" disabled selected>Work</option>
                        <option>Frontend Dev</option>
                        <option>Backend Dev</option>
                      </select>
                </div>
                <div class="form-group">
                  <select class="form-control">
                    <option value="" disabled selected>Salary</option>
                        <option>10.000.000</option>
                        <option>12.000.000</option>
                      </select>
                </div>
                <div class="form-group" align="right">
                  <button type="button" class="btn btn-warning">EDIT</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="mDelete" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">
              </h5>
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body" align="center">
              <img src="assets/images/logo2.png" width="25%"><br/>
              <b>Data Berhasil Dihapus</b>
              <br/><br/>
            </div>
          </div>
        </div>
      </div>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/a076d05399.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $('#mEdit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var name = button.data('name') // Extract info from data-* attributes
        var work = button.data('work')
        var salary = button.data('salary')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#editname').val(name)
        modal.find('#editwork').val(work)
        modal.find('#editsalary').val(salary)
        })
        $('#mDelete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var name = button.data('name') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('#deletename').text(name)
    </script>

  </body>
</html>
