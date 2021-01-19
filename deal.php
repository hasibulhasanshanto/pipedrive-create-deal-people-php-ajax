<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Create User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row mt-50">
            <form class="form" id="my_form">
                <div class="form__group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form__control">
                </div>
                <div class="form__group">
                    <label for="per_id">Person ID</label>
                    <input type="text" id="per_id" name="person_id" class="form__control">
                </div>
                <div class="form__group">
                    <label for="value">Value</label>
                    <input type="number" id="value" name="value" class="form__control">
                </div>

                <div class="form__group">
                    <label for="expected_close_date">Expected close date</label>
                    <input type="date" id="expected_close_date" name="expected_close_date" class="form__control">
                </div>

                <div class="form__group">
                    <label for="pro_type">Property Type</label>
                    <select name="pro_type" id="pro_type">
                        <option value="9">Detached</option>
                        <option value="10">Semi-detached</option>
                        <option value="11">Terraced</option>
                        <option value="12">Bungalow</option>
                        <option value="13">Flat</option>
                        <option value="14">Land</option>
                    </select>
                </div>
                <div class="form__group">
                    <label for="bedrooms">Bedrooms</label>
                    <input type="number" id="bedrooms" name="bedrooms" class="form__control">
                </div>
                <div class="form__group">
                    <label for="pro_address">Property Address</label>
                    <textarea name="pro_address" id="pro_address" cols="30" rows="6"
                        placeholder="Varanasi, Uttar Pradesh, India"></textarea>
                </div>
                <div class="form__group">
                    <label for="sell_date">Sell by Date</label>
                    <input type="date" id="sell_date" name="sell_date" class="form__control">
                </div>

                <div class="form__group">
                    <button type="button" id="make_deal" onclick="makeDeal();">Add
                        User</button>
                </div>

            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="custom.js"></script>
</body>

</html>