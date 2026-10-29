<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

<style>
    body {
        display: flex;
        align-items: center;
        height: 100vh;
    }

    form {
        width: fit-content;
        border-radius: 1rem;
        box-shadow: 0px 0px 10px 2px #f2f2f2;
        margin: auto;
        padding: 2rem;
        max-width: 700px;
        background-color: rgba(37, 150, 190, 0.1);
    }

    h3 {
        color: blue;
        border-bottom: 2px solid blue;
        border-radius: 50%;
    }
</style>

<body>

    <div class="container">
        <form class="row g-3">
            <h3 class="text-center mb-10">Fill the User details</h3>

            <div class="md:col-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" />
            </div>
            <div class="md:col-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" placeholder="Phone no." />
            </div>

            <div class="md:col-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email ID" />
            </div>
            <div class="md:col-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" />
            </div>


            <fieldset>
                <legend>Address</legend>

                <div class="row">
                    <div class="col-6">
                        <label for="apartment" class="form-label">Apartment</label>
                        <input type="text" class="form-control" id="apartment" placeholder="1234 Main St" />
                    </div>
                    <div class="col-6">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" />
                    </div>
                </div>
                <div class="md:col-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity" />
                </div>
                <div class="md:col-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="md:col-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
            </fieldset>
            <div class="col-12">
                <div class="form-field">
                    <input type="checkbox" id="gridCheck" class="check">
                    <label for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn-solid theme-primary">Sign in</button>
            </div>
        </form>
    </div>
</body>

<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

</html>