<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" href="Emp.css">
    <title>Employee Details</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <form method="POST" action="Emp_data.php">
    <fieldset>
    <table>
        
        <h2><i class='fas fa-id-card'></i> PERSONAL DETAILS</h2>
        
        <tr>
            <td>
                <label for="name">Full Name:</label>
                <input class="wid" type="text" id="name" name="name" pattern="^[a-zA-Z\s]+$" title="Enter Your Name correctly" required>
            </td>
            <td>
                <label for="fname">Father Name:</label>
                <input class="wid" type="text" id="fname" name="fname" pattern="^[a-zA-Z\s]+$" title="Enter Your Father Name correctly" required>
            </td>
            <td>
                <label for="dob">Date Of Birth:</label>
                <input class="wid" type="date" id="dob" name="dob" max="2005-05-17"  pattern="\d{4}-\d{2}-\d{2}" title="Please enter a valid date in the format YYYY-MM-DD"required>
            </td>
            <td>
                <label for="email">E-mail:</label>
                <input class="wid" type="email" id="email" name="email" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="gender">Gender:</label>
                <input type="radio" id="gender-male" name="gender" value="male" required>
                <label class="gen" for="gender-male">Male</label>
                <input type="radio" id="gender-female" name="gender" value="female" required>
                <label class="gen" for="gender-female">Female</label>
                <input class="gen" type="radio" id="gender-trans" name="gender" value="Others" required>
                <label class="gen" for="gender-trans">Others</label><br><br>
            </td>
            <td>
                <label class="wid1"  for="marital-status">Marital Status:</label>
                <select class="wid1" id="marital-status" name="marital-status" required>
                    <option value="" disabled selected>Select Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widowed">Widowed</option>
                </select><br><br>
            </td>
            <td>
                <label for="address">Address:</label>
                <textarea id="address" name="address" placeholder="Enter Your Address" rows="4" cols="50" pattern="[A-Za-z,.\s]+" title="Enter Address correctly" required></textarea>
            </td>
            <td>
                <label  for="phone">Phone Number:</label>
                <input class="wid" type="tel" id="phone" name="phone" maxlength="10" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="lang">Languages Known:</label>
                <textarea id="lang" name="lang" placeholder="languages known..." rows="4" cols="50" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed" required></textarea>
            </td>
            <td>
                <label for="hobbies">Hobbies:</label>
                <textarea id="hobbies" name="hobbies" placeholder="Hobbies..." rows="4" cols="50" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed" required></textarea>
            </td>
            <td>
                <label for="nationality">Nationality:</label>
                <input class="wid" type="text" id="nationality" name="nationality" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed" required>
            </td>
        </tr>
        </table>
        <table>
        
        <h2><i class="fa-solid fa-book-open-reader"></i> EDUCATIONAL DETAILS</h2>
        
        <tr>
            <td>
                <label for="college">College Name:</label>
                <input class="wid" type="text" id="college" name="college" pattern="[A-Za-z'&\s]+" title="Enter College name correctly" required>
            </td>
            <td>
                <label for="cplace">Place of College:</label>
                <input class="wid" type="text" id="cplace" name="cplace" pattern="^[a-zA-Z\s]+$" title="Enter Place name coorectly" required>
            </td>
            <td>
                <label for="cdept">Department:</label>
                <input class="wid" type="text" id="cdept" name="cdept" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="course">Course:</label>
                <input class="wid" type="text" id="course" name="course" pattern="[A-Za-z. ]+" title="Please enter valid course name" required>
            </td>
            <td>
                <label for="cgp">CGP (%):</label>
                <input class="wid" type="text" id="cgp" name="cgp" pattern="^[0-9]+(?:\.[0-9]+)?%?$" title="Only numbers, decimals, and the percentage symbol are allowed" required>
            </td>
            <td>
                <label for="clang">Programming Languages Known:</label>
                <textarea id="clang" name="clang" placeholder="Programming Languages..." rows="4" cols="50" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed" required></textarea>
            </td>
        </tr>
    </table>
    
    <h2><i class="fa-solid fa-user"></i> PROFESSIONAL DETAILS</h2>
    
    <table>
        <tr>
            <td>
                <label for="job-pos">Job Position:</label>
                <input class="wid" type="text" id="job-pos" name="job-pos" pattern="^[a-zA-Z\s]+$" title="Only letters and spaces are allowed" required>
            </td>
            <td>
                <label class="wid1"  for="dept">Department:</label>
                <select class="wid1" id="dept" name="dept" required>
                    <option value="" disabled selected>Select Department</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Adiministration">Adiministration</option>
                    <option value="Software Testing"> Software Testing</option>
                    <option value="Marketing">Marketing</option>
                </select><br><br>
            </td>
            <td>
                <label for="emp-id">Employee-ID:</label>
                <input class="wid" type="text" id="emp-id" name="emp-id" pattern="[A-Za-z0-9]+" title="Only letters and Numbers are allowed" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="doj">Date of Joining:</label>
                <input class="wid" type="date" id="doj" name="doj" pattern="\d{4}-\d{2}-\d{2}" title="Please enter a valid date in the format YYYY-MM-DD" required>
            </td>
            <td>
                <label for="salary">Salary (₹):</label>
                <input class="wid" type="text" id="salary" name="salary" pattern="[0-9.]+" title="Please enter valid Salary" required>
            </td>
            <td>
                <label for="experience">Year of Experience:</label>
                <input class="wid" type="number" id="experience" name="experience" min="0" max="30" required>
            </td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td>
                <label for="company">Do you have interested in working in this company?</label>
                <select id="company" name="company" required>
                     <option value="" disabled selected>Select an option</option>
                     <option value="Yes, I am interested">Yes, I'm interested</option>
                     <option value="No">No</option>
                </select>
            </td>
            <td>
                <label for="work">About our Company's Workspace?</label>
                <input type="radio" id="good" name="work" value="Good" required>
                <label class="gen" for="good">Good</label>
                <input type="radio" id="bad" name="work" value="Bad" required>
                <label class="gen" for="bad">Bad</label>
            </td>
            <td>
                <input type="checkbox" id="terms" name="terms" value="Accepted Terms">
                <label class="gen" for="terms">I hereby declare that the information provided is true and correct.</label><br><br>

            </td>
        </tr>
    </table>
    <hr>
    <table>
    <tr>
        <td>
            <input type="submit" value="Submit">
        </td>
    </tr>
    <tr>
        <td>
            <p class="foot">&copy Designed and Developed by Ari</a></p>
        </td>
    </tr>
    </table>
    </fieldset>
    </form>
</body>
</html>