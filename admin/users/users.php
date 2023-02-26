<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Users</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">Users</h1>
          <hr style="height: 1px;color: white;background-color: white;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <?php
 
                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                </td>
              </tr>
 
              <?php
                }
              }else{
                echo "no data";
            }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }

    body{
      font-family: 'adihausbold', Helvetica;
      background: rgb(46, 61, 63);
      color: white;
      /* background-image: url("images/background.png");
      background-repeat: repeat;
        background-size: 100%; */
    }

    th{
      color: white;
    }

    td{
      color: white;
    }

    @font-face {
        font-family: 'adihausbold';
        src: url('font/adihaus/adihaus-bold.woff-webfont.woff2') format('woff2'),
             url('font/adihaus/adihaus-bold.woff-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;

    }


    @font-face {
        font-family: 'tex_gyre_adventorregular';
        src: url('font/adidas/texgyreadventor-regular-webfont.woff2') format('woff2'),
             url('font/adidas/texgyreadventor-regular-webfont.woff') format('woff');
        font-weight: normal;
        font-style: normal;

    }

    a{
      text-decoration: none;
      color: white;
    }

    .menu{
      visibility: hidden;
    }

    /* Header */

    header{
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0;
    }

    .Name{
      display: flex;

    }

    .adidaslogo img{
      padding-right: 12px;
      width: 90px;
    }

    .Name h1{
      font-size: 40px;
      font-family: 'tex_gyre_adventorregular';
      font-weight: bold;
      padding-top: 10px;
    }

    .Pages ul{
      list-style: none;
      display: flex;
    }

    .Pages ul li{
      padding: 0px 10px;
      padding-top: 20px;
    }

    .Pages a{
      font-size: 20px;
    }

    .list{
      margin-top: 50px;
      margin-left: 30px;
    }
  <style>
</body>
</html>