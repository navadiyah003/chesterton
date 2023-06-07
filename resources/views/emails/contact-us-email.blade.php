<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contact Us</title>
</head>

<body>
    <div class="form-group form-check">
        <label class="form-check-label">Title :- </label>{{ $contact->title }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">First Name :- </label>{{ $contact->f_name }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">Last Name :- </label>{{ $contact->l_name }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">Email :- </label>{{ $contact->email }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">Phone Number :- </label>{{ $contact->phone_number }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">Address :- </label>{{ $contact->address }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">ZipCode :- </label>{{ $contact->zipcode }}
    </div>
    <div class="form-group form-check">
        <label class="form-check-label">Help :- </label>{{ $contact->contact_help }}
    </div>
    {{-- <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">ZipCode</th>
                <th scope="col">Help</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $contact->title }}</td>
                <td>{{ $contact->f_name }}</td>
                <td>{{ $contact->l_name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone_number }}</td>
                <td>{{ $contact->address }}</td>
                <td>{{ $contact->zipcode }}</td>
                <td>{{ $contact->contact_help }}</td>
            </tr>
        </tbody>
    </table> --}}
</body>

</html>
