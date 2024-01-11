function showData() {
    var peopleList;
    if (localStorage.getItem("peopleList") == null) {
        peopleList = [];
    }
    else {
        peopleList = JSON.parse(localStorage.getItem("peopleList"));
    }

    var html = "";
    peopleList.forEach(function (element, index) {
        html += "<tr>";
        html += "<td>" + element.name + "</td>";
        html += "<td>" + element.age + "</td>";
        html += "<td>" + element.address + "</td>";
        html += "<td>" + element.email + "</td>";
        html += `<td><button onclick="deleteData(${index})" class="btn btn-danger">Delete</button></td>`;
        html += "</tr>";
    });

    document.querySelector("#studentTable tbody").innerHTML = html;
}

document.onload = showData();

function deleteData(index){
    let conf = confirm("Are you sure you want to delete this entry?");
    if(conf==true){
    var peopleList;
    if (localStorage.getItem("peopleList") == null) {
        peopleList = [];
    }else {
        peopleList = JSON.parse(localStorage.getItem("peopleList"));
    }

    peopleList.splice(index,1);
    localStorage.setItem("peopleList",JSON.stringify(peopleList));
    showData();
}
}


// searchtextbox=document.getElementById("search");
// searchtextbox.addEventListener("input",function(){
//     let trlist = document.querySelectorAll("tr");
//     Array.from(trlist).forEach(function(item){
//         let searchedtex = item.getElementsByTagName("td")[0].innerText;
//         let searchtextboxval = searchtextbox.value;
//         let re = new RegExp(searchtextbox,'gi');
//         if(searchedtex.match(re)){
//             item.style.display="table";
//         }
//         else{
//             item.style.display="none";
//         }
//     });
// });

const searchFun = () =>{
    let filter = document.getElementById("myInput").value.toUpperCase();
    let myTable = document.getElementById("studentTable");
    let tr = myTable.getElementsByTagName('tr');

    for(var i = 0; i<tr.length;i++){
        let td = tr[i].getElementsByTagName('td')[0];

        if(td){
            let textValue = td.textContent || td.innerHTML;
            if(textValue.toUpperCase().indexOf(filter) > -1){
                tr[i].style.display="";
            }else{
                tr[i].style.display="none";
            }
        }
    } 
}



// $(document).ready(function(){
//     $("#studentTable").dataTable();

// });

function delEverything(){
    let a = confirm("Are you sure you want to delete all the data?");
    if(a==true){
    localStorage.clear();
    showData();
    }
}