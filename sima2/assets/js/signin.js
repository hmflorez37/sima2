function onSignIn(googleUser){
    let profile = googleUser.getBasicProfile();
    auth ("login", profile);

}
function signOut()
{
    gapi.auth2.getAuthInstance().disconnect();

    let auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function ()
    {
        auth("logout");
        window.location.href = "http://sima2.com";
    });
}



function auth(action, profile){

    let  data ={UserAction: action}

    if(profile){

        data = {
            UserName: profile.getGivenName(),
            UserLastName : profile.getFamilyName(),
            UserEmail : profile.getEmail(),
            UserAction : action
        
        };
    }

    $.ajax({

        type: "POST",
        url: "../../modelos/user.php",
        data: data,
        success: function(data){
            let user = JSON.parse(data);

            if(user.logged)
                {
                    $('#user_given_name').text( profile.getGivenName());
                    $('#user_last_name').text( profile.getFamilyName());
                    $('#user_email').text( profile.getEmail());
                    $('#user_profile').attr( "src", profile.getImageUrl());

                    if(document.URL === "http://sima2.com")
                    {
                        window.location.href = "http://sima2.com/vistas/inicio";
                    }
                }
                else
                {
                    alert("La cuenta no esta registrada");
                    signOut();

                }
                
            }
        }
    )
}