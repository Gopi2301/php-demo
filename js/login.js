var form = document.getElementById("myForm");

function handleForm (event) {
    event.preventDefault();
} 

form.addEventListener('submit',handleForm)

function insert (){
    $ajax({
        url: 'http://localhost/php%20demo/connect.php',
        type:'POST',
        data:{
            name : $("input[name=name]").val(),
            name : $("input[name=email]").val(),
            name : $("input[name=password]").val(),
            name : $("input[name=number]").val(),
            action : "insert"
        }, 
        sucess: function(response){
            alert("Data Added Successfully")
        }
    })
    console.log("inserted")
}