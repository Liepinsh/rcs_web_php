<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <p>&copy cat corp. All rights reserved 2018.</p>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="js/main.js"></script>


<!-- ----------script for register---------- -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script>
    $('#reg-form').submit(function(){
        var errors = [];
        $('.errors ul').html('');
        $('.has-error').removeClass('has-error');

        if ($('input[name="username"]').val() == '') {
            errors.push('Please enter username');
            $('input[name="username"]').addClass('has-error');
        }
        if ($('input[name="password"]').val() == '') {
            errors.push('Please enter password');
            $('input[name="password"]').addClass('has-error');
        }
        if ($('input[name="password"]').val().length < 8) {
            errors.push('Password must be at least 8 symbols');
            $('input[name="password"]').addClass('has-error');
        }
        if ($('input[name="password2"]').val() == '') {
            errors.push('Please retype the password');
            $('input[name="password2"]').addClass('has-error');
        }
        if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
            errors.push('Passwords must match');
            $('input[name="password"]').addClass('has-error');
            $('input[name="password2"]').addClass('has-error');
        }
        if ($('input[name="first_name"]').val() == '') {
            errors.push('Please enter first name');
            $('input[name="first_name"]').addClass('has-error');
        }
        // if ($('select[name="country"]').val() == 0) {
        //     errors.push('Please select country');
        //     $('select[name="country"]').addClass('has-error');
        // }
        // if ($('input[name="agree"]').is(":checked") == false) {
        //     errors.push('Please agree with terms and conditions');
        //     $('input[name="agree"]').addClass('has-error');
        // }
        if (errors.length > 0) {
            // handle errors
            for (var index = 0; index < errors.length; index++) {
                var element = errors[index];
                $('.errors ul').append('<li>' + element + '</li>');
            }
            $('.errors').show();
            return false;
        }
    });
</script>


<!-- ----------script for chat---------- -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
    function initializeChat(elID) {
        const chatPlaceholder = document.getElementById(elID);
        window.t = chatPlaceholder;
        const messageInput = document.querySelector('#chat-text-input');
        const messageAuthorInput = document.querySelector('#chat-username-input');
        const messageSendButton = document.querySelector('#chat-send-message-button');
        const chatWindow = document.querySelector('#chat-window');
        const chatMessages = [];
        messageSendButton.addEventListener('click', function(e) {
            e.preventDefault();
            if (!messageAuthorInput.value.length || !messageInput.value.length) {
                alert('Username and Text needed, to participate in chat');
                // console.log("empty username and text")
                return;
            }
            chatMessages.push({
                username: messageAuthorInput.value,
                text: messageInput.value,
                date: new Date()
            })
            populateMessageWindow(chatMessages)
        })
        function populateMessageWindow(messageArray) {
            let message = messageArray[messageArray.length - 1];
            let messageMarkup = `<div class="chat-message">
                                    <h5>${ message.username } <em>${ message.date }</em></h5>
                                    <p>${ message.text }</p>
                                </div>`;
            chatWindow.innerHTML += messageMarkup;                         
        }
    }
    initializeChat('chat');
</script>


<!-- ----------Script for fancybox images in articel---------- -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
<script>
    $('.images-col a').fancybox();
</script>


<!-- ----------Script for google maps---------- -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAm46NQhA_hX9UuZzpNQ88OD34NTwjr2Ig&callback=initMap" async defer></script>
<script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
    function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 56.964, lng: 24.103},
        zoom: 16
        });
        var marker = new google.maps.Marker({
        position: {lat: 56.964, lng: 24.104},
        map: map,
        title: 'Riga Coding School'
        });
    }
</script>
</body>
</html>