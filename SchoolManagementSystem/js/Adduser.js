
function validateForm() {

    var Name2 = document.querySelector('#Name2').value;
    var DOB = document.getElementById("DOB").value;
    var Mobile = document.getElementById("Mobile").value;
    var Email = document.getElementById("Email").value;
    var Address = document.getElementById("Address").value;
    var Gender = document.getElementById("Gender").value;
    var Grade = document.getElementById("Grade").value;
    var YOA = document.getElementById("YOA").value;
    if (Name2 == "") {
        alert("Name is required");
        return false;
    }
    if (DOB == "") {
        alert("Date of Birth is required");
        return false;
    }

    if (Mobile == "") {
        alert("Mobile Number is required");
        return false;
    }
    else if (Mobile.length != 10) {
        alert("Please enter a valid phone number");
        return false;
    }
    if (Email == "") {
        alert("Email is required");
        return false;
    } else if (!Email.includes("@")) {
        alert("Invalid Email Address");
        return false;
    }
    if (Address == "") {
        alert("Address is required");
        return false;
    }
    if (Gender == "--Select Gender--") {
        alert("Gender is required");
        return false;
    }
    if (Grade == "--Select Grade--") {
        alert("Grade is required");
        return false;
    }
    if (YOA == "") {
        alert("Year of Admission required");
        return false;
    }
    var html = "";
    peopleList.forEach(function (element, index) {
        html += "<tr>";
        html += "<td>" + element.name + "</td>";
        html += "<td>" + element.age + "</td>";
        html += "<td>" + element.address + "</td>";
        html += "<td>" + element.email + "</td>";
        html += `<td><button onclick="deleteData(${index})" class="btn btn-danger">Delete</button> <button onclick="updateData(${index})" class="btn btn-warning">Edit</button></td>`;
        html += "</tr>";
    });

    return true;
}
