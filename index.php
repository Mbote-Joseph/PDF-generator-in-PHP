<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PDF Generator</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-5">
      <form action="makepdf.php" method="post" class="offset-md-3 col-md-6">
        <h1>Create your PDF</h1>
        <p>Fill out the details below and the PDF will be downloaded</p>
        <div class="row mb-2">
          <div class="col-md-6">
            <input
              type="text"
              name="firstname"
              placeholder="First Name"
              class="form-control"
              required
            />
          </div>
          <div class="col-md-6">
            <input
              type="text"
              name="lastname"
              placeholder="Surname"
              class="form-control"
              required
            />
          </div>
        </div>

        <div class="mb-2">
          <input
            type="email"
            name="email"
            placeholder="Email Address"
            class="form-control"
            required
          />
        </div>
        <div class="mb-2">
          <input
            type="text"
            name="phone"
            placeholder="Phone Number"
            class="form-control"
            required
          />
        </div>
        <div class="mb-2">
        <textarea name="message" placeholder="Type your message" rows="5" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success btn-lg btn-block">
          Create PDF
        </button>
      </form>
    </div>
  </body>
</html>
