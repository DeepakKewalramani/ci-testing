//     document.addEventListener('DOMContentLoaded', function() {
//     document.getElementById('myForm').addEventListener('submit', function(e){
//         e.preventDefault();
//         let name = document.getElementById('name').value;
//         let username = document.getElementById('username').value;
//         let password = document.getElementById('password').value;
//         let div = document.getElementById('error');
//         if(name=="" || name==null){
//           alert("Please enter a name");
//              return false;
//        }
//        else if(username=="" || username==null){
//         alert("Please enter a username");
//               return false;
//        }
//        else if(password=="" || password==null){
//            alert("Please enter a password");
//            return false;
//        }
//        else if(username.length<5){
//         alert("Username must be at least 5 charcter required");
//            return false;
//           }
//       else if(password.length<8 ){
//         alert("Password mininum 8 above characters required");
//         return false;
//     }
//     return true
//     });
// })
function validate() {
    let name = document.getElementById('name').value;
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;
    let div = document.getElementById('error');
    if(name=="" || name==null){
        alert("Please enter a name");
            return false;
    }
    else if(username=="" || username==null){
    alert("Please enter a username");
            return false;
    }
    else if(password=="" || password==null){
        alert("Please enter a password");
        return false;
    }
    else if(username.length<5){
    alert("Username must be at least 5 charcter required");
        return false;
        }
    else if(password.length<8 ){
        alert("Password mininum 8 above characters required");
        return false;
    }
    return true
}