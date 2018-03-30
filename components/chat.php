<main class="main">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="index.php?page=index">Home</a></li>
                <li><a href="index.php?page=chat">Chat</a></li>
            </ul>
            <h4>Chat</h4>
        </div>                    
        <div class="row" id="chat">
            <div class="col-sm-12 ">
                <div id="chat-window" class="chat-main-window">
                </div><!-- chat-main-window -->
            </div>
            <div class="col-sm-12 ">
                <div class="chat-message-form">
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="chat-username-input">Username</label>
                            <input type="text" class="form-control" id="chat-username-input">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-10">
                            <label for="chat-text-input">Message</label>
                            <textarea class="form-control" id="chat-text-input"></textarea>
                        </div>
                        <div class="form-group col-sm-2">
                            <button class="btn btn-primery" id="chat-send-message-button">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>