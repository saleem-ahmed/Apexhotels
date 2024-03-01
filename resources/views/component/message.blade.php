<div class="message-btn">
    <span class="open-button" onclick="openForm()">
        <img src="{{ asset('frontend/images/message-btn-img.svg') }}" alt="">
        Lets Chat
    </span>

    <div class="chat-popup" id="myForm">
        <div class="chatbox">
            <div class="chatbox-header">
                <div class="chat-title">
                    <h2>Chat Box</h2>
                </div>
                <div class="chat-icons">
                    <img src="{{ asset('frontend/images/dots.svg') }}" alt="">
                    <img onclick="closeForm()" src="{{ asset('frontend/images/close-white.svg') }}" alt="">

                </div>
            </div>
            <div class="chat-content">
                <p>
                    Hi sir, how can i help you?
                </p>
                <p>
                    I am a software engineer. I have a lot of experience in the
                </p>

            </div>
            <div class="typing">
                <textarea placeholder="Write message"></textarea>
                <img class="s-icon" src="{{ asset('frontend/images/send.svg') }}" alt="">
            </div>
        </div>
    </div>
</div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>
