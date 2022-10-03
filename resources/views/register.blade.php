@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<center>
        <h2>Registration</h2><br>
        <table>
            <tr>
                <td>Student Name</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> 
                <td>
                    <select>
                    <option   value= "Mr." > Mr. </option>
                    <option value= "Mrs."> Mrs.</option>
                    <option  value= "Ms."> Ms.</option>
                    <option  value= "Miss"> Miss   </option>
                    </select>
                    <input type="text" name="studentname" value="<?php echo $name;?>">


                    
                </td>
                
            </tr>
            <tr><td><br></td></tr>

            <tr>
                <td>Father's Name </td><td></td>
                <td><input type="text" name="fathername"> </td>
            </tr><tr><td><br></td></tr>

            <tr>
                <td>Mother's Name </td><td></td>
                <td><input type="text" name="mothername"> </td>
            </tr><tr><td><br></td></tr>

            <tr>
                <td>Date of Birth</td><td></td>
                <td><input type="date" name="dateofbirth"> </td>
            </tr><tr><td><br></td></tr>
            <tr>

            <tr>
                <td>Age</td><td></td>
                <td><input type="age" name="age" value="<?php echo $age;?>"> </td>
            </tr><tr><td><br></td></tr>
            <tr>

                <td>Gender</td><td></td>
                <td>
                    <input type="radio" id="male" name="gender"  value= "male"> Male
                    <input type="radio" id="female" name="gender" value= "female"> Female
                </td>

            </tr><tr><td><br></td></tr>

            <tr>
                <td>Email ID</td><td></td>
                <td><input type="text" name="email" value="<?php echo $email;?>"> </td>
            </tr><tr><td><br></td></tr>

            <tr>
                <td>Mobile No.</td><td></td>
                <td><input type="number" name="mobile"> </td>
            </tr><tr><td><br></td></tr>
            <tr>
                <td>Address</td><td></td>
                <td>
                <textarea placeholder='Enter address...' name="address" rows="4" cols="25"></textarea>
                </td>
                
            </tr><tr><td><br></td></tr>
            <tr>
                <td>State</td><td></td>
                <td><input type="text" name="state"> </td>
            </tr><tr><td><br></td></tr>
            <tr>
                <td>City</td><td></td>
                <td><input type="text" name="city"> </td>
            </tr><tr><td><br></td></tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Submit"> </td>
            </tr><tr><td><br></td></tr>

        </table>

        

</center>        

@endsection