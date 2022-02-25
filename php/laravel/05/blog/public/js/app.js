function SentData() {
    var MyName = document.getElementById("MyName").value;
    var MyEmail = document.getElementById("MyEmail").value;
    var MyPass = document.getElementById("MyPass").value;

    var url = "/insertData";
    var data = { name: MyName, email: MyEmail, pass: MyPass };
    axios
        .post(url, data)
        .then(function (response) {
            alert(response.data);
        })
        .catch(function (error) {
            alert("Error");
        });
}
function DeleteData() {
    var MyId = document.getElementById("MyId").value;

    var url = "/deleteData";
    var data = { id: MyId };
    axios
        .post(url, data)
        .then(function (response) {
            alert(response.data);
            url("/");
        })
        .catch(function (error) {
            alert("Error");
        });
}
