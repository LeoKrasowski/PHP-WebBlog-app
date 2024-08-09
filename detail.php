<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>PHP Web page</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">sharing</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"></use></svg>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="792" height="334" style="display: block; box-sizing: border-box; height: 267px; width: 634px;"></canvas>

      <h2>Section title</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">title</th>
              <th scope="col">title</th>
              <th scope="col">title</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>Data</td>
              <td>Random</td>
              <td>Enriches</td>
              <td>Table</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>Enriches</td>
              <td>Magnificent</td>
              <td>Design</td>
              <td>Coordination</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>Random</td>
              <td>Rich</td>
              <td>Value</td>
              <td>Useful</td>
            </tr>
            <tr>
                <td>1,007</td>
                <td>Data</td>
                <td>Random</td>
                <td>enrich</td>
                <td>Table</td>
                </tr>
            <tr>
            <td>1,008</td>
              <td>enrich</td>
              <td>Incandescent</td>
              <td>Design</td>
              <td>Format</td>
            </tr>
            <tr>
            <td>1,009</td>
              <td>enrich</td>
              <td>Incandescent</td>
              <td>Design</td>
              <td>Format</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>enrich</td>
                <td>Incandescent</td>
                <td>Design</td>
                <td>Format</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>enrich</td>
                <td>Incandescent</td>
                <td>Design</td>
                <td>Format</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>enrich</td>
                <td>Incandescent</td>
                <td>Design</td>
                <td>Format</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>enrich</td>
                <td>Incandescent</td>
                <td>Design</td>
                <td>Format</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>enrich</td>
                <td>Incandescent</td>
                <td>Design</td>
                <td>Format</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>




    <?php require "blocks/footer.php" ?>
</body>