<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form.css">
    <title>College Form</title>
</head>
<body>
    <div>
        <div>
            <h2 class="main">College Admission Form</h2>
            <pre>
                College admission forms are processed within 48 hours.
                You will receive an email conformation when we process your aplication.
                <strong>Please be patience.</strong>
                <i>Note: You must contact the college  after you have received your email within 24 hours.</i>
            </pre>
        </div>

        <div class="or">
            <h3> Notes </h3>
            <ol>
                <li>Please fill all imformation.</li>
                <li>If the filled information is found to be false, the applicant will be charges as our policy.</li>
                <li>Submit the required documents after you have received the conformation email.</li>
            </ol>
        </div>
        <div class="bor">
            <form action="#" method="GET">

                <div>
                    Your Name:  <input type="text" name="FName" placeholder="First Name"> 
                                <input type="text" name="MName" placeholder="Middle Name">
                                <input type="text" name="LName" placeholder="Last Name">
                </div>
                <br>
                <br>
                <div>
                    Faculty you want to apply:  <select>
                                                        <option value="Humanities">Humanitiess</option>
                                                        <option value="Management">Management</option>
                                                        <option value="Science">Science</option>
        
                                                </select>
                </div>
                <br>
                <br>
                <div>
                    Birth Date: B.S. <input type="date" name="B.S." placeholder="In B.S.">
                                A.D. <input type="date" name="A.D." placeholder="In A.D.">
                </div>
                <br>
                <br>
                <div>
                    Parents/Guardian Name:  <input type="text" name="FName" placeholder="First Name"> 
                                            <input type="text" name="MName" placeholder="Middle Name">
                                            <input type="text" name="LName" placeholder="Last Name">
                </div>
                <br>
                <br>
                <div>
                    Permanent Address: <select>
                                            <option value="P1">Province 1</option>
                                            <option value="P2">Province 2</option>
                                            <option value="P3">Province 3</option>
                                            <option value="P4">Province 4</option>
                                            <option value="P5">Province 5</option>
                                            <option value="P6">Province 6</option>
                                            <option value="P7">Province 7</option>
                                        </select>
                                        <input type="text" name="VDC/Municipality" placeholder="VDC/Municipality">
                                        <input type="number" name="Ward" placeholder="Ward">
                </div>
                <br>
                <br>
                <div>
                    Temporary Address: <select>
                                                <option value="P1">Province 1</option>
                                                <option value="P2">Province 2</option>
                                                <option value="P3">Province 3</option>
                                                <option value="P4">Province 4</option>
                                                <option value="P5">Province 5</option>
                                                <option value="P6">Province 6</option>
                                                <option value="P7">Province 7</option>
                                        </select>
                                        <input type="text" name="VDC/Municipality" placeholder="VDC/Municipality">
                                        <input type="number" name="Ward" placeholder="Ward">
                </div>
                <br>
                <br>
                <div>
                    Email address:  <input type="email" name="PEmail" placeholder="Primary Email "> 
                                    <input type="email" name="SEmail" placeholder="Secondary Email if any ">     
                </div>
                <br>
                <br>
                <div >
                        <button type = "Submit" id="sub" > Submit </button>
                </div>

                




            </form>
        </div>
    </div>


    
</body>
</html>