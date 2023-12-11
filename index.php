<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        
        body {
            padding: 20px;
            background-color: antiquewhite;
        }
      
        .content {
            max-width: 50%; 
            max-height: 40%; 
        }
        #form{
            background-color: green;
            border-radius: 10px;

        }
    </style>
</head>
<body>
    
    <div id="form" class="content container table-bordered table-hover table-dark table-responsive">
        <h1 style="font-weight: bold;" class="primary">Student Information Form</h1>
        <form action="process_form.php" method="post">
            
            <h4 style="font-weight: bold;">Personal Information</h4>
            <table class="table table-bordered">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" style="font-weight: bold;" class="form-control" id="name" value="Mohamed Hussein Ghedi" name="name" required>
                </div>
                <div class="form-group">
                    <label for="pob">Place of Birth:</label>
                    <input type="text" style="font-weight: bold;" class="form-control" id="pob" value="Mogadisho-Somali" name="pob" required>
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control" id="dob" value="19-5-19000" name="dob" required>
                </div>
            </table>

            <h4>Parent Information</h4>
            <div class="form-group">
                <label for="parentName">Parent's Name:</label>
                <input type="text" style="font-weight: bold;" class="form-control" id="parentName" value="Hussein Ghedi" name="parentName" required>
            </div>
            <div class="form-group">
                <label for="parentTelephone">Parent's Telephone:</label>
                <input type="tel" style="font-weight: bold;" class="form-control" id="parentTelephone" value="252-615619807" name="parentTelephone" required>
            </div>
         

            <h4 style="font-weight: bold;">Academic Information</h4>
            <div class="form-group">
                <label for="studentId">Student ID:</label>
                <input type="text" style="font-weight: bold;" class="form-control" id="studentId" value="C120800" name="studentId" required>
            </div>
            <div class="form-group">
                <label for="faculty">Faculty:</label>
                <input type="text" style="font-weight: bold;" class="form-control" id="faculty" value="Information Technology" name="faculty" required>
            </div>
          
            <div class="form-group">
                <label for="regDate">Registration Date:</label>
                <input type="date" style="font-weight: bold;" class="form-control" id="regDate" value="27/4/2020" name="regDate" required>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" value="kk.png" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
   
    </div>
</body>
</html>

