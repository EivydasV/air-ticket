<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <div class="container">
        <h1 class="">AirTicket</h1>
        <form>
        <div class="mb-3">
        <label for="skrydzioNr" class="form-label">Skrydžio nr.</label>
            <select class="form-select" id='skrydzioNr'
            name='skrydzioNr'
            >
                <option selected>select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kodas" class="form-label">Asmens Kodas</label>
            <input type="number" class="form-control"
            name='kodas'
            id="kodas">
        </div>
        <div class="mb-3">
            <label for="vardas" class="form-label">Vardas</label>
            <input type="text" class="form-control"
            name='vardas'
            id="vardas">
        </div>
        <div class="mb-3">
            <label for="pavarde" class="form-label">Pavarde</label>
            <input type="text" class="form-control"
            name='pavarde'
            id="pavarde">
        </div>
        <div class="mb-3">
        <label for="iskurskrenda" class="form-label">Iš kur skrendą</label>
            <select class="form-select" id='iskurskrenda'
            name='iskurskrenda'
            >
                <option selected>select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
        <label for="ikurskrenda" class="form-label">Į kur skrendą</label>
            <select class="form-select" id='ikurskrenda'
            name='ikurskrenda'
            >
                <option selected>select</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="kaina" class="form-label">Kaina &euro;</label>
            <input type="number" class="form-control"
            name='kaina'
            id="kaina">
        </div>
        <div class="mb-3">
            <label for="bagazas" class="form-label">Bagažas (kg)</label>
            <input type="number" class="form-control"
            name='bagazas'
            id="bagazas">
        </div>
        <div class="mb-3">
            <label for="pastabos" class="form-label">Pastabos</label>
            <textarea class="form-control" placeholder="Leave a comment here" id="pastabos" name='pastabos'></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>
</html>
