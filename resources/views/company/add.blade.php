<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- using the store function on company conrtoller -->

<form action="{{route('company.store')}}" method="post" role="form">
        {{csrf_field()}}


<div class="form-group">
    		<label>Category</label>

    		<select class="form-control textboxes" name="category">
                    <option disabled selected value> Industry </option>
                    <option value="Transportation">Transportation</option>
                    <option value="Food_Service">Food Service</option>
                    <option value="IT_Related">IT Related</option>
                    <option value="Finance">Finance</option>
                    <option value="Medical">Medical</option>
            </select>
</div>


<div class="form-group">
    		<label>Company Name</label>
    		<input type="text" class="form-control textboxes" name="company_name" id="" placeholder="Company Name">
</div>

<div class="form-group">
    		<label>Company Address</label>
    		<input type="text" class="form-control textboxes" name="company_address" id="" placeholder="Company Address">
</div>

<div class="form-group">
    		<label>Zip Code</label>
    		<input type="number" class="form-control textboxes" name="zipcode" id="" min="1" placeholder="Zip Code">
</div>

<div class="form-group">
    		<label>Contact No</label>
    		<input type="number" class="form-control textboxes" name="contactno" id="" placeholder="Contact No">
</div>

<div class="form-group">
    		<label>Fax</label>
    		<input type="number" class="form-control textboxes" name="fax" id="" placeholder="Fax">
</div>

<div class="form-group">
    		<label>Email Address</label>
    		<input type="email" class="form-control textboxes" name="emailaddress" id="" placeholder="Email Address">
</div>





<button type="submit" class="btn float-right">
                Submit  <i class="fa fa-1x fa-arrow-circle-right" aria-hidden="true"></i>
</button>
</body>
</html>