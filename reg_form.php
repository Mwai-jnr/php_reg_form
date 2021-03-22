<!DOCTYPE html>
<html>

<head>
    <title>Registration_form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<!-- form details.
reg id , first ,last and other name,  marital status, course taking, date of birth,
age ,county, eamil, gender, idno, phone number,
next of kin details
name, relaion, phone number. -->

<body>
    <div class="bg-image"></div>

    <div class="reg_form">
        <form  class="regForm" method="POST" action="">

            <!-- form design -->
            <h2>Fill the form below </h2>
            <h3>Personal info</h3>
            <label for="fname">First name:</label>
            <input class="heighttext" type="text" id="fname" placeholder="First name">
             <label for="lname">Last name:</label>
            <input class="heighttext"t ype="text" id="lname" placeholder="Last name">
             <label for="oname">Other name:</label>
            <input class="heighttext" type="text" id="oname" placeholder="Other name"><br/><br/>
             <label for="age">Age:</label>
            <input class="heighttext"type="text" id="age" placeholder="Age">
            <label for="Dob">Date of birth: </label>
            <input class="heighttext" class="heighttext" type="date" id="Dob" name="Date of birth">
             <label for="gender">Gender:</label>
            <select class="heighttext" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br/><br/>
            <label for="phone_no"> Phone number:</label>
            <input class="heighttext" type="tel" id="phone_no" placeholder="0000-000-000" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
            <label for="id_no">ID Number:</label>
            <input class="heighttext" type="number" id="id_no" placeholder="ID Number">
            <label for="email">Email:</label>
            <input class="heighttext" type="email"  id="email" placeholder="e.g. user@server.com" name="email">
            <label for="county">County</label>
            <input class="heighttext" type="text" id="county" placeholder="county of birth" name="County"><br/><br/>
            <h3>Next of kin</h3>
            <label for="k_name">Name:</label>
            <input class="heighttext" type="text" id="k_name" placeholder="Kin name">
            <label for="relation"> Relation:</label>
            <select class="heighttext" id="relation" name="relation">
                <option value="father">Father</option>
                <option value="mother">Mother</option>
                <option value="wife">Wife</option>
                <option value="son">Son</option>
                <option value="daughter">Daughter</option>
                <option value="sister">Sister</option>
                <option value="brother">Brother</option>
            </select>
            <label for="k_phone_no"> Phone number:</label>
            <input class="heighttext" type="tel" id="k_phone_no" placeholder="0000-000-000" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required><br/><br/>
            <label>
                <input type="checkbox" name="agree"> I agree to terms and conditions
            </label><br/><br/><br/>

            <!-- Submit buttons -->
            <div>
                <button type="submit" value="Submit">Submit</button>
                <button type="reset" value="Reset">Reset </button>
                <button type="cancel" onclick="">Cancel</button>
            </div>
        </form>
        
    </div>
</body>

</html>