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
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form__control">
                </div>
                <div class="form__group">
                    <label for="label">Label</label>
                    <select name="label" id="label">
                        <option value="null">NOLABEL</option>
                        <option value="1">CUSTOMER</option>
                        <option value="2">HOT LEAD</option>
                        <option value="3">WARM LEAD</option>
                        <option value="4">COLD LEAD</option>
                    </select>
                </div>
                <div class="form__group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form__control">
                </div>
                <div class="form__group">
                    <label for="email_label">Email Label</label>
                    <select name="email_label" id="email_label">
                        <option value="work">Work</option>
                        <option value="home">Home</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form__group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" class="form__control">
                </div>
                <div class="form__group">
                    <label for="phone_label">Phone Label</label>
                    <select name="phone_label" id="phone_label">
                        <option value="work">Work</option>
                        <option value="home">Home</option>
                        <option value="mobile">Mobile</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form__group">
                    <button type="button" id="add_user" onclick="pDriveIntegration();">Add
                        User</button>
                </div>

            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="custom.js"></script>
</body>

</html>